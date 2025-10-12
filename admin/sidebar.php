<div class="sidebar">
  <h3 class="text-white text-center py-3 fw-bold border-bottom">Admin Panel</h3>
  <a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">🏠 Dashboard</a>
  <a href="data-sarpras.php" class="<?= basename($_SERVER['PHP_SELF']) == 'data-sarpras.php' ? 'active' : '' ?>">📦 Daftar Sarpras</a>
  <a href="data-peminjaman.php" class="<?= basename($_SERVER['PHP_SELF']) == 'data-peminjaman.php' ? 'active' : '' ?>">📋 Data Peminjaman</a>
  <a class="btn-logout text-white" href="../login.php">🚪 Logout</a>
</div>
