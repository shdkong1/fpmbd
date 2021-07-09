CREATE INDEX order_detail_index ON order_details(order_id);
DROP INDEX order_detail_index
EXPLAIN ANALYZE SELECT * FROM orders WHERE order_id=11076

CREATE INDEX customer_order_index ON orders(customer_id);
DROP INDEX customer_order_index
EXPLAIN ANALYZE SELECT * FROM orders WHERE customer_id='RICSU'

CREATE INDEX products_index ON products(product_name);
DROP INDEX products_index
EXPLAIN ANALYZE SELECT * FROM products WHERE product_name LIKE 'G%'

