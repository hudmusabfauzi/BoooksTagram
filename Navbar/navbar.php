<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .container {
            /* Tambahkan margin top untuk memberi ruang bagi navbar */
            margin-top: 70px;
        }
        /* Hapus prefix kelas khusus */
        body {
            font-family: "PT Sans", sans-serif;
        }
        
        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(270deg, #0E41DF 0%, #0253BE 17.19%, #037CDC 100%);
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.20);
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50px;
            z-index: 999;
        }

        .logo {
            width: 150px;
            height: auto;
            margin-left: 40px;
        }

        .search-container {
            flex: 0;
            display: flex;
            align-items: center;
            background-color: #FFF;
            border-radius: 2px;
            margin: 0 20px;
            padding: 4px 70px 4px 48px;
        }

        input[type="text"] {
            flex: 1;
            height: 20px;
            border: none;
            background: transparent;
            outline: none;
            font-size: 14px;
            color: #037CDC;
            margin-left: 5px;
        }
        input[placeholder="Cari"]{
            margin-left: -30px;
        }
        
        .nav-icons {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-right: 40px;
            gap: 25px;
        }

        .nav-icons img {
            width: 25.88px;
            height: 25.88px;
            margin-left: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<nav>
    <a href="homepage.html">
        <img src="Logo 6.png" alt="logo" class="logo">
    </a>
    <div class="search-container">
        <input type="text" id="search" class="styled-class" type="search" placeholder="Cari">
    </div>
    <div class="nav-icons">
    <a href="/Home/home_page.php">
                <img src="home.png" alt="Icon 1">
            </a>
            <a href="/Kompetisi dan Event/Halaman Event/Event.php">
                <img src="event.png" alt="Icon 2">
            </a>
            <a href="../Kategori-Awal/kategori-awal.php">
                <img src="kategori.png" alt="Icon 3">
            </a>
            <a href="/Profil/profil_page.php">
                <img src="profile.png" alt="Icon 4">
            </a>
            <a href="/Notifikasi/notifikasi.php">
                <img src="notifikasi.png" alt="Icon 5">
            </a>
        </div>
</nav>

<!-- Halaman konten tanpa footer -->

</body>
</html>
