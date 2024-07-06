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

// Memeriksa apakah ada data yang dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaKompetisi = $_POST["namaKompetisi"];
    $penyelenggara = $_POST["penyelenggara"];
    $tingkatKompetisi = $_POST["tingkatKompetisi"];
    // Tambahkan input form untuk data lainnya sesuai dengan kebutuhan

    // Memasukkan data kompetisi ke database
    $sql = "INSERT INTO kompetisi (nama_kompetisi, penyelenggara, tingkat_kompetisi) 
            VALUES ('$namaKompetisi', '$penyelenggara', '$tingkatKompetisi')";

    if (mysqli_query($conn, $sql)) {
        // Jika data berhasil ditambahkan, arahkan kembali ke halaman admin_dashboard.php
        header("Location: admin_dashboard.php");
    } else {
        echo "Terjadi kesalahan saat menambahkan kompetisi: " . mysqli_error($conn);
    }
}

// Menutup koneksi ke database
mysqli_close($conn);
?>
