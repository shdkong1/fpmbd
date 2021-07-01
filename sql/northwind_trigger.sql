--Membatalkan Pembelian Barang Habis
CREATE OR REPLACE FUNCTION out_of_stock_check() RETURNS TRIGGER
AS
    $BODY$
    begin
        if ((SELECT units_in_stock FROM products p WHERE p.product_id = new.product_id) = 0) then
            return null;
        end if;
        return new;
    end;
    $BODY$
LANGUAGE plpgsql;

CREATE TRIGGER out_of_stock BEFORE INSERT ON order_details
    FOR EACH ROW EXECUTE PROCEDURE out_of_stock_check();

----MENGUBAH TANGGAL ORDER SESUAI WAKTU SEKARANG
CREATE OR REPLACE FUNCTION proses_ubah_tgl_booking() RETURNS TRIGGER AS $$
BEGIN
NEW.order_date := current_timestamp;
RETURN NEW;
END;
$$ LANGUAGE 'plpgsql';

CREATE TRIGGER ubah_tgl_booking
BEFORE INSERT OR UPDATE ON orders
FOR EACH ROW
EXECUTE PROCEDURE proses_ubah_tgl_booking();

INSERT INTO orders VALUES (11078, 'RATTC', 1, null, '1998-06-03', NULL, 2, 8.52999973, 'Rattlesnake Canyon Grocery', '2817 Milton Dr.', 'Albuquerque', 'NM', '87110', 'USA');
DROP TRIGGER ubah_tgl_booking ON orders
DROP FUNCTION proses_ubah_tgl_booking

--Mengubah input lowercase menjadi uppercase
CREATE OR REPLACE FUNCTION uppercase() RETURNS TRIGGER AS $$
BEGIN
NEW.customer_id := UPPER(NEW.customer_id);
END;
$$ LANGUAGE 'plpgsql';

CREATE TRIGGER check_uppercase
BEFORE INSERT OR UPDATE ON customers
FOR EACH ROW
EXECUTE PROCEDURE uppercase();

INSERT INTO customers VALUES ('arsad', 'Arsyad', 'Ardiansyah', 'Owner', 'ul. Filtrowa 68', 'Warszawa', NULL, '01-012', 'Poland', '(26) 642-7012', '(26) 642-7012');
DROP TRIGGER check_uppercase ON customers
DROP FUNCTION uppercase 

--Menambah diskon setiap pembelian lebih dari 50
CREATE OR REPLACE FUNCTION discount() RETURNS TRIGGER AS $$
BEGIN
IF (NEW.quantity > 50) THEN
	NEW.discount := OLD.discount + 0.5;
END IF;
RETURN NEW;
END;
$$ LANGUAGE 'plpgsql';

CREATE TRIGGER add_discount
BEFORE INSERT OR UPDATE ON order_details
FOR EACH ROW
EXECUTE PROCEDURE discount();

INSERT INTO order_details VALUES (11077, 22, 21, 55, 0);
DROP TRIGGER add_discount ON order_details;
DROP FUNCTION discount;

--Update stok
CREATE OR REPLACE FUNCTION stok() RETURNS TRIGGER AS $$
BEGIN
UPDATE products 
SET units_in_stock = units_in_stock - NEW.quantity,
units_on_order = units_on_order + NEW.quantity 
WHERE product_id = NEW.product_id;
RETURN NEW;
END;
$$ LANGUAGE 'plpgsql';

CREATE TRIGGER update_stok
AFTER INSERT ON order_details
FOR EACH ROW
EXECUTE PROCEDURE stok();

INSERT INTO order_details VALUES (11078, 7, 30, 5, 0);
DROP TRIGGER update_stok ON order_details;
DROP FUNCTION stok;

--Throw Exception saat banyak barang lebih dari stok
CREATE OR REPLACE FUNCTION less_stok() RETURNS TRIGGER AS $$
DECLARE
	is_zero boolean;
BEGIN
    SELECT units_in_stock < NEW.quantity 
    INTO is_zero 
	FROM products 
    JOIN order_details ON products.product_id = NEW.product_id;

    IF (is_zero) THEN
        RAISE EXCEPTION 'There is no stock left!';
    END IF;
    RETURN NEW;
END
$$ LANGUAGE 'plpgsql';

CREATE TRIGGER trig_less_stok
BEFORE INSERT OR UPDATE ON order_details
FOR EACH ROW
EXECUTE PROCEDURE less_stok();

INSERT INTO order_details VALUES (11078, 3, 10, 15, 0);
DROP TRIGGER trig_less_stok ON order_details;
DROP FUNCTION less_stok;

