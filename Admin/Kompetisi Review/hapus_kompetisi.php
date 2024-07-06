<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "bookstagram";
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memeriksa apakah ada data yang dikirim dari URL
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Menghapus data kompetisi dari database berdasarkan ID yang diberikan
    $sql = "DELETE FROM kompetisi WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        // Jika data berhasil dihapus, arahkan kembali ke halaman admin_dashboard.php
        header("Location: admin_dashboard.php");
        exit;
    } else {
        echo "Terjadi kesalahan saat menghapus kompetisi: " . mysqli_error($conn);
    }
} else {
    echo "ID kompetisi tidak diberikan.";
}

// Menutup koneksi ke database
mysqli_close($conn);
?>
