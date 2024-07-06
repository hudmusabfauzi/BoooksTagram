<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="home.css">

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
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 110px;
            z-index: 998;
        }

        .logo {
            width: 150px;
            height: auto;
            margin-left: -730px;
            margin-top: 10px;
        }
        .nav-bottom h4{
            color: #FFF;
            font-family: PT Sans;
            font-size: 24px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            margin-left: -670px;
            margin-top: 8px;
        }
        .nav-bottom h4 span{
            color: #FFF;
            font-family: PT Sans;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }
        .search-container {
            flex: 0;
            display: flex;
            align-items: center;
            background-color: #FFF;
            border-radius: 2px;
            padding: 4px 70px 4px 48px;
            width: 150px;
            height: 23px;
            flex-shrink: 0;
            margin-top: 5px;
            margin-left:-40px;
            position: fixed;

        }

        input[type="text"] {
            flex: 1;
            height: 20px;
            border: none;
            background: transparent;
            outline: none;
            font-size: 14px;
            color: #037CDC;
        }
        input[placeholder="Cari"]{
            margin-left: -30px;
        }
        
        .nav-icons {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-left: 1100px;
            margin-top: 10px;
            gap: 25px; 
            position: fixed;
        }

        .nav-icons img {
            width: 25.88px;
            height: 25.88px;
            margin-left: 5px;
            cursor: pointer;
        }
        .button-top{
            display: flex;
            margin-top: -70px;
            gap: 15px;
        }
        
        .button-right{
            width:85px;
            height: 31px;
            border-radius: 5px;
            background: white;
            border: 1px solid white;
            margin-left: 1200px;
            color: #037CDC;
            font-family: PT Sans;
            font-size: 14px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            text-align: left;
            padding-left: 14px;
            transition: transform 0.3s;
        }
        .button-right:hover{
            cursor:pointer;
            transform: scale(1.2);
        }
        .img{
            width: 18px;
            height: 18px;
            flex-shrink: 0;
            margin-top: 7px;
            margin-left: -40px;
            transition: transform 0.3s;
        }
        .img:hover{
            cursor:pointer;
            transform:scale(1.2);
        }
        .button-left{
            width:85px;
            height: 31px;
            border-radius: 5px;
            background: #037CDC;
            border: 1px solid #037CDC;
            color: White;
            font-family: PT Sans;
            font-size: 14px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            transition:transform 0.3s;
        }
        .button-left:hover{
            cursor:pointer;
            transform:scale(1.2);
        }

        .navigation {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: transform 0.3s;
        }
        .navigation:hover{
            transform: scale(0.5);
        }
       .left{
          
            left: 0;
            height: 40px;
            width: 41px; 
       }
       .right{
            right: 0;
            width: 41px;
            height: 40px;
       }
        .card{
            justify-content: flex-start;
            width: 280px;
            height: 128px;
            flex-shrink: 0;
            border-radius: 5px;
            border: 1px solid rgba(171, 171, 171, 0.50);
            background: rgba(241, 241, 241, 0.30);
            margin-top: 30px;
            margin-right: 55px;
            }
            .card :hover{
            cursor: pointer;
            }
            .card img{
            width: 66px;
            height: 66px;
            flex-shrink: 0;
            position: relative;
            margin-left: 7px;  
            margin-top: 20px;
            display: flex;
            transition: transform 0.3s;
            }
            .card img:hover{
            cursor: pointer;
            transform: scale(1.5);
            }
            .card h5{
            color: #434343;
            font-family: PT Sans;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            
            }
            .card h5:hover{
                cursor:pointer;
            }
            .card h5 span{
            color: rgba(0, 0, 0, 0.70);
            font-family: PT Sans;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            }
            .card h5 span:hover{
                cursor:pointer;
            }

            /* ... (kode CSS lainnya)... */
        .button-right,
        .button-left {
            /* ... (kode CSS lainnya)... */
            cursor: pointer;
        }
        button {
            /* ... (kode CSS lainnya)... */
            cursor: pointer;
        }
    </style>
