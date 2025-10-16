<?php
include "config/config.php";

$nama = $_POST['nama'];
$id_sarpras = $_POST['id_sarpras'];
$tanggal_kembali = $_POST['tanggal_kembali'];

// 🔍 Cek apakah ada peminjaman aktif oleh nama yang sama dan barang yang sama
$cek = mysqli_query($conn, "SELECT * FROM tb_peminjaman 
                            WHERE nama='$nama' 
                            AND id_sarpras='$id_sarpras' 
                            AND status='Dipinjam'");

if (mysqli_num_rows($cek) > 0) {
    // ✅ Update status menjadi Dikembalikan
    mysqli_query($conn, "UPDATE tb_peminjaman 
                         SET status='Dikembalikan', tanggal_kembali='$tanggal_kembali' 
                         WHERE nama='$nama' AND id_sarpras='$id_sarpras'");

    // 🔧 Tambahkan jumlah_tersedia di tb_sarpras
    mysqli_query($conn, "UPDATE tb_sarpras 
                         SET jumlah_tersedia = jumlah_tersedia + 1 
                         WHERE id_sarpras='$id_sarpras'");

    echo "<script>
            alert('Barang berhasil dikembalikan!'); 
            window.location.href='formulir-pengembalian.php';
          </script>";
} else {
    echo "<script>
            alert('Data peminjaman tidak ditemukan atau sudah dikembalikan!');
            window.location.href='formulir-pengembalian.php';
          </script>";
}
?>
