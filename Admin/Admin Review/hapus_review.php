<?php
// Cek apakah ada parameter ID buku yang dikirimkan melalui URL (misalnya: hapus_review.php?id=1)
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $idBuku = $_GET['id'];

    // Koneksi ke database
    $host = "localhost"; // Ganti dengan host database Anda
    $username = "root"; // Ganti dengan username database Anda
    $password = ""; // Ganti dengan kata sandi database Anda
    $dbname = "bookstagram"; // Ganti dengan nama database Anda

    // Buat koneksi ke database
    $conn = new mysqli($host, $username, $password, $dbname);

    // Periksa apakah koneksi berhasil
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query untuk menghapus data review berdasarkan ID buku
    $sql = "DELETE FROM reviews WHERE id = $idBuku";

    // Eksekusi query untuk menghapus data
    if ($conn->query($sql) === TRUE) {
        // Redirect kembali ke halaman admin_reviews.php setelah berhasil menghapus data
        header("Location: admin_reviews.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }

    // Tutup koneksi ke database
    $conn->close();
} else {
    echo "ID buku tidak valid.";
    exit;
}
?>
