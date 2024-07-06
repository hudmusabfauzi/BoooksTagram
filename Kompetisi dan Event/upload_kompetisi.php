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
    $deskripsiKompetisi = $_POST["deskripsiKompetisi"];
    $sumber = $_POST["sumber"];
    $tingkatKompetisi = $_POST["tingkatKompetisi"];
    $biayaPendaftaran = $_POST["biayaPendaftaran"];
    $tanggalDeadline = $_POST["tanggalDeadline"];
    $waktuDeadline = $_POST["waktuDeadline"];
    $linkPendaftaran = $_POST["linkPendaftaran"];
    $linkNarahubung = $_POST["linkNarahubung"];

    // Memproses gambar yang diunggah
    if (isset($_FILES["poster_path"]) && $_FILES["poster_path"]["error"] == 0) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["poster_path"]["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Memeriksa apakah file yang diunggah adalah gambar
        $check = getimagesize($_FILES["poster_path"]["tmp_name"]);
        if ($check === false) {
            echo "File yang diunggah bukan gambar.";
            exit;
        }

        // Membatasi jenis file yang diizinkan untuk diunggah (dalam contoh ini hanya gambar JPG, JPEG, PNG, dan GIF yang diizinkan)
        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (!in_array($imageFileType, $allowedTypes)) {
            echo "Jenis file yang diunggah tidak diizinkan. Hanya file JPG, JPEG, PNG, dan GIF yang diizinkan.";
            exit;
        }

        // Memindahkan gambar yang diunggah ke folder uploads
        if (move_uploaded_file($_FILES["poster_path"]["tmp_name"], $targetFile)) {
            echo "Gambar berhasil diunggah.";
        } else {
            echo "Terjadi kesalahan saat mengunggah gambar.";
            exit;
        }
    } else {
        echo "Silakan pilih gambar terlebih dahulu.";
        exit;
    }

    // Memasukkan data kompetisi ke database
    $sql = "INSERT INTO kompetisi (nama_kompetisi, penyelenggara, deskripsi_kompetisi, sumber, poster_path, tingkat_kompetisi, biaya_pendaftaran, tanggal_deadline, waktu_deadline, link_pendaftaran, link_narahubung) 
            VALUES ('$namaKompetisi', '$penyelenggara', '$deskripsiKompetisi', '$sumber', '$targetFile', '$tingkatKompetisi', '$biayaPendaftaran', '$tanggalDeadline', '$waktuDeadline', '$linkPendaftaran', '$linkNarahubung')";

    if (mysqli_query($conn, $sql)) {
        echo "Kompetisi berhasil diunggah.";
    } else {
        echo "Terjadi kesalahan saat mengunggah kompetisi: " . mysqli_error($conn);
    }
}

// Menutup koneksi ke database
mysqli_close($conn);
?>
