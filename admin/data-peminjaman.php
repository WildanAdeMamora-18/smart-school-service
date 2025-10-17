<?php
include 'auth.php';
include '../config/config.php';

// 🔹 Hapus data jika ada parameter `hapus`
if (isset($_GET['hapus'])) {
  $id = intval($_GET['hapus']);

  // Hapus data peminjaman
  mysqli_query($conn, "DELETE FROM tb_peminjaman WHERE id_peminjaman = '$id'");

  echo "<script>
          alert('Data peminjaman berhasil dihapus!');
          window.location.href='data-peminjaman.php';
        </script>";
  exit;
}

// 🔍 Ambil semua data peminjaman
$query = "
  SELECT p.*, s.nama_sarpras 
  FROM tb_peminjaman p 
  JOIN tb_sarpras s ON p.id_sarpras = s.id_sarpras
  ORDER BY p.id_peminjaman ASC
";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Data Peminjaman</title>
  <link href="../siswa/assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../siswa/style.css">
  <link rel="stylesheet" href="style-admin.css">
</head>

<body>
  <?php include 'sidebar.php'; ?>

  <div class="content mt-4 px-4">
    <h2 class="fw-bold mb-4">📋 Data Peminjaman Barang</h2>

    <div class="table-responsive">
      <table class="table table-striped table-bordered align-middle">
        <thead class="table-primary text-center">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Organisasi</th>
            <th>Barang</th>
            <th>Jumlah</th>
            <th>Tgl Pinjam</th>
            <th>Tgl Kembali</th>
            <th>Keperluan</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (mysqli_num_rows($result) > 0) {
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              echo "
                <tr>
                  <td class='text-center'>{$no}</td>
                  <td>{$row['nama']}</td>
                  <td>{$row['kelas']}</td>
                  <td>{$row['organisasi']}</td>
                  <td>{$row['nama_sarpras']}</td>
                  <td class='text-center'>{$row['jumlah_pinjam']}</td>
                  <td>{$row['tanggal_pinjam']}</td>
                  <td>{$row['tanggal_kembali']}</td>
                  <td>{$row['keperluan']}</td>
                  <td class='text-center fw-semibold'>{$row['status']}</td>
                  <td class='text-center'>
                    <a href='?hapus={$row['id_peminjaman']}' 
                       class='btn btn-danger btn-sm'
                       onclick=\"return confirm('Yakin ingin menghapus data ini? Data akan hilang permanen dan stok barang dikembalikan.');\">
                       Hapus
                    </a>
                  </td>
                </tr>";
              $no++;
            }
          } else {
            echo "
              <tr>
                <td colspan='11' class='text-center text-muted'>
                  Tidak ada data peminjaman.
                </td>
              </tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
