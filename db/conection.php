<?php
$host = 'db.fr-pari1.bengt.wasmernet.com';
$dbname = 'song34_db';
$username = 'b520f9db75d7800076e7811fda06';
$password = '0691b520-f9db-7887-8000-a6360d58b1ee';
$charset = 'utf8';

// ¡El puerto es 10272, no 3306!
$port = 10272; 

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>