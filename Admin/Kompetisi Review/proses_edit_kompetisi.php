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
    $id = $_POST["id"];
    $namaKompetisi = $_POST["namaKompetisi"];
    $penyelenggara = $_POST["penyelenggara"];
    $tingkatKompetisi = $_POST["tingkatKompetisi"];
    $linkPendaftaran = $_POST["linkPendaftaran"];
    $linkNarahubung = $_POST["linkNarahubung"];
    $biayaPendaftaran = $_POST["biayaPendaftaran"];
    $deskripsiKompetisi = $_POST["deskripsiKompetisi"];
    $sumber = $_POST["sumber"];

    // Memperbarui data kompetisi di database
    $sql = "UPDATE kompetisi SET 
            nama_kompetisi = '$namaKompetisi', 
            penyelenggara = '$penyelenggara', 
            tingkat_kompetisi = '$tingkatKompetisi',
            link_pendaftaran = '$linkPendaftaran',
            link_narahubung = '$linkNarahubung',
            biaya_pendaftaran = '$biayaPendaftaran',
            deskripsi_kompetisi = '$deskripsiKompetisi',
            sumber = '$sumber'
            WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        // Jika data berhasil diperbarui, arahkan kembali ke halaman admin_dashboard.php
        header("Location: admin_dashboard.php");
    } else {
        echo "Terjadi kesalahan saat memperbarui kompetisi: " . mysqli_error($conn);
    }
}

// Menutup koneksi ke database
mysqli_close($conn);
?>
