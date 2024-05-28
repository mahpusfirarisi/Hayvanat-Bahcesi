<?php
require 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->prepare('DELETE FROM animals WHERE id = ?');
$stmt->execute([$id]);

echo "Silme işlemi başarıyla gerçekleşti..Nereye gitmek isterseniz seçiniz: <a href='dashboard.php'>Ana sayfaya git!</a>";
echo " <a href='listAnimals.php'>Hayvan listesine geri dön!</a>";

?>
