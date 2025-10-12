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
  <div class="container-fluid bg-primary text-white p-5">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col">
          <h1 class="fw-bold mb-4">Selamat Datang di Layanan Peminjaman Sarana di SMP Negeri 19 Surabaya</h1>
          <p class="fs-5 mb-4">Smart School Service adalah layanan digital peminjaman sarana di SMP. Siswa dapat melihat ketersediaan fasilitas, mengajukan peminjaman, dan mengikuti aturan dengan lebih mudah.</p>
          <button onclick="window.location.href='fasilitas.php'" type="button" class="btn btn-light btn-lg fs-6 me-3">Lihat Daftar Barang</button>
          <button onclick="window.location.href='formulir-peminjaman.php'" type="button" class="btn btn-light btn-lg fs-6">Formulir Peminjaman Barang</button>
        </div>
        <div class="col d-flex justify-content-center">
          <img src="images/profil-sklh.jpg" alt="" width="550px" class="rounded">
        </div>
      </div>
    </div>
  </div>

  <!-- 🔹 Benefit -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-4">
        <div class="text-start my-5">
          <div class="d-flex gap-3 card-body p-4">
            <img src="" alt="" width="80" class="border rounded">
            <p class="card-text fs-5 fw-semibold">Memudahkan Peminjaman Sarana Sekolah</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="text-start my-5">
          <div class="d-flex gap-3 card-body p-4">
            <img src="" alt="" width="80" class="border rounded">
            <p class="card-text fs-5 fw-semibold">Menghemat Waktu Administrasi</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="text-start my-5">
          <div class="d-flex gap-3 card-body p-4">
            <img src="" alt="" width="80" class="border rounded">
            <p class="card-text fs-5 fw-semibold">Transparansi Ketersediaan Barang</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- 🔹 Footer -->
  <!-- 🔹 Footer -->
  <footer class="bg-primary text-white pt-5">
    <div class="container">
      <div class="row">
        <!-- Kolom kiri -->
        <div class="col-md-6 mb-4">
          <div class="d-flex align-items-start">
            <img src="images/logo-smpn-19-sby.png" alt="Logo" width="100px" class="me-3">
            <div>
              <h2 class="fw-bold">Smart <br> School <br> Service</h2>
              <p class="mb-0">Layanan Peminjaman Sarana <br> SMP Negeri 19 Surabaya</p>
            </div>
          </div>
        </div>

        <!-- Kolom kanan -->
        <div class="col-md-6 mb-4">
          <h4 class="fw-bold mb-3">Kontak</h4>
          <p class="mb-1"><i class="bi bi-geo-alt-fill me-2"></i>Alamat Sekolah</p>
          <p class="mb-1"><i class="bi bi-telephone-fill me-2"></i>0812-3456-7890</p>
          <p class="mb-0"><i class="bi bi-envelope-fill me-2"></i>info@sekolah.sch</p>
        </div>
      </div>

      <hr class="border-light">

      <div class="text-center pb-3">
        &copy; 2025 SMP Negeri 19 Surabaya | by Smart School Service
      </div>
    </div>
  </footer>


  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>
