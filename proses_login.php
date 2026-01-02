<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,
    "SELECT * FROM user WHERE username='$username' AND password='$password'"
);

$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $_SESSION['login'] = true;
    header("Location: dashboard.php");
} else {
    echo "Login gagal. <a href='login.php'>Coba lagi</a>";
}
?>