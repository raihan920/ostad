<?php
// Task 1: 
// Write a SQL query to retrieve all the orders from the 'orders' table and their corresponding customer names from the 'customers' table. Use an INNER JOIN to combine the tables.
SELECT `orders`.*, `customers`.`name` FROM `orders` INNER JOIN `customers` ON `orders`.`customer_id` = `customers`.`id`