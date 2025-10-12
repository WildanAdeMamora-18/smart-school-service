<?php
include '../config/config.php';
// include 'cek-login.php';
session_start();

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_sarpras WHERE id_sarpras=$id"));

if (isset($_POST['update'])) {
  $nama = $_POST['nama'];
  $total = $_POST['jumlah_total'];
  $tersedia = $_POST['jumlah_tersedia'];
  $kondisi = $_POST['kondisi'];
  $keterangan = $_POST['keterangan'];

  mysqli_query($conn, "UPDATE tb_sarpras 
                       SET nama_sarpras='$nama', jumlah_total='$total', jumlah_tersedia='$tersedia', 
                           kondisi='$kondisi', keterangan='$keterangan' 
                       WHERE id_sarpras=$id");
  header("Location: data-sarpras.php?status=updated");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Tambah Barang</title>
  <link rel="stylesheet" href="style-admin.css">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../style.css">
</head>

<body>

  <?php include 'sidebar.php'; ?>

  <div class="content mt-4">
  <h2 class="fw-bold">Edit Barang</h2>
  <form method="post">
    <div class="mb-3">
      <label>Nama Barang</label>
      <input type="text" name="nama" value="<?= $data['nama_sarpras'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Jumlah Total</label>
      <input type="number" name="jumlah_total" value="<?= $data['jumlah_total'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Jumlah Tersedia</label>
      <input type="number" name="jumlah_tersedia" value="<?= $data['jumlah_tersedia'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Kondisi</label>
      <input type="text" name="kondisi" value="<?= $data['kondisi'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Keterangan</label>
      <input type="text" name="keterangan" value="<?= $data['keterangan'] ?>" class="form-control">
    </div>
    <button type="submit" name="update" class="btn btn-success">Update</button>
  </form>
</div>

</body>

</html>