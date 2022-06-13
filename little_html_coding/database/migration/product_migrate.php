<?php

$product_sql = "CREATE TABLE product (id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), 
price INTEGER UNSIGNED,description VARCHAR(200),img VARCHAR(100))";

$user_sql = "create table user (id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), gmail VARCHAR(50),
password VARCHAR(50));";

return [$product_sql,$user_sql];