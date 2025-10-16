<?php
include 'auth.php';
include '../config/config.php';

$result = mysqli_query($conn, "
  SELECT p.*, s.nama_sarpras 
  FROM tb_peminjaman p 
  JOIN tb_sarpras s ON p.id_sarpras = s.id_sarpras
  ORDER BY p.id_peminjaman ASC  
");
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Data Peminjaman</title>
  <link rel="stylesheet" href="style-admin.css">
  <link href="../siswa/assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../siswa/style.css">
</head>

<body>

  <?php include 'sidebar.php'; ?>

  <div class="content mt-4">
    <h2 class="fw-bold">Data Peminjaman Barang</h2>
    <table class="table table-striped table-bordered mt-3">
      <thead class="table-primary">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Organisasi</th>
          <th>Barang</th>
          <th>Tgl Pinjam</th>
          <th>Tgl Kembali</th>
          <th>Keperluan</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                <td>{$no}</td>
                <td>{$row['nama']}</td>
                <td>{$row['kelas']}</td>
                <td>{$row['organisasi']}</td>
                <td>{$row['nama_sarpras']}</td>
                <td>{$row['tanggal_pinjam']}</td>
                <td>{$row['tanggal_kembali']}</td>
                <td>{$row['keperluan']}</td>
                <td>{$row['status']}</td>
              </tr>";
          $no++;
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>