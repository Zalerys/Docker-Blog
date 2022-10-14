<?php 

echo "test";

$dsn = 'mysql:host=db:3306;dbname=data';
$user = 'root';
$pdw = 'password';
$pdo = new PDO($dsn, $user, $pdw);

// $db = 'data';
// $pdo->exec( statement: "CREATE DATABASE IF NOT EXISTS '$db");
$query = $pdo->query('SHOW TABLES');
print_r($query->fetchall( mode: PDO::FETCH_ASSOC));



