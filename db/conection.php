<?php
$host = 'db.fr-pari1.bengt.wasmernet.com';
$dbname = 'songs24_db';
$username = '
b45b17d8793580004ebd2387cf82';
$password = '0691b45b-17d8-7a7d-8000-32edf125002a';
$charset = 'utf8';

$port = 3306;
$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";



try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
