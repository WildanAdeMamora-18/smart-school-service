<?php include 'config/config.php'; session_start(); ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin - Smart School Service</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card shadow">
        <div class="card-body">
          <h4 class="text-center mb-4">Login Admin</h4>
          <?php if (isset($_GET['error'])): ?>
            <div class="alert alert-danger">Username atau password salah!</div>
          <?php endif; ?>
          <form action="proses-login.php" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Masuk</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
