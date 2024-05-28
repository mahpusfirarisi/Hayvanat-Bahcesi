<?php
require 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$stmt = $pdo->query('SELECT * FROM animals');
$animals = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hayvanları Listele</title><a href='dashboard.php'>Ana sayfaya git!</a>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="mt-5">Hayvanları Listele</h2>
    <?php if (empty($animals)): ?>
        <p>Listelenecek hayvan bulunamadı!</p>
        <a href="dashboard.php" class="btn btn-primary">Ana Sayfaya Geri Dön</a>
    <?php else: ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="color: blue;">İsim</th>
                    <th style="color: blue;">Tür</th>
                    <th style="color: blue;">Yaş</th>
                    <th style="color: blue;">Sağlık Durumu</th>
                    <th style="color: blue;">Beslenme Programı</th>
                    <th style="color: blue;">Yaşam Alanı</th>
                    <th style="color: blue;">İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($animals as $animal): ?>
                <tr>
                    <td><?php echo htmlspecialchars($animal['name']); ?></td>
                    <td><?php echo htmlspecialchars($animal['species']); ?></td>
                    <td><?php echo htmlspecialchars($animal['age']); ?></td>
                    <td><?php echo htmlspecialchars($animal['health_status']); ?></td>
                    <td><?php echo htmlspecialchars($animal['feeding_schedule']); ?></td>
                    <td><?php echo htmlspecialchars($animal['habitat']); ?></td>
                    <td>
                        <a href="editAnimal.php?id=<?php echo $animal['id']; ?>" class="btn btn-sm btn-warning">Düzenle</a>
                        <a href="deleteAnimal.php?id=<?php echo $animal['id']; ?>" class="btn btn-sm btn-danger">Sil</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
<script src="scripts.js"></script>
</body>
</html>
