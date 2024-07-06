<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .container {
            margin-top: 70px;
        }

        /* Tambahkan garis margin untuk setiap kolom */
        .column-margin {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            height: 500px;
        }

        /* Style untuk tampilan placeholder gambar */
        .upload-box {
            position: relative;
            overflow: hidden;
        }

        .upload-box::before {
            content: "\f030";
            font-family: "Font Awesome 5 Free";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 40px;
            color: #ccc;
        }

        .upload-box img {
            display: none;
        }

        /* Format judul di tiap kolom */
        .col h4 {
            color: #000;
            text-align: left;
            font-family: "PT Sans", sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            margin-bottom: 10px;
        }

        /* Style untuk tombol Narahubung */
        .btn-narahubung {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #037CDC;
            background-color: #fff;
            border: 1.5px solid #037CDC;
            border-radius: 3px;
            padding: 6px 12px; /* Sesuaikan padding tombol dengan ikon dan teks */
            font-family: "PT Sans", sans-serif;
            font-size: 16px;
            font-weight: 700;
            line-height: normal;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-narahubung i {
            margin-right: 5px;
        }

        .btn-narahubung:hover {
            background-color: #037CDC;
            color: #fff;
        }

        /* Pengaturan untuk kolom kedua */
        .col-detail {
            text-align: right;
        }

        .col h4 {
            color: #000;
            text-align: left;
            font-family: "PT Sans", sans-serif;
            font-size: 14px; /* Ukuran font untuk judul */
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            margin-bottom: 10px;
        }

        /* Style untuk tombol Daftar (sama ukuran dengan tombol Narahubung) */
        .btn-daftar {
            font-size: 16px;
            font-weight: 700;
            line-height: normal;
            padding: 6px 12px; /* Sesuaikan padding tombol dengan ikon dan teks */
        }

        /* Tambahkan padding untuk isi di kolom ketiga */
        .col-content {
            padding: 10px;
        }

        /* Penambahan CSS untuk pengaturan kolom dua bagian "Deadline Tanggal," "Timer," "Pendaftaran," "Tingkat," dan "Kategori" */
        .col-detail .row {
            margin: 0;
            padding: 0;
        }

        .col-detail .col-md-6 {
            padding: 0;
        }

        .col-detail .col-md-6 h4 {
            margin-bottom: 5px;
        }

        /* Ganti warna teks di kolom ketiga */
        .col-content p {
            color: #434343;
            font-family: 'PT Sans', sans-serif;
            font-size: 13px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            margin-bottom: 12px;
        }

         /* Format judul di tiap kolom menjadi warna biru */
    .col h5 {
        color: blue;
        text-align: left;
        font-family: "PT Sans", sans-serif;
        font-size: 18px;
        font-weight: 700;
        line-height: normal;
        margin-bottom: 10px;
    }
    </style>
    <title>Detail Kompetisi / Event</title>
</head>

<body>
<?php include "..//Navbar/navbar.php"; ?>
    <div class="container">    
        <div class="row">
            <!-- Kolom 1 - Poster Kompetisi / Event -->
            <div class="col-md-4 mb-3 column-margin">
                    <img src="../Kompetisi dan Event/uploads/Pelatihan-Literasi-Digital-di-Lingkungan-Kemendikbudristek.jpg" alt="Gambar" class="img-fluid">
            </div>

            <!-- Kolom 2 - Hasil Deskripsi Kompetisi / Event -->
            <div class="col column-margin">
                <h5>Deskripsi Kompetisi / Event</h5>
                <div class="col-md-14">
                            <p align="justify">
                            <h4>Jenis Event         : Lomba Cipta Karya Puisi</h4>
                            <h4>Kategori Event      : Karya Tulis</h4>
                            <h4>Time Line           : 1 Juli sampai 31 Juli 2023</h4>
                            <h4>Tingkat Kategori Peserta : Pelajar dan UmumKategori</h4>
                            </p>
                            <h5>Syarat dan Ketentuan</h5>
                            <p align="justify">
                            Tema: "Kekuatan Kata" Puisi yang dikirimkan harus mengangkat
      tema tentang kekuatan kata-kata dalam menginspirasi,
       menyentuh, atau mengubah kehidupan seseorang.

Format:
Puisi dapat ditulis dalam bentuk bebas atau mengikuti
format tertentu seperti soneta, pantun, atau haiku.
Panjang puisi harus maksimal 40 baris.
Penggunaan rima tidak diwajibkan, namun dapat digunakan
            jika diinginkan.

                            </p>
                        </div>
                <p ></p>
            </div>

            <!-- Kolom 3  -->
            <div class="col mb-3 column-margin">
                <div class="col-content">
                    <div>
                    <h5>Lomba Karya Tulis Ilmiah</h5>
                    <h4>Universitas Airlangga</h4>
                    </div>
                    
                    <!-- Tombol-tombol narahubung dan daftar -->
                    <div class="d-flex justify-content-between mt-4">
                        <a href="#" class="btn-narahubung mx-2">
                            <i class="fas fa-phone-alt mr-2"></i>Narahubung
                        </a>
                        <a href="#" class="btn btn-primary mx-2 btn-daftar">
                            <i class="fas fa-file-alt mr-4"></i>Daftar
                        </a>
                    </div>
                </div>

                <!-- Informasi lainnya di kolom ketiga -->
                <div class="col-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Deadline Tanggal</h4>
                            <h4>Timer</h4>
                            <h4>Pendaftaran</h4>
                            <h4>Tingkat</h4>
                            <h4>Kategori</h4>
                        </div>
                        <div class="col-md-6 col-detail">
                            <p>12 September 2023</p>
                            <p>10 Hari 5 Jam</p>
                            <p>Berbayar</p>
                            <p>Regional</p>
                            <p>Seni dan Budaya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hubungkan Bootstrap JS (opsional, untuk fitur-fitur interaktif) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script untuk tampilan preview gambar dan deskripsi kompetisi -->
    <script>
        // Ambil URL gambar dari database (misalnya sebagai data dari server)
        var imageUrlFromDatabase = "https://example.com/path/to/image.jpg";

        // Tampilkan gambar dari database sebagai preview di kolom pertama
        var previewImage = new Image();
        previewImage.onload = function () {
            var output = document.getElementById("preview");
            output.src = imageUrlFromDatabase;
            output.style.display = "block";
            document.getElementById("uploadBox").style.border = "none"; // Menghapus border pada kotak setelah gambar ditampilkan
        };
        previewImage.src = imageUrlFromDatabase;

        // Ambil deskripsi kompetisi dari database (misalnya menggunakan AJAX)
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var deskripsiKompetisi = xhr.responseText;
                document.getElementById("deskripsiHasil").innerText = deskripsiKompetisi;
            }
        };
        xhr.open("GET", "get_deskripsi_kompetisi.php", true); // Ganti "get_deskripsi_kompetisi.php" dengan skrip server-side yang memperoleh deskripsi dari database
        xhr.send();

        // Ambil nama dan penyelenggara kompetisi dari database (misalnya menggunakan AJAX)
        var xhr2 = new XMLHttpRequest();
        xhr2.onreadystatechange = function () {
            if (xhr2.readyState === 4 && xhr2.status === 200) {
                var data = JSON.parse(xhr2.responseText);
                document.getElementById("namaHasil").innerText = data.nama_kompetisi;
                document.getElementById("penyelenggaraHasil").innerText = data.penyelenggara;
            }
        };
        xhr2.open("GET", "get_nama_penyelenggara_kompetisi.php", true); // Ganti "get_nama_penyelenggara_kompetisi.php" dengan skrip server-side yang memperoleh nama dan penyelenggara dari database
        xhr2.send();
    </script>
</body>
</html>
