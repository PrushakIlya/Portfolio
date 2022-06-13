<?php

$sql = "create table users (id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(20), lastname VARCHAR(30),
                            age DATE, sex TINYINT, city VARCHAR(30))";

return $sql;

