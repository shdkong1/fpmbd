----MENGUBAH TANGGAL ORDER SESUAI WAKTU SEKARANG
CREATE OR REPLACE FUNCTION proses_ubah_tgl_booking() RETURNS TRIGGER AS $$
BEGIN
IF (TG_OP = 'INSERT') THEN
	NEW.order_date := current_timestamp;
	RETURN NEW;
ELSEIF (TG_OP = 'UPDATE') THEN
	NEW.order_date := current_timestamp;
	RETURN NEW;
END IF;
END;
$$ LANGUAGE 'plpgsql';

CREATE TRIGGER ubah_tgl_booking
BEFORE INSERT OR UPDATE ON orders
FOR EACH ROW
EXECUTE PROCEDURE proses_ubah_tgl_booking();


