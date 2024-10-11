<?php
session_start();
include "databaseLaptop.php";

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="register.php" method="post">
        <input type="text" placeholder="Nama Lengkap" name="nama" required><br>
        <input type="text" placeholder="Tanggal Lahir (YYYY-MM-DD)" name="Birthdate" required><br>
        <input type="text" placeholder="Username" name="username" required><br>
        <input type="password" placeholder="Password" name="password" required><br>
        <input type="submit" name="Daftar" value="Daftar">
        <a href="login.php"><br>Sudah punya akun? Masuk di sini</a>
    </form>
</body>
</html>