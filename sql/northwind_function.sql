--Function untuk menghitung jumlah order berdasarkan kurun waktu
CREATE OR REPLACE FUNCTION countOrder(date_from date, date_to date)
	returns int
	language plpgsql
as
$$
declare
	order_count integer;
begin
	select count(*)
	into order_count
	from orders
	where order_date between date_from and date_to;
	return order_count;
end;
$$;

select countOrder('1996-07-23','1996-10-09');


--Function untuk mendapatkan harga barang
CREATE OR REPLACE FUNCTION getPrice(integer) RETURNS real LANGUAGE plpgsql AS
$BODY$
declare
    price integer;
begin
    SELECT unit_price INTO price FROM products WHERE product_id = $1;
    RETURN price;
end;
$BODY$;

--Function untuk menghitung berapa kali
CREATE OR REPLACE FUNCTION how_many_orders(cus_id char)
	returns int
	language plpgsql
as
$$
declare
	total integer;
begin
	select count(*)
	into total
	from orders
	where customer_id = cus_id;
	return total;
end;
$$;

drop function how_many_orders;
select how_many_orders('RATTC');