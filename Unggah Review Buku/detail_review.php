<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Detail Review</title>
    <style>
        
        .container {
            margin-top: 10px;
        }
        
        .page-header {
            display: flex;
            align-items: center;
        }
        .upload-box {
            border: 1px dashed #ccc;
            padding: 10px;
        }
        .section-title {
            padding: 5px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 10px;
        }
        .judul-unggah, .judul-review, .judul-komentar {
            background-color: #007bff;
            color: white;
            padding: 5px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 10px;
        }
        .deskripsi-buku .list-group-item {
            border: none;
            padding: 5px;
            font-size: 14px; /* Ukuran font untuk deskripsi buku */
        }
        .deskripsi-buku b {
            min-width: 120px;
            display: inline-block;
        }
        .btn-icon-text {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .btn-icon-text i {
            margin-right: 5px;
        }
        .section-title, .judul-unggah, .judul-review, .judul-komentar {
            font-size: 18px; /* Ukuran font untuk judul-judul */
        }
        .col-md-6 h5 {
            font-size: 16px; /* Ukuran font untuk judul review */
        }
        .col-md-3 h5 {
            font-size: 16px; /* Ukuran font untuk judul komentar */
        }
    </style>
</head>
<body>
<?php include "../Navbar/navbar.php"; ?>
<div class="container">    
        <div class="page-header">
            <h3>Detail Review Buku</h3>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <h5 class="section-title judul-unggah">Detail Informasi Buku</h5>
                <div class="upload-box">
                    <img id="preview" src="place" alt="Preview Gambar" />
                </div>
                <div class="form-group mt-2">
                    <label for="rating">Rating Buku</label>
                    <div id="ratingDisplay"></div>
                    <span id="ratingText">(0 Rating)</span>
                </div>
                <!-- Daftar deskripsi buku -->
                <div class="form-group mt-2 deskripsi-buku">
                    <h5 class="section-title">Deskripsi Buku</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><b>Judul Buku:</b> <span id="judulBuku"></span></li>
                        <li class="list-group-item"><b>Penerbit:</b> <span id="penerbitBuku"></span></li>
                        <li class="list-group-item"><b>Jumlah Halaman:</b> <span id="jumlahHalamanBuku"></span></li>
                        <li class="list-group-item"><b>Genre Buku:</b> <span id="genreBuku"></span></li>
                    </ul>
                </div>
                <div class="form-group mt-2">
                    <a id="downloadPdfButton" class="btn btn-primary btn-block btn-icon-text" href="#" download>
                        <i class="fas fa-download"></i> Download PDF/eBook
                    </a>
                </div>
                <div class="form-group">
                    <a id="linkWebsiteButton" class="btn btn-info btn-block btn-icon-text" href="#" target="_blank">
                        <i class="fas fa-external-link-alt"></i> Link Website
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <h5 class="section-title judul-review">Review Buku</h5>
                <div class="form-group">
                    <label for="review">Review Buku</label>
                    <textarea class="form-control" id="review" rows="12" readonly></textarea>
                </div>
            </div>
            <!-- Kolom 3 -->
            <div class="col-md-3">
                <h5 class="section-title judul-komentar">Komentar/Ulasan</h5>
                <form id="komentarForm">
                    <div class="form-group">
                        <label for="namaKomentar">Nama</label>
                        <input type="text" class="form-control" id="namaKomentar" required>
                    </div>
                    <div class="form-group">
                        <label for="isiKomentar">Komentar/Ulasan</label>
                        <textarea class="form-control" id="isiKomentar" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-icon-text">
                        <i class="fas fa-paper-plane"></i> Kirim Komentar
                    </button>
                </form>
                <!-- Foam View Komentar -->
                <div class="mt-4">
                    <h5 class="section-title">Daftar Komentar</h5>
                    <ul class="list-group" id="daftarKomentar">
                        <!-- Komentar akan ditambahkan di sini menggunakan JavaScript -->
                    </ul>
                </div>
            </div>
            <script>
                // Pengisian data dari form input ke elemen di halaman tampilan
                document.addEventListener('DOMContentLoaded', function () {
                    // Script sebelumnya
                });
        
                // Simulasi daftar komentar (sebagai contoh)
                const dummyComments = [
                    { nama: 'Riska', komentar: 'Buku ini sangat bagus!' },
                    { nama: 'Amalia', komentar: 'Saya suka dengan cerita bukunya.' },
                    { nama: 'Sofia', komentar: 'Penerbitnya bagus, tapi alur cerita bisa lebih baik.' }
                ];
        
                // Fungsi untuk menambahkan komentar ke daftar komentar
                function tambahKomentar(nama, komentar) {
                    const daftarKomentar = document.getElementById('daftarKomentar');
        
                    // Buat elemen li untuk menampilkan komentar
                    const li = document.createElement('li');
                    li.className = 'list-group-item';
                    li.innerHTML = `<b>${nama}:</b> ${komentar}`;
        
                    // Tambahkan elemen li ke daftar komentar
                    daftarKomentar.appendChild(li);
                }
        
                // Event listener saat form komentar dikirim
                const komentarForm = document.getElementById('komentarForm');
                komentarForm.addEventListener('submit', function (e) {
                    e.preventDefault();
        
                    const namaKomentar = document.getElementById('namaKomentar').value;
                    const isiKomentar = document.getElementById('isiKomentar').value;
        
                    // Cek apakah nama dan komentar tidak kosong
                    if (namaKomentar.trim() !== '' && isiKomentar.trim() !== '') {
                        // Panggil fungsi tambahKomentar untuk menambahkan komentar ke daftar komentar
                        tambahKomentar(namaKomentar, isiKomentar);
        
                        // Reset form komentar
                        komentarForm.reset();
                    }
                });
        
                // Tampilkan simulasi daftar komentar ke daftar komentar
                const daftarKomentar = document.getElementById('daftarKomentar');
                dummyComments.forEach(comment => {
                    tambahKomentar(comment.nama, comment.komentar);
                });
            </script>
        </div>
    </div>
    <script>
        // Script lainnya
    </script>
    <?php include "..//Navbar/footer.php"; ?>
</body>
</html>
