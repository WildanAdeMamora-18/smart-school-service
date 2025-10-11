<?php
// Ambil nama file halaman yang sedang dibuka (misal: fasilitas.php)
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- 🔹 Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold fs-3" href="beranda.php">
      <img src="images/logo-smpn-19-sby.png" alt="Logo Smp Negeri 19 Surabaya" width="50"
        class="d-inline-block align-text-center me-2">
      Smart School Service
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link custom-hover <?php echo ($current_page == 'index.php') ? 'active fw-bold text-primary' : ''; ?>"
            href="index.php">Beranda</a>
        </li>

        <li class="nav-item">
          <a class="nav-link custom-hover <?php echo ($current_page == 'fasilitas.php') ? 'active fw-bold text-primary' : ''; ?>"
            href="fasilitas.php">Fasilitas</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Formulir
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="nav-link custom-hover <?php echo ($current_page == 'formulir-peminjaman.php') ? 'active fw-bold text-primary' : ''; ?>"
            href="formulir-peminjaman.php">Peminjaman</a>
            <a class="nav-link custom-hover <?php echo ($current_page == 'formulir-pengembalian.php') ? 'active fw-bold text-primary' : ''; ?>"
            href="formulir-pengembalian.php">Pengembalian</a>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link custom-hover <?php echo ($current_page == 'pengaduan.php') ? 'active fw-bold text-primary' : ''; ?>"
            href="pengaduan.php">Pengaduan</a>
        </li>

        <li class="nav-item">
          <a class="nav-link custom-hover <?php echo ($current_page == 'kontak.php') ? 'active fw-bold text-primary' : ''; ?>"
            href="kontak.php">Kontak</a>
        </li>

      </ul>
    </div>
  </div>
</nav>