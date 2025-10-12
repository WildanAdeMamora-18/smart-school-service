<?php
session_start();
include '../config/config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '$username'");
if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);

    if (password_verify($password, $row['password'])) {
        // Simpan status login di session
        $_SESSION['status'] = "login";
        $_SESSION['username'] = $row['username'];

        header("Location: index.php");
        exit();
    } else {
        header("Location: ../login.php?error=password");
        exit();
    }
} else {
    header("Location: ../login.php?error=username");
    exit();
}
?>
