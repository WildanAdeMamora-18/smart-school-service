<?php
include '../config/config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak Kami - Smart School Service</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

  <!-- Navbar -->
  <?php include '../navbar.php'; ?>

  <!-- Konten -->
  <div class="container py-5">
    <div class="text-center mb-4">
      <h2 class="fw-bold text-primary">Hubungi Kami</h2>
      <p class="text-muted">Jika ada kendala atau pertanyaan, silakan hubungi kontak berikut:</p>
    </div>

    <div class="row justify-content-center">
      <!-- Kartu Kontak Admin -->
      <div class="col-md-5 mb-4">
        <div class="card shadow-sm border-0">
          <div class="card-body text-center">
            <img src="images/person_24dp_007BFF_FILL1_wght400_GRAD0_opsz24.svg" alt="Admin" class="rounded-circle mb-3" width="100" height="100">
            <h5 class="card-title text-primary fw-bold">Admin Sekolah</h5>
            <p class="mb-1"><strong>Email:</strong> admin@sarana-sekolah.com</p>
            <p><strong>Telepon:</strong> +62 838-5450-0947</p>
            <a href="https://wa.me/6283854500947" target="_blank" class="btn btn-success btn-sm">
              <i class="bi bi-whatsapp"></i> Chat WhatsApp
            </a>
          </div>
        </div>
      </div>

      <!-- Kartu Kontak Sheila -->
      <div class="col-md-5 mb-4">
        <div class="card shadow-sm border-0">
          <div class="card-body text-center">
            <img src="images/person_24dp_007BFF_FILL1_wght400_GRAD0_opsz24.svg" alt="Wildan Ade Mamora" class="rounded-circle mb-3" width="100" height="100">
            <h5 class="card-title text-primary fw-bold">Sheila Aulia</h5>
            <p class="mb-1"><strong>Email:</strong> sheila@example.com</p>
            <p><strong>Telepon:</strong> +62 853-3473-5950</p>
            <a href="https://wa.me/6285334735950" target="_blank" class="btn btn-success btn-sm">
              <i class="bi bi-whatsapp"></i> Chat WhatsApp
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-4">
      <a href="index.php" class="btn btn-primary px-4">← Kembali ke Dashboard</a>
    </div>
  </div>

  <footer class="text-center text-muted py-3 mt-5 border-top">
    <small>© 2025 Smart School Service. All rights reserved.</small>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
