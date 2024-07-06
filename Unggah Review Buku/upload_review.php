<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fungsi untuk membersihkan dan menghindari SQL injection
    function sanitizeInput($data) {
        global $koneksi;
        return $koneksi->real_escape_string(htmlspecialchars(trim($data)));
    }
    
    // Konfigurasi folder untuk menyimpan berkas
    $targetCoverDir = "uploads/covers/";
    $targetPdfDir = "uploads/pdfs/";

    // Membuat direktori jika belum ada
    if (!is_dir($targetCoverDir)) {
        mkdir($targetCoverDir, 0777, true);
    }
    if (!is_dir($targetPdfDir)) {
        mkdir($targetPdfDir, 0777, true);
    }

    // Mendapatkan informasi berkas gambar cover buku
    if (isset($_FILES["cover_buku"])) {
        $coverFileName = $_FILES["cover_buku"]["name"];
        $coverTmpName = $_FILES["cover_buku"]["tmp_name"];
        $coverSize = $_FILES["cover_buku"]["size"];
        $coverError = $_FILES["cover_buku"]["error"];

        // Validasi berkas gambar cover buku
        if ($coverError === UPLOAD_ERR_OK) {
            $maxCoverSize = 10 * 1024 * 1024; // Ukuran maksimum berkas (dalam byte), misalnya 10 MB
            if ($coverSize > $maxCoverSize) {
                die("Ukuran berkas gambar cover buku terlalu besar. Maksimum: " . $maxCoverSize . " byte.");
            }
            $allowedCoverTypes = array("image/jpeg", "image/png", "image/gif");
            $coverFileType = $_FILES["cover_buku"]["type"];
            if (!in_array($coverFileType, $allowedCoverTypes)) {
                die("Jenis berkas gambar cover buku tidak valid. Jenis berkas yang diizinkan: JPEG, PNG, GIF.");
            }
        } else {
            die("Terjadi kesalahan saat mengunggah berkas gambar cover buku: " . $coverError);
        }
    } else {
        die("Berkas gambar cover buku tidak ditemukan.");
    }

    // Konfigurasi koneksi ke database
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "bookstagram";

    // Membuat koneksi ke database dengan prepared statements
    $koneksi = new mysqli($host, $username, $password, $database);

    // Cek koneksi berhasil atau tidak
    if ($koneksi->connect_error) {
        die("Koneksi gagal: " . $koneksi->connect_error);
    }

    // Periksa kesalahan saat mengunggah berkas file PDF
    if ($_FILES["file_pdf"]["error"] !== UPLOAD_ERR_OK) {
        die("Error saat mengunggah berkas file PDF: " . $_FILES["file_pdf"]["error"]);
    }

    // Tangkap data dari form dan bersihkan dari SQL injection
    $judul = sanitizeInput($_POST["judul"]);
    $penerbit = sanitizeInput($_POST["penerbit"]);
    $jumlah_halaman = intval($_POST["jumlah_halaman"]);
    $genre = sanitizeInput($_POST["genre"]);
    $review = sanitizeInput($_POST["review"]);
    $rating = intval($_POST["rating"]);
    $filePdfName = $_FILES["file_pdf"]["name"];
    $filePdfTmpName = $_FILES["file_pdf"]["tmp_name"];
    $filePdfSize = $_FILES["file_pdf"]["size"];
    $filePdfError = $_FILES["file_pdf"]["error"];
    $link_website = sanitizeInput($_POST["link_website"]);

    // Validasi berkas PDF
    if ($filePdfError === UPLOAD_ERR_OK) {
        $maxPdfSize = 50 * 1024 * 1024; // Ukuran maksimum berkas PDF (dalam byte), misalnya 50 MB
        if ($filePdfSize > $maxPdfSize) {
            die("Ukuran berkas PDF terlalu besar. Maksimum: " . $maxPdfSize . " byte.");
        }
        $allowedPdfTypes = array("application/pdf");
        $filePdfType = $_FILES["file_pdf"]["type"];
        if (!in_array($filePdfType, $allowedPdfTypes)) {
            die("Jenis berkas PDF tidak valid. Jenis berkas yang diizinkan: PDF.");
        }
    } else {
        die("Terjadi kesalahan saat mengunggah berkas PDF: " . $filePdfError);
    }

    // Memindahkan berkas gambar dan PDF ke folder tujuan
    $targetCoverPath = $targetCoverDir . basename($coverFileName);
    $targetPdfPath = $targetPdfDir . basename($filePdfName);
    if (move_uploaded_file($coverTmpName, $targetCoverPath) && move_uploaded_file($filePdfTmpName, $targetPdfPath)) {
        echo "Berkas gambar cover buku dan PDF berhasil diunggah.";
    } else {
        echo "Maaf, terjadi kesalahan saat mengunggah berkas gambar cover buku dan PDF.";
    }

    // Gunakan prepared statements untuk menyimpan data review ke dalam tabel "reviews"
    $sql = "INSERT INTO reviews (judul, penerbit, jumlah_halaman, genre, review, rating, cover_buku, file_pdf, link_website) 
           VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $koneksi->prepare($sql);
    if ($stmt) {
        // Bind parameter ke prepared statement
        $stmt->bind_param("ssissssss", $judul, $penerbit, $jumlah_halaman, $genre, $review, $rating, $coverFileName, $filePdfName, $link_website);

        // Eksekusi prepared statement untuk menyimpan data
        if ($stmt->execute()) {
            // Data berhasil disimpan
            echo "Data review berhasil disimpan!";
        } else {
            // Terjadi kesalahan saat menyimpan data
            echo "Error: " . $stmt->error;
        }

        // Tutup prepared statement
        $stmt->close();
    } else {
        // Terjadi kesalahan saat membuat prepared statement
        echo "Error: " . $koneksi->error;
    }

    // Tutup koneksi database
    $koneksi->close();
}
?>
