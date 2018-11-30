<?php

$connection = new PDO("mysql:dbname=docker_app;host=mysql", "app_user", "password");

$query = $connection->query("SHOW TABLES");
$tables = $query->fetchAll(PDO::FETCH_COLUMN);

var_dump($tables);

