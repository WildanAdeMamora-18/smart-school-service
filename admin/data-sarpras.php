<?php
include '../config/config.php';
// include 'cek-login.php';
session_start();
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Data Peminjaman</title>
  <link rel="stylesheet" href="style-admin.css">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../style.css">
</head>

<body>

  <?php include 'sidebar.php'; ?>

  <div class="content mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="fw-bold">Data Barang</h2>
      <a href="tambah-barang.php" class="btn btn-primary">+ Tambah Barang</a>
    </div>

    <?php if (isset($_GET['status'])): ?>
      <?php if ($_GET['status'] == 'added'): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data barang berhasil ditambahkan.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php elseif ($_GET['status'] == 'updated'): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data barang berhasil diperbarui.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php elseif ($_GET['status'] == 'deleted'): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data barang berhasil dihapus.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>
    <?php endif; ?>

    <table class="table table-bordered table-striped">
      <thead class="table-primary">
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Jumlah Total</th>
          <th>Jumlah Tersedia</th>
          <th>Kondisi</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $result = mysqli_query($conn, "SELECT * FROM tb_sarpras");
        while ($row = mysqli_fetch_assoc($result)):
        ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama_sarpras'] ?></td>
            <td><?= $row['jumlah_total'] ?></td>
            <td><?= $row['jumlah_tersedia'] ?></td>
            <td><?= $row['kondisi'] ?></td>
            <td>
              <a href="edit-barang.php?id=<?= $row['id_sarpras'] ?>" class="btn btn-warning btn-sm">Edit</a>
              <a href="hapus-barang.php?id=<?= $row['id_sarpras'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const alertBox = document.querySelector('.alert');
      if (alertBox) {
        setTimeout(() => {
          const bsAlert = new bootstrap.Alert(alertBox);
          bsAlert.close();
        }, 3000); // hilang setelah 3 detik
      }
    });
  </script>
</body>

</html>