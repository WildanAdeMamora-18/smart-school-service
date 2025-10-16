<?php
include 'config/config.php';
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']); // pastikan password di database juga sudah di-hash

$query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username='$username' AND password='$password'");

if (mysqli_num_rows($query) > 0) {
  $_SESSION['admin'] = $username;
  header("Location: admin/index.php");
} else {
  header("Location: login.php?error=1");
}
?>
