<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hayvanat Bahçesi</title> 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="mt-5">Hayvanat Bahçesi Kayıt Platformu </h2>
    <p>Hoş geldiniz! Aşağıdaki seçeneklerle formu kullanabilirsiniz!</p>
    <ul>
        <li><a href="addAnimal.php">Hayvan Ekle</a></li>
        <li><a href="listAnimals.php">Hayvanları Listele</a></li>
        <li><a href="register.php">Sistemden Çıkış Yap</a></li>
    </ul>
</div>
<script src="scripts.js"></script>
</body>
</html>
