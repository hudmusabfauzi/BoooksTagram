<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Tambah Review Buku</title>
</head>
<body>
    <div class="container mt-4">
        <h2>Tambah Review Buku</h2>
        <hr>

        <form method="POST" action="proses_tambah_review.php">
            <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" required>
            </div>
            <div class="form-group">
                <label for="jumlah_halaman">Jumlah Halaman</label>
                <input type="number" class="form-control" id="jumlah_halaman" name="jumlah_halaman" required>
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" required>
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" required>
            </div>
            <div class="form-group">
                <label for="review">Review</label>
                <textarea class="form-control" id="review" name="review" rows="6" required></textarea>
            </div>
            <div class="form-group">
                <label for="cover_buku">URL Cover Buku</label>
                <input type="text" class="form-control" id="cover_buku" name="cover_buku" required>
            </div>
            <div class="form-group">
                <label for="file_pdf">URL File PDF</label>
                <input type="text" class="form-control" id="file_pdf" name="file_pdf" required>
            </div>
            <div class="form-group">
                <label for="link_website">URL Website</label>
                <input type="text" class="form-control" id="link_website" name="link_website">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Review</button>
        </form>
    </div>
</body>
</html>
