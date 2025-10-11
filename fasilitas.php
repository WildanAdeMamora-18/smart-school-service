<?php include "config/config.php"; ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Smart School Service</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include 'navbar.php'; ?>

  <!-- 🔹 Isi Halaman -->
  <div class="container mt-4">
    <div class="row">
      <h3 class="fw-bold">Daftar Sarana dan Prasarana</h3>

      <div class="border rounded p-4 mt-3">
        <div class="table-responsive">
          <!-- 🔹 TABLE -->
          <table class="table table-bordered table-hover align-middle">
            <thead class="table-primary">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Sarpras</th>
                <th scope="col">Jumlah Total</th>
                <th scope="col">Jumlah Tersedia</th>
                <th scope="col">Kondisi</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              $result = mysqli_query($conn, "SELECT * FROM tb_sarpras");
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$no}</td>
                        <td>{$row['nama_sarpras']}</td>
                        <td>{$row['jumlah_total']}</td>
                        <td>{$row['jumlah_tersedia']}</td>
                        <td>{$row['kondisi']}</td>
                        <td>{$row['keterangan']}</td>
                      </tr>";
                $no++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>