</head>
<body>
    <nav>
        <a href="homepage.html">
            <img src="Logo 6.png" alt="logo" class="logo">
        </a>
        <div class="nav-bottom">
            <h4>
            Halo,  Welcome to Bookstagram! <br>
                <span>Yuk,  Gabung bersama kami. Cari buku yang kamu suka dan ikuti Event menarik lainya.!</span>
            </h4>
        </div>
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
        <div class="button-top">
        <button type="button" class="button-right" onclick="window.location.href='/Login/Login.php'">Login</button>
        <img class="img" src="login img.png" alt="">
        <button type="button" class="button-left" onclick="window.location.href='/Daftar/daftar.php'">Daftar</button>
        </div>
    </nav>
        <div class="box">
        <div class="header">
            <p>Selamat Datang kembali di Bookstagram!</p>
        </div>
        
            <div class="navigation left">
                <img src="navigasi.png" alt="">
            </div>
            <div class="navigation right">
                <img src="navigasi right.png" alt="">
            </div>
        
        <!-- Ubah elemen <div class="card"> menjadi <button class="card"> -->
        <button class="card">
            <img src="read 1.png" alt="">
            <h5>Baca Buku Online Gratis <br> <span>Baca kumpulan e-book dan pdf yang tersedia secara gratis</span></h5>
        </button>
        <!-- Ubah elemen <div class="card"> menjadi <button class="card"> -->
        <button class="card">
            <img src="track 1.png" alt="">
            <h5>Temukan Buku Favorit Kamu <br> <span>Temukan Event dan perlombaan yang kamu inginkan</span></h5>
        </button>
        <!-- Ubah elemen <div class="card"> menjadi <button class="card"> -->
        <button class="card">
            <img src="fulltext 1.png" alt="">
            <h5>Cari Kompetisi & Event <br> <span>Temukan Kompetisi dan Event Bedasarkan rekomendasi yang kamu inginkan disini</span></h5>
        </button>
        <!-- Ubah elemen <div class="card"> menjadi <button class="card"> -->
        <button class="card">
            <img src="feedback 1.png" alt="">
            <h5>Review dan Rekomendasi <br> <span>Temukan buku bacaan yang kamu suka.</span></h5>
        </button>
    </div>
          <div class="box-2">
            <div class="header">
              <p>Review Buku </p>
            </div>
              <div class="card-2">
                <div class="header">
                  <p>Biografi Gus Dur</p>
                </div>
                <div class="content-card-left">
                  <img src="Biografi gus dur.png" alt="">
                  <button type="button" onclick="window.location.href='/Unggah Review Buku/detail_review.php'">Review Buku</button>
                </div>
                <div class="content-card-right">
                  <p>
                    Penulis   : Greg Barton <br>
                    Penerbit  : IRCiSoD <br>
                    Tebal     : 178 Halaman <br>
                    Kategori  : Non Fiksi
                  </p>
                  <h5>
                    Review : <br>
                    <span>Buku ini menceritkan tentang, kisah perjalalan gus dur saat masih menimba ilmu, hingga beliau jadi seorang presiden.</span>
                  </h5>
                </div>
              </div>
              <div class="card-3">
                <div class="header">
                  <p>Filosofi Teras</p>
                </div>
                <div class="card-content-left-3">
                  <img src="filosofi teras.png" alt="">
                  <button type="button" onclick="window.location.href='/Unggah Review Buku/detail_review.php'">Review Buku</button>
                </div>
                <div class="card-content-right-3">
                  <p>
                    Penulis   : Greg Barton <br>
                    Penerbit  : IRCiSoD <br>
                    Tebal     : 178 Halaman <br>
                    Kategori  : Non Fiksi
                  </p>
                  <img src="line.png" alt="">
                  <h5>Review : <br>
                    <span>Buku ini menceritkan tentang, kisah perjalalan gus dur saat masih menimba ilmu, hingga beliau jadi seorang presiden.</span></h5>
                </div>
              </div>
              <div class="card-4">
                <div class="header">
                  <p>Atomic Habits</p>
                </div>
                <div class="card-content-left-4">
                  <img src="atomic.png" alt="">
                  <button type="button" onclick="window.location.href='/Unggah Review Buku/detail_review.php'">Review Buku</button>
                </div>
                <div class="card-content-right-4">
                  <p>
                    Penulis   : Greg Barton <br>
                    Penerbit  : IRCiSoD <br>
                    Tebal     : 178 Halaman <br>
                    Kategori  : Non Fiksi
                  </p>
                  <img src="line.png" alt="">
                  <h5>Review : <br>
                    <span>Buku ini menceritkan tentang, kisah perjalalan gus dur saat masih menimba ilmu, hingga beliau jadi seorang presiden.</span></h5>
                </div>
                <!-- Floating Button -->
                <div class="floating-button">
                    <a href="/Unggah Review Buku/unggah_review.php">
                    <i class="fas fa-pencil-alt"></i>
                    </a>
                </div>
            </div>
    </body>
</html>
