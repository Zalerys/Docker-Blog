<?php
$servername = "db:3306";
$username = "root";
$password = "password";
$pdo = new PDO("mysql:host=$servername;dbname=Blog", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>