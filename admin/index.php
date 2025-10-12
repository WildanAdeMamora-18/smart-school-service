<?php 
include '../config/config.php';
// include 'cek-login.php';
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin - Smart School Service</title>
  <link rel="stylesheet" href="style-admin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../style.css">
</head>

<body>
  <?php include 'sidebar.php'; ?>

  <div class="content mt-4">
    <h2 class="fw-bold">Dashboard Smart School Service</h2>

    <div class="row mt-4">
      <?php
      $barang = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM tb_sarpras"));
      $peminjaman = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM tb_peminjaman"));
      ?>

      <div class="col-md-4">
        <div class="card text-center p-3 shadow-sm">
          <h5>Jumlah Barang</h5>
          <h3><?= $barang['total'] ?></h3>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center p-3 shadow-sm">
          <h5>Jumlah Peminjaman</h5>
          <h3><?= $peminjaman['total'] ?></h3>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
