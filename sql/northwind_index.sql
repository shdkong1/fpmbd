DROP INDEX order_detail_index;
CREATE INDEX order_detail_index ON order_details(order_id);
EXPLAIN ANALYZE SELECT * FROM orders WHERE order_id=11076;

DROP INDEX customer_order_index;
CREATE INDEX customer_order_index ON orders(customer_id);
EXPLAIN ANALYZE SELECT * FROM orders WHERE customer_id='RICSU';

DROP INDEX products_index;
CREATE INDEX products_index ON products(product_name);
EXPLAIN ANALYZE SELECT * FROM products WHERE product_name LIKE 'G%';

