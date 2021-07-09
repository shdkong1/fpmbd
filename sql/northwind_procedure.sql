--Procedure untuk insert data ke kategori
CREATE OR REPLACE PROCEDURE insert_category (
		category_id integer,
		category_name character varying(15),  
		description text,
		picture bytea		
)
LANGUAGE plpgsql
AS $$
begin
INSERT INTO categories(category_id,category_name,description,picture) 
VALUES (category_id,category_name,description,picture) ;
end;
$$

--Procedure untuk menghitung harga total setelah diskon
create or replace procedure totalprice()
language plpgsql
as $$
begin
update order_details
set total_price = unit_price*quantity*(1-discount);
end;$$

drop procedure totalprice;
call totalprice();

--Procedure menghapus employee yang sudah pensiun (berumur diatas 70 tahun)
CREATE OR REPLACE PROCEDURE retired()
LANGUAGE plpgsql
AS $$
BEGIN
	DELETE FROM employees CASCADE
	WHERE date_part('year', age(birth_date))::int >= 70;
	
	EXCEPTION
		WHEN others THEN
		rollback;
END;
$$;

CALL retired();
DROP PROCEDURE retired;
select * from employees
WHERE date_part('year', age(birth_date))::int >= 70;

