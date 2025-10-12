<?php
include '../config/config.php';
// include 'cek-login.php';
session_start();

$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM tb_sarpras WHERE id_sarpras=$id");

if ($query) {
    $_SESSION['success'] = "Data barang berhasil dihapus!";
  } else {
    $_SESSION['error'] = "Gagal menghapus data barang.";
  }

header("Location: data-sarpras.php?status=deleted");
exit;
?>