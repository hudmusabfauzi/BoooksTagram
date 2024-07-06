<!DOCTYPE html>
<html>
<head>
    <title>Kategori</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Mengatur tinggi minimal halaman hingga setidaknya mencakup seluruh viewport */
            background-color: #f2f2f2;
        }

        .container {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        /* Gaya kotak button */
        .button-kotak {
            width: 270px;
            height: 108px;
            flex-shrink: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            margin: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Efek shadow tipis */
            transition: background-color 0.3s ease;
            position: relative; /* Tambahkan posisi relatif untuk animasi */
            overflow: hidden; /* Sembunyikan isi yang melebihi ukuran tombol */
            padding: 10px 15px; /* Tambahkan padding untuk menentukan jarak ikon dan teks */
        }

        /* Warna latar belakang untuk masing-masing button */
        .button-kotak:nth-child(1),
        .button-kotak:nth-child(5) {
            background-color: #2980b9; /* Biru Langit */
        }

        .button-kotak:nth-child(2),
        .button-kotak:nth-child(6) {
            background-color: #27ae60; /* Hijau Daun */
        }

        .button-kotak:nth-child(3),
        .button-kotak:nth-child(7) {
            background-color: #f39c12; /* Kuning Cerah */
        }

        .button-kotak:nth-child(4),
        .button-kotak:nth-child(8) {
            background-color: #e74c3c; /* Merah Terang */
        }

        /* Efek transisi ketika hover pada button */
        .button-kotak:hover {
            background-color: #2c3e50; /* Ubah warna latar belakang saat hover */
        }

        /* Gaya ikon */
        .button-kotak i {
            margin-right: 10px; /* Tambahkan margin-right untuk jarak ikon dengan teks */
        }

        /* Gaya teks */
        .button-kotak span {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            opacity: 0; /* Atur teks menjadi transparan secara awal */
            transform: translateY(0); /* Teks berada pada posisi normal */
        }

        /* Efek animasi saat hover pada button */
        .button-kotak:hover:before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 0;
            background-color: #3498db;
            opacity: 0.7;
            transition: height 0.3s ease; /* Animasi tinggi dari 0 ke 100% */
        }

        .button-kotak:hover {
            z-index: 1; /* Atur z-index untuk mengatur animasi berada di atas teks tombol */
        }

        .button-kotak:hover span {
            transform: translateY(-100%); /* Geser teks ke atas */
            opacity: 1; /* Tampilkan teks yang awalnya diatur transparan */
            transition: transform 0.3s ease, opacity 0.3s 0.1s ease; /* Animasi geser dan tampilkan teks */
        }

        /* Gaya kotak kolom bawah */
        .kolom-bawah {
            width: 270px;
            height: 108px;
            flex-shrink: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            margin: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Efek shadow tipis */
            transition: background-color 0.3s ease;
            position: relative; /* Tambahkan posisi relatif untuk animasi */
            overflow: hidden; /* Sembunyikan isi yang melebihi ukuran kotak */
            padding: 10px 15px; /* Tambahkan padding untuk menentukan jarak ikon dan teks */
        }

        /* Warna latar belakang untuk masing-masing kotak kolom bawah */
        .kolom-bawah:nth-child(1),
        .kolom-bawah:nth-child(5) {
            background-color: #3498db; /* Kotak Biru */
        }

        .kolom-bawah:nth-child(2),
        .kolom-bawah:nth-child(6) {
            background-color: #9b59b6; /* Kotak Ungu */
        }

        .kolom-bawah:nth-child(3),
        .kolom-bawah:nth-child(7) {
            background-color: #f1c40f; /* Kotak Kuning */
        }

        .kolom-bawah:nth-child(4),
        .kolom-bawah:nth-child(8) {
            background-color: #e74c3c; /* Kotak Merah */
        }

        /* Efek transisi ketika hover pada kotak kolom bawah */
        .kolom-bawah:hover {
            background-color: #2c3e50; /* Ubah warna latar belakang saat hover */
        }

        /* Gaya ikon dan teks pada kotak kolom bawah */
        .kolom-bawah i {
            margin-right: 10px; /* Tambahkan margin-right untuk jarak ikon dengan teks */
        }

        /* Gaya teks pada kotak kolom bawah */
        .kolom-bawah span {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            opacity: 0; /* Atur teks menjadi transparan secara awal */
            transform: translateY(0); /* Teks berada pada posisi normal */
        }

        /* Efek animasi saat hover pada kotak kolom bawah */
        .kolom-bawah:hover:before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 0;
            background-color: #3498db;
            opacity: 0.7;
            transition: height 0.3s ease; /* Animasi tinggi dari 0 ke 100% */
        }

        .kolom-bawah:hover {
            z-index: 1; /* Atur z-index untuk mengatur animasi berada di atas teks kotak */
        }

        .kolom-bawah:hover span {
            transform: translateY(-100%); /* Geser teks ke atas */
            opacity: 1; /* Tampilkan teks yang awalnya diatur transparan */
            transition: transform 0.3s ease, opacity 0.3s 0.1s ease; /* Animasi geser dan tampilkan teks */
        }

        /* Font Awesome Script */
        .fas {
            font-family: "Font Awesome 5 Free";
        }
    </style>
</head>
<body>
    
    <?php include "..//Navbar/navbar.php"; ?>
    <div class="container">
        <!-- Kotak button bagian atas -->
        <button class="button-kotak"><i class="fas fa-book"></i> FIKSI</button>
        <button class="button-kotak"><i class="fas fa-file-alt"></i> NON FIKSI</button>
        <button class="button-kotak"><i class="fas fa-history"></i> SEJARAH</button>
        <button class="button-kotak"><i class="fas fa-feather-alt"></i> CERITA PENDEK</button>
    </div>
    <div class="container">
        <!-- Kotak button bagian bawah -->
        <button class="button-kotak"><i class="fas fa-search"></i> MISTERI / THRAILER</button>
        <button class="button-kotak"><i class="fas fa-user-cog"></i> PENGEMBANGAN DIRI</button>
        <button class="button-kotak"><i class="fas fa-pen-nib"></i> SASTRA</button>
        <button class="button-kotak"><i class="fas fa-flask"></i> SAINS POPULER</button>
    </div>
</body>
</html>
