<?php
// Koneksi ke basis data (ganti dengan informasi koneksi Anda)
$host = "localhost";
$username = "root";
$password = "";
$database = "bookstagram";

$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Simpan password pengguna dengan menggunakan password_hash()
$password = "password_pengguna";
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Verifikasi password pengguna dengan menggunakan password_verify()
$passwordToCheck = "password_pengguna";
if (password_verify($passwordToCheck, $hashedPassword)) {
    // Password cocok, lanjutkan proses login
} else {
    // Password tidak cocok, proses login gagal
}


// Fungsi untuk mengatur ulang kata sandi dan menyimpan token di tabel pengaturan_ulang_sandi
function setResetToken($conn, $email, $token) {
    $sql = "INSERT INTO pengaturan_ulang_sandi (id_pengguna, token) SELECT id, '$token' FROM pengguna WHERE email = '$email'";
    if ($conn->query($sql) === FALSE) {
        echo "Gagal mengatur ulang kata sandi.";
    }
}

// Fungsi untuk mencocokkan email dan kata sandi
function authenticateUser($conn, $email, $password) {
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
        header("Location: ..//Home/home_page.php");
        exit();
    } else {
        // Gagal login, tampilkan pesan kesalahan
        echo "Email atau kata sandi salah.";
    }
}

$conn->close();
?>
