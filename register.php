<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $pdo->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
    $stmt->execute([$username, $password]);

    echo "Kayıt başarılı! <a href='login.php'>Giriş yap</a>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kayıt Ol</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>    
<div class="container">
    <h2 class="mt-5">Kayıt Ol</h2>
    <form method="post">
        <div class="form-group">
            <label for="username">Kullanıcı Adı</label>
            <input type="text" id="username" name="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Şifre</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Kayıt Ol</button>
    </form>
</div>
<script src="scripts.js"></script>
</body>
</html>
