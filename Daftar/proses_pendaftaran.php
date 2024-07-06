<?php
// Pastikan file database.php sudah di-include pada file ini
require_once "database.php";

// Fungsi untuk mengenkripsi password menggunakan Bcrypt
function encryptPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

// Tangkap data dari formulir pendaftaran
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Enkripsi password sebelum disimpan di database
    $hashedPassword = encryptPassword($password);

    // Query SQL untuk menyimpan data pengguna ke tabel pengguna
    $sql = "INSERT INTO pengguna (nama_lengkap, email, no_ponsel, password) 
            VALUES ('$name', '$email', '$phone', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        // Jika berhasil disimpan, arahkan pengguna ke halaman beranda atau halaman pemberitahuan sukses
        header("Location: ..//Home/home_page.php");
        exit();
    } else {
        // Jika terjadi kesalahan dalam query, tampilkan pesan error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi ke database
$conn->close();
?>
