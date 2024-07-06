<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Unggah Review</title>
    <style>
         .container {
            /* Tambahkan margin top untuk memberi ruang bagi navbar */
            margin-top: 20px;
        }

         /* Gaya untuk halaman menjadi putih */
         body {
            background-color: #ffffff; /* Warna putih */
        }
        
        /* Gaya khusus untuk elemen unggah gambar */
        .upload-box {
            border: 2px dashed #ccc;
            padding: 20px;
            text-align: center;
            background-color: #f8f9fa;
            transition: border-color 0.3s ease-in-out;
        }

        .upload-box p {
            margin: 10px 0;
        }

        .upload-box img {
            max-width: 100%;
            max-height: 300px;
            border: 1px dashed #ccc;
            padding: 10px;
        }

        /* Gaya untuk ikon angka berbentuk lingkaran biru */
        .circle-icon {
            display: inline-block;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border-radius: 50%;
            background-color: #007bff;
            color: #fff;
            font-size: 18px;
            margin-right: 5px;
        }

        /* Gaya untuk tautan "pilih file" */
        .choose-file-link {
            color: #007bff;
            text-decoration: none;
            cursor: pointer;
            transition: color 0.3s ease-in-out;
        }

        .choose-file-link:hover {
            color: #0056b3;
        }
         /* Gaya untuk form supaya lebih terlihat */
         .form-group {
            margin-bottom: 20px;
        }
        
    </style>
</head>

<body>

    <!-- Container utama -->
    <div class="container">
        <!-- Isi konten dalam container -->
        <h3>Unggah Review Buku</h3><br>
        <form enctype="multipart/form-data" action="upload_review.php" method="POST">
            <div class="row">
                <!-- Kolom 1 -->
                <div class="col" style="height: 400px;">
                    <h5><span class="circle-icon">1</span>Unggah Cover Buku</h5>
                    <div class="upload-box" id="uploadBox">
                        <input type="file" id="fileInputCover" name="cover_buku" accept="image/*" style="display:none" />
                        <img id="previewCover" src="https://via.placeholder.com/150" alt="Preview Gambar" />
                        <p>Drag & drop gambar di sini atau <a href="javascript:void(0);" class="choose-file-link"
                                onclick="document.getElementById('fileInputCover').click();">pilih file</a></p>
                    </div>
                </div>

                <!-- Kolom 2 -->
                <div class="col">
                    <h5><span class="circle-icon">2</span>Deskripsi Buku</h5>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="judul"><b>Judul Buku</b></label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                placeholder="Automic Habits, dll" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="penerbit"><b>Penerbit</b></label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit"
                                placeholder="Greenbook.ID, Gagas Media dll." required>
                        </div>
                    </div>
                    <!-- Form Jumlah Halaman -->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="jumlah_halaman"><b>Jumlah Halaman</b></label>
                            <input type="number" class="form-control" id="jumlah_halaman" name="jumlah_halaman"
                                placeholder="Masukkan Jumlah Halaman" required>
                        </div>
                    </div>

                    <!-- Form Pilihan Genre Buku -->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="genre"><b>Genre Buku</b></label>
                            <select class="form-control" id="genre" name="genre" required>
                                <option value="" selected disabled>Pilih Genre Buku</option>
                                <option value="Fiksi">Fiksi</option>
                                <option value="Non-Fiksi">Non-Fiksi</option>
                                <option value="Sejarah">Sejarah</option>
                                <option value="Cerita Pendek">Cerita Pendek</option>
                                <option value="Misteri/Thriller">Misteri/Thriller</option>
                                <option value="Pengembangan Diri">Pengembangan Diri</option>
                                <option value="Sastra">Sastra</option>
                                <option value="Sains Populer">Sains Populer</option>
                                <!-- Tambahkan pilihan genre buku lainnya sesuai kebutuhan -->
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Kolom 3 -->
                <div class="col-md-4">
                    <h5><span class="circle-icon">3</span>Upload File</h5>
                    <div class="form-group">
                        <label for="file_pdf"><b>Upload Ebook/Pdf</b></label>
                        <p class="text-muted">Unggah file hanya dalam bentuk Pdf dan ePUB</p>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="fileInputPdf" name="file_pdf" required>
                            <label class="custom-file-label" for="fileInputPdf">Pilih file</label>
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-upload btn-block btn-primary">
                            <span class="btn-icon"><i class="fas fa-cloud-upload-alt"></i></span>
                            Unggah Review
                            <span class="btn-text">Buku</span>
                        </button>
                    </div>
                    <div class="form-group">
                        <label for="link_website"><b>Link Website</b></label>
                        <p class="text-muted">Sertakan link sumber / referensi</p>
                        <input type="text" class="form-control" id="link_website" name="link_website"
                            placeholder="Masukkan Link Website">
                    </div>
                </div>
            </div>
            <!-- Kolom 4 -->
            <div class="col">
                <h5><span class="circle-icon">4</span>Review Buku</h5>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="review"><b>Review Buku</b></label>
                        <p class="text-muted">Buat review buku dengan kesimpulan yang jelas dan baik </p>
                        <textarea class="form-control" id="review" name="review" placeholder="Masukkan Review Buku"
                            rows="4" required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="rating"><b>Rating Buku</b></label>
                        <p class="text-muted">Berikan rating buku menurut kamu </p>
                        <input type="number" class="form-control" id="rating" name="rating"
                            placeholder="Masukkan Rating Buku (1-5)" min="1" max="5" required>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </div>

    <!-- Hubungkan Bootstrap JS (opsional, untuk fitur-fitur interaktif) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script untuk tampilan preview gambar dan drag and drop -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const uploadBox = document.getElementById('uploadBox');
            const fileInputCover = document.getElementById('fileInputCover');
            const previewCover = document.getElementById('previewCover');

            // Event listener untuk mendeteksi saat gambar di-drop
            uploadBox.addEventListener('dragenter', function (e) {
                e.stopPropagation();
                e.preventDefault();
                uploadBox.style.borderColor = '#007bff';
            });

            uploadBox.addEventListener('dragover', function (e) {
                e.stopPropagation();
                e.preventDefault();
                uploadBox.style.borderColor = '#007bff';
            });

            uploadBox.addEventListener('dragleave', function (e) {
                e.stopPropagation();
                e.preventDefault();
                uploadBox.style.borderColor = '#ccc';
            });

            uploadBox.addEventListener('drop', function (e) {
                e.stopPropagation();
                e.preventDefault();
                uploadBox.style.borderColor = '#ccc';

                // Ambil file gambar dari data drop event
                const file = e.dataTransfer.files[0];

                // Buat objek FileReader untuk membaca gambar
                const reader = new FileReader();

                // Event listener saat gambar berhasil dibaca
                reader.onload = function (event) {
                    // Setelah gambar berhasil dibaca, tampilkan di preview
                    previewCover.src = event.target.result;
                };

                // Baca isi dari file gambar
                reader.readAsDataURL(file);
            });

            // Event listener saat memilih file melalui input file
            fileInputCover.addEventListener('change', function () {
                const file = fileInputCover.files[0];

                // Buat objek FileReader untuk membaca gambar
                const reader = new FileReader();

                // Event listener saat gambar berhasil dibaca
                reader.onload = function (event) {
                    // Setelah gambar berhasil dibaca, tampilkan di preview
                    previewCover.src = event.target.result;
                };

                // Baca isi dari file gambar
                reader.readAsDataURL(file);
            });
        });
    </script>
    <?php include "..//Navbar/footer.php"; ?>
</body>

</html>
