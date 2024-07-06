<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cek apakah ada data yang dikirim melalui form
    if (
        isset($_POST["judul"]) && isset($_POST["penerbit"])
        && isset($_POST["jumlah_halaman"]) && isset($_POST["genre"])
        && isset($_POST["rating"]) && isset($_POST["review"])
        && isset($_POST["cover_buku"]) && isset($_POST["file_pdf"])
    ) {
        // Sanitasi dan validasi data yang diterima dari form
        $judulBuku = htmlspecialchars($_POST["judul"]);
        $penerbitBuku = htmlspecialchars($_POST["penerbit"]);
        $jumlahHalamanBuku = intval($_POST["jumlah_halaman"]);
        $genreBuku = htmlspecialchars($_POST["genre"]);
        $ratingBuku = intval($_POST["rating"]);
        $reviewBuku = htmlspecialchars($_POST["review"]);
        $coverBuku = htmlspecialchars($_POST["cover_buku"]);
        $filePdf = htmlspecialchars($_POST["file_pdf"]);
        $linkWebsite = isset($_POST["link_website"]) ? htmlspecialchars($_POST["link_website"]) : null;

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

        // Query untuk menambahkan data review buku ke dalam database
        $sql = "INSERT INTO reviews (judul, penerbit, jumlah_halaman, genre, rating, review, cover_buku, file_pdf, link_website) VALUES ('$judulBuku', '$penerbitBuku', $jumlahHalamanBuku, '$genreBuku', $ratingBuku, '$reviewBuku', '$coverBuku', '$filePdf', '$linkWebsite')";

        // Eksekusi query untuk tambah data
        if ($conn->query($sql) === TRUE) {
            echo "Review berhasil ditambahkan.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Tutup koneksi ke database
        $conn->close();
    } else {
        echo "Data yang dikirimkan tidak lengkap.";
    }
} else {
    echo "Metode permintaan tidak valid.";
}
?>
