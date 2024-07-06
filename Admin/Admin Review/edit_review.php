<?php
// Cek apakah ada parameter ID buku yang dikirimkan melalui URL (misalnya: edit_review.php?id=1)
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

    // Query untuk mengambil data review buku berdasarkan ID buku
    $sql = "SELECT * FROM reviews WHERE id = $idBuku";

    // Eksekusi query dan simpan hasilnya dalam $result
    $result = $conn->query($sql);

    // Cek apakah ada data yang diambil dari database
    if ($result->num_rows > 0) {
        // Ambil data dari baris hasil query
        $row = $result->fetch_assoc();
        $judulBuku = $row["judul"];
        $penerbitBuku = $row["penerbit"];
        $jumlahHalamanBuku = $row["jumlah_halaman"];
        $genreBuku = $row["genre"];
        $reviewBuku = $row["review"];
        $ratingBuku = $row["rating"];
        $coverBuku = $row["cover_buku"];
        $filePdf = $row["file_pdf"];
        $linkWebsite = $row["link_website"];
    } else {
        echo "Data buku tidak ditemukan.";
        exit;
    }

    // Tutup koneksi ke database
    $conn->close();
} else {
    echo "ID buku tidak valid.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Edit Review Buku</title>
</head>
<body>
    <div class="container mt-4">
        <h2>Edit Review Buku</h2>
        <hr>

        <form method="POST" action="proses_edit_review.php">
            <input type="hidden" name="id" value="<?php echo $idBuku; ?>">
            <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judulBuku; ?>" required>
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $penerbitBuku; ?>" required>
            </div>
            <div class="form-group">
                <label for="jumlah_halaman">Jumlah Halaman</label>
                <input type="number" class="form-control" id="jumlah_halaman" name="jumlah_halaman" value="<?php echo $jumlahHalamanBuku; ?>" required>
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" value="<?php echo $genreBuku; ?>" required>
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" value="<?php echo $ratingBuku; ?>" required>
            </div>
            <div class="form-group">
                <label for="review">Review</label>
                <textarea class="form-control" id="review" name="review" rows="6" required><?php echo $reviewBuku; ?></textarea>
            </div>
            <div class="form-group">
                <label for="cover_buku">URL Cover Buku</label>
                <input type="text" class="form-control" id="cover_buku" name="cover_buku" value="<?php echo $coverBuku; ?>" required>
            </div>
            <div class="form-group">
                <label for="file_pdf">URL File PDF</label>
                <input type="text" class="form-control" id="file_pdf" name="file_pdf" value="<?php echo $filePdf; ?>" required>
            </div>
            <div class="form-group">
                <label for="link_website">URL Website</label>
                <input type="text" class="form-control" id="link_website" name="link_website" value="<?php echo $linkWebsite; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>
