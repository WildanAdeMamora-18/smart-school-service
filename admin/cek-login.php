<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
  header("Location: ../login.php");
  exit();
}
?>
