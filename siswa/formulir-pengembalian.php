<?php include "../config/config.php";

// Ambil daftar barang dari tabel tb_sarpras
$barang = mysqli_query($conn, "SELECT * FROM tb_sarpras WHERE jumlah_tersedia > 0");
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Smart School Service</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php include '../navbar.php'; ?>

  <!-- 🔹 Isi Halaman -->
  <div class="container mt-4">
    <div class="container">
      <div class="row">
        <h3 class="fw-bold">Formulir Pengembalian Barang</h3>

        <div class="row border rounded p-4 mt-3">
          <form action="proses-pengembalian.php" method="post">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
              <label for="kelas" class="form-label">Kelas</label>
              <input type="text" class="form-control" id="kelas" name="kelas" required>
            </div>
            <div class="mb-3">
              <label for="organisasi" class="form-label">Organisasi</label>
              <input type="text" class="form-control" id="organisasi" name="organisasi" required>
            </div>
            <div class="mb-3">
              <label for="barang" class="form-label">Barang yang Ingin Dikembalikan</label>
              <select class="form-select" name="id_sarpras" aria-label="Default select example">
                <option selected disabled>Daftar Barang</option>
                <?php
                $result = $conn->query("SELECT id_sarpras, nama_sarpras FROM tb_sarpras");
                while ($row = $result->fetch_assoc()): ?>
                  <option value="<?= $row['id_sarpras'] ?>"><?= $row['nama_sarpras'] ?></option>
                <?php endwhile; ?>
              </select>
            </div>
            <div class="mb-4">
              <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
              <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajukan Pengembalian</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>