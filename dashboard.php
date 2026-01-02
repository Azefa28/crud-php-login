<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<h2>Daftar Mata Kuliah</h2>
<a href="logout.php">Logout</a><br><br>
<?php include 'matakuliah.php'; ?>
</body>
</html>