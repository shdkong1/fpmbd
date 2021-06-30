-- tabel categories
CREATE SEQUENCE categories_id_seq
INCREMENT 1
START 1

SELECT setval('categories_id_seq', (SELECT MAX(category_id) FROM categories));

INSERT INTO categories VALUES (nextval('categories_id_seq'), 'Special', 'Signature dishes', '\x');

SELECT * FROM categories;

-- tabel employees
CREATE SEQUENCE employees_id_seq
INCREMENT 1
START 1

SELECT setval('employees_id_seq', (SELECT MAX(employee_id) FROM employees));

INSERT INTO employees VALUES (nextval('employees_id_seq'), 'Best', 'Bailey');

SELECT * FROM employees;

-- tabel suppliers
CREATE SEQUENCE suppliers_id_seq
INCREMENT 1
START 1

SELECT setval('suppliers_id_seq', (SELECT MAX(supplier_id) FROM suppliers));

INSERT INTO suppliers VALUES (nextval('employees_id_seq'), 'Nestle');

SELECT * FROM suppliers;

--tabel products
CREATE SEQUENCE products_id_seq
INCREMENT 1
START 1

SELECT setval('products_id_seq', (SELECT MAX(product_id) FROM products));

INSERT INTO products VALUES (nextval('products_id_seq'), 'Water');

SELECT * FROM products;

--tabel shippers
CREATE SEQUENCE shippers_id_seq
INCREMENT 1
START 1

SELECT setval('shippers_id_seq', (SELECT MAX(shipper_id) FROM shippers));

INSERT INTO shippers VALUES (nextval('shippers_id_seq'), 'Uship');

SELECT * FROM shippers;

--tabel lain tinggal copas aja
