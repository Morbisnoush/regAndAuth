<?php

$db_config = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'db' => 'test'
];

$dsn = "mysql:host={$db_config['host']};dbname={$db_config['db']};charset=utf8mb4";
$opt = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$db = new PDO($dsn, $db_config['user'], $db_config['password'], $opt);