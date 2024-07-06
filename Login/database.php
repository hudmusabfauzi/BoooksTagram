<?php
// Informasi koneksi database
$host = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "bookstagram"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Set timezone untuk tanggal dan waktu (Opsional, sesuaikan dengan timezone lokasi Anda)
date_default_timezone_set('Asia/Jakarta');

// Fungsi untuk mencocokkan email dan kata sandi
function authenticateUser($conn, $email, $password) {
    // Lakukan query untuk mencari pengguna dengan email yang sesuai
    $sql = "SELECT * FROM pengguna WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        // Verifikasi kata sandi menggunakan fungsi password_verify
        if (password_verify($password, $hashedPassword)) {
            return true;
        }
    }

    return false;
}

// Tangkap data dari formulir login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (authenticateUser($conn, $email, $password)) {
        // Berhasil login, lakukan aksi selanjutnya, seperti mengarahkan ke halaman beranda
        header("Location:..//Home/home_page.php");
        exit();
    } else {
        // Gagal login, tampilkan pesan kesalahan
        echo "Email atau kata sandi salah.";
    }
}

$conn->close();
?>
