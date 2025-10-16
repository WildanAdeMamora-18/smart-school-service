<?php
include 'auth.php';
include '../config/config.php';

if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $total = $_POST['jumlah_total'];
  $tersedia = $_POST['jumlah_tersedia'];
  $kondisi = $_POST['kondisi'];
  $keterangan = $_POST['keterangan'];

  $query = mysqli_query($conn, "INSERT INTO tb_sarpras (nama_sarpras, jumlah_total, jumlah_tersedia, kondisi, keterangan)
                                VALUES ('$nama', '$total', '$tersedia', '$kondisi', '$keterangan')");

  header("Location: data-sarpras.php?status=added");
  exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Tambah Barang</title>
  <link rel="stylesheet" href="style-admin.css">
  <link href="../siswa/assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../siswa/style.css">
</head>

<body>

  <?php include 'sidebar.php'; ?>

  <div class="content mt-4">
    <h2 class="fw-bold">Tambah Barang</h2>
    <form method="post">
      <div class="mb-3">
        <label>Nama Barang</label>
        <input type="text" name="nama" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Jumlah Total</label>
        <input type="number" name="jumlah_total" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Jumlah Tersedia</label>
        <input type="number" name="jumlah_tersedia" class="form-control" required>
      </div>
      <div class="mb-3">
        <label>Kondisi</label>
        <input type="text" name="kondisi" class="form-control" required>
      </div>
      <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
    </form>
  </div>

</body>

</html>