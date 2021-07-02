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
