<?php
include "../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $id_sarpras = mysqli_real_escape_string($conn, $_POST['id_sarpras']);
    $tanggal_kembali = mysqli_real_escape_string($conn, $_POST['tanggal_kembali']);

    if (empty($nama) || empty($id_sarpras) || empty($tanggal_kembali)) {
        echo "<script>
                alert('Semua field harus diisi!');
                window.location.href='formulir-pengembalian.php';
              </script>";
        exit;
    }

    // Ambil data peminjaman yang masih aktif
    $cek = mysqli_query($conn, "
        SELECT jumlah_pinjam FROM tb_peminjaman 
        WHERE nama = '$nama' 
        AND id_sarpras = '$id_sarpras' 
        AND status = 'Dipinjam'
    ");

    if (mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_assoc($cek);
        $jumlah_pinjam = $data['jumlah_pinjam'];

        // Update status peminjaman menjadi Dikembalikan
        $updatePeminjaman = mysqli_query($conn, "
            UPDATE tb_peminjaman 
            SET status = 'Dikembalikan', tanggal_kembali = '$tanggal_kembali' 
            WHERE nama = '$nama' AND id_sarpras = '$id_sarpras'
        ");

        // Tambahkan kembali jumlah barang sesuai jumlah_dipinjam
        $updateSarpras = mysqli_query($conn, "
            UPDATE tb_sarpras 
            SET jumlah_tersedia = jumlah_tersedia + $jumlah_pinjam 
            WHERE id_sarpras = '$id_sarpras'
        ");

        if ($updatePeminjaman && $updateSarpras) {
            echo "<script>
                    alert('Barang berhasil dikembalikan!');
                    window.location.href='formulir-pengembalian.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Gagal memperbarui data!');
                    window.location.href='formulir-pengembalian.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Data peminjaman tidak ditemukan atau sudah dikembalikan!');
                window.location.href='formulir-pengembalian.php';
              </script>";
    }
} else {
    header("Location: formulir-pengembalian.php");
    exit;
}
?>
