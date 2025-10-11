<?php
include "config/config.php";

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$organisasi = $_POST['organisasi'];
$id_sarpras = $_POST['id_sarpras'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];
$keperluan = $_POST['keperluan'];

// 🔍 Cek ketersediaan barang
$cek = mysqli_query($conn, "SELECT jumlah_tersedia FROM tb_sarpras WHERE id_sarpras='$id_sarpras'");
$data = mysqli_fetch_assoc($cek);

if ($data['jumlah_tersedia'] > 0) {
    // ✅ Tambahkan data ke tabel peminjaman
    $insert = mysqli_query($conn, "INSERT INTO tb_peminjaman 
        (nama, kelas, organisasi, id_sarpras, tanggal_pinjam, tanggal_kembali, keperluan, status)
        VALUES 
        ('$nama', '$kelas', '$organisasi', '$id_sarpras', '$tanggal_pinjam', '$tanggal_kembali', '$keperluan', 'Dipinjam')");

    // 🔧 Kurangi jumlah_tersedia di tabel sarpras
    $update = mysqli_query($conn, "UPDATE tb_sarpras 
        SET jumlah_tersedia = jumlah_tersedia - 1 
        WHERE id_sarpras='$id_sarpras'");

    if ($insert && $update) {
        echo "<script>
                alert('Peminjaman berhasil diajukan!');
                window.location.href='formulir-peminjaman.php';
              </script>";
    } else {
        echo "<script>
                alert('Terjadi kesalahan saat memproses data!');
                window.location.href='formulir-peminjaman.php';
              </script>";
    }
} else {
    echo "<script>
            alert('Maaf, barang ini sudah habis atau tidak tersedia!');
            window.location.href='formulir-peminjaman.php';
          </script>";
}
?>
