<?php
include 'auth.php';
include '../config/config.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin - Smart School Service</title>
  <link rel="stylesheet" href="style-admin.css">
  <link href="../siswa/assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../siswa/style.css">
</head>

<body>
  <?php include 'sidebar.php'; ?>

  <div class="content mt-4">

    <?php if (isset($_GET['success'])): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Login berhasil!</strong> Selamat datang, <?= $_SESSION['username']; ?>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

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