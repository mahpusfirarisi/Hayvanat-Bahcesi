<?php
$host = 'localhost';
$db = 'dbstorage22360859323';
$user = 'dbusr22360859323';
$pass = 'pQl4UVjJfWE6';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Bağlantı hatası: ' . $e->getMessage();
}
?>
