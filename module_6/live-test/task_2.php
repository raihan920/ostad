<?php
// Task 2: .
// Write a SQL query to retrieve all the products from the 'products' table and their corresponding category names from the 'categories' table. Use a LEFT JOIN to combine the tables and include all products, even if they don't have a category.

SELECT `products`.*, `categories`.`name` FROM `products` LEFT JOIN `categories` ON `products`.`category_id` = `categories`.`id` 