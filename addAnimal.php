<?php
require 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $species = $_POST['species'];
    $age = $_POST['age'];
    $health_status = $_POST['health_status'];
    $feeding_schedule = $_POST['feeding_schedule'];
    $habitat = $_POST['habitat'];

    $stmt = $pdo->prepare('INSERT INTO animals (name, species, age, health_status, feeding_schedule, habitat) VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$name, $species, $age, $health_status, $feeding_schedule, $habitat]);

    echo "Hayvan başarıyla eklendi..Nereye gitmek isterseniz seçiniz: <a href='dashboard.php'>Ana Sayfaya Geri Dön!</a>";
    echo " <a href='listAnimals.php'>Hayvan listesine git!</a>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hayvan Ekle</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="mt-5">Hayvan Ekleme Formu</h2>
    <form method="post">
        <div class="form-group">
            <label for="name">İsim</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="species">Tür</label>
            <input type="text" id="species" name="species" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="age">Yaş</label>
            <input type="number" id="age" name="age" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="health_status">Sağlık Durumu</label>
            <input type="text" id="health_status" name="health_status" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="feeding_schedule">Beslenme Programı</label>
            <textarea id="feeding_schedule" name="feeding_schedule" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="habitat">Yaşam Alanı</label>
            <input type="text" id="habitat" name="habitat" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary" style="border: 2px solid blue;">Ekle</button>
    </form>
</div>
<script src="scripts.js"></script>
</body>
</html>
