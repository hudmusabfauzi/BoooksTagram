<!DOCTYPE html>
<html>

<head>
    <!-- Hubungkan CSS Bootstrap dan Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>

        /* Gaya untuk judul "Cari Kompetisi" */
        .search-title {
            color: #292D32;
            font-family: 'PT Sans', sans-serif;
            font-size: 36px;
            font-style: normal;
            font-weight: 700;
            line-height: 1.1; /* 36px */
        }

        /* Gaya untuk teks " & Event Disini" */
        .event-text {
            background: linear-gradient(90deg, #00269D 0%, #037CDC 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: 'PT Sans', sans-serif;
            font-size: 36px;
            font-style: normal;
            font-weight: 700;
            line-height: 1.1; /* 36px */
        }

        /* Gaya untuk elemen cari kompetisi */
        .search-box {
            margin-top: 50px;
            text-align: left; /* Mengatur teks menjadi sejajar kiri */
        }

        .search-box input[type="text"] {
            width: 300px;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease-in-out;
            color: #292D32; /* Mengatur warna teks input */
            font-family: 'PT Sans Caption', sans-serif; /* Mengatur font pada input */
            font-weight: 400; /* Mengatur ketebalan font pada input */
        }

        .search-box input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .search-box button {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-left: 10px;
            font-family: 'PT Sans Caption', sans-serif; /* Mengatur font pada tombol */
            font-weight: 400; /* Mengatur ketebalan font pada tombol */
        }

        .search-box button:hover {
            background-color: #0056b3;
        }

        /* Gaya untuk tombol unggah kompetisi */
        .upload-button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 165px;
            height: 35px;
            flex-shrink: 0;
            border-radius: 3px;
            background: #037CDC;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 14px; /* Mengubah ukuran font agar sesuai rapi */
            margin-top: 20px;
            font-family: 'PT Sans Caption', sans-serif; /* Mengatur font pada tombol */
            font-weight: 400; /* Mengatur ketebalan font pada tombol */
        }

        .upload-button i {
            margin-right: 8px;
        }

        .upload-button:hover {
            background: #0056b3;
        }

        /* Gaya untuk keterangan teks */
        .description-text {
            font-size: 16px; /* Mengatur ukuran font pada keterangan teks */
            text-align: left; /* Mengatur teks menjadi sejajar kiri */
            color: #292D32; /* Mengatur warna teks keterangan */
            font-family: 'PT Sans Caption', sans-serif; /* Mengatur font pada keterangan teks */
            font-weight: 400; /* Mengatur ketebalan font pada keterangan teks */
            margin-top: 10px; /* Menambahkan margin atas pada keterangan teks */
        }
    </style>
</head>

<body>
<iframe src="../Navbar/navbar.php" frameborder="0" style="width: 100%; height: 50px;"></iframe>
    <!-- Container utama -->
    <div class="container">
        <!-- Baris pertama -->
        <div class="row justify-content-start mt-3">
            <div class="col-md-6">
                <div class="search-title">Cari Kompetisi<span class="event-text"> & Event Disini</span></div>
                <div class="description-text">
                    Cari, simpan, dan ikuti berbagai jenis kompetisi <br>dengan mudah dan nyaman.
                </div>
            </div>
        </div>
        <!-- Baris kedua -->
        <div class="row justify-content-start mt-4">
            <div class="col-md-6">
               
              
    </div>

    <!-- Hubungkan Bootstrap JS (opsional, untuk fitur-fitur interaktif) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
