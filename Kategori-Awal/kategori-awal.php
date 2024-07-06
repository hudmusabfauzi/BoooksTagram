<!DOCTYPE html>
<html>
<head>
    <title>Kategori</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /*Navbar*/
        body {
            margin: 0;
            padding: 0;
            font-family: "PT Sans", sans-serif;
            background: #f2f2f2;
            padding-bottom: 100px; /* Berikan ruang kosong di bagian bawah halaman untuk footer */
        }
        
        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(270deg, #0E41DF 0%, #0253BE 17.19%, #037CDC 100%);
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.20);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
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
            border-radius: 3px;
            margin: 0 20px;
            padding: 5px 70px 5px 48px;
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
            max width: 20%;
        }
        input[placeholder="Cari"]
        {
            margin-left: -30px;
        }
        
        .nav-icons {
            display: flex;
            align-items: center;
            margin-right: 40px;
            gap: 25px;
        }

        .nav-icons img {
            width: 25.88px;
            height: 25.88px;
            margin-left: 5px;
            cursor: pointer;
        }
        
        /*Button Kotak*/
        .container{
            width: 1400px;
            margin: 98px auto;
            columns: 4;
            gap: 20px;
           
        }
        .container
        .button-kotak{
            width: 100%;
            margin-bottom: 10px;
            break-inside: avoid;
            height: 108px;
            border-radius: 8px;
            color: white;
            font-family: PT Sans;
            font-size: 14px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            box-shadow:  0 2px 5px rgba(0, 0, 0, 0.2); /* Efek shadow tipis */
            transition: background-color 0.3s ease;
            overflow: hidden; /* Sembunyikan isi yang melebihi ukuran tombol */
            padding: 10px 15px; 
            transition: transform 0.3s;
        }
        .container
        .button-kotak:hover{
            transform: scale(0.98);
        }

        /* Warna latar belakang untuk masing-masing button */
        .button-kotak:nth-child(1) {
            background-color: #2980b9; /* Biru Langit */
        }

        .button-kotak:nth-child(2) {
            background-color: #27ae60; /* Hijau Daun */
        }

        .button-kotak:nth-child(3) {
            background-color: #f39c12; /* Kuning Cerah */
        }

        .button-kotak:nth-child(4) {
            background-color: #e74c3c; /* Merah Terang */
        }

        .button-kotak:nth-child(5) {
            background-color: #3498db; /* Biru Elektrik */
        }

        .button-kotak:nth-child(6) {
            background-color: #8e44ad; /* Ungu Terang */
        }

        .button-kotak:nth-child(7) {
            background-color: #e67e22; /* Oranye Terang */
        }

        .button-kotak:nth-child(8) {
            background-color: #95a5a6; /* Abu-abu Terang */
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

        /*Box 2*/

        .box-2{
        display: flex;
        justify-content: flex-end;
        align-items: center;
        width: 1400px;
        height: 300px;
        flex-shrink: 0;
        border-radius: 5px;
        border: 1px solid rgba(171, 171, 171, 0.50);
        background: #FFF;
        margin-top: 100px;
        margin-left: 55px;
        text-align: left;
        }
        .box-2 .header{
        width: 1400px;
        height: 46px;
        flex-shrink: 0;
        border-radius: 5px;
        background: #037CDC;
        margin-top: -330px;
        right: auto;
        left: 100px;
        position: sticky;  
        }
        .box-2 .header p{
            font-family: PT Sans;
            color: #FFF;
            font-size: 20px;
            margin-left: 25px;
            margin-top: 10px;
        }
        .card-2{
        display: flex;
        width: 370px;
        height: 219px;
        flex-shrink: 0;
        border-radius: 5px;
        border: 1px solid rgba(171, 171, 171, 0.50);
        background: rgba(241, 241, 241, 0.30);
        margin-top: 100px;
        margin-right: 100px;
        margin-top: -10px;
        }
        .card-2 .header{
        width: 370px;
        height: 33px;
        flex-shrink: 0;
        border-radius: 5px;
        background: #037CDC;
        text-align: center;
        margin-top: -2px;
        margin-left: -100px;
        position: relative;
        }
        .card-2 .header p{
        display: flex;
        width: 159px;
        height: 13px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #FFF;
        font-family: PT Sans;
        font-size: 15px;
        font-style: normal;
        font-weight: 700;
        line-height: 125.5%; /* 18.825px */
        margin-top: 10px;
        text-align: center;
        margin-left: 85px;
        }
        .content-card-left{
        display: flex;
        }
        .content-card-left img{
        width: 82px;
        height: 127px;
        flex-shrink: 0;
        position: relative;
        margin-left: -243px;
        margin-top: 48px;
        }
        .content-card-left button{
        width: 82px;
        height: 18px;
        flex-shrink: 0;
        border-radius: 2px;
        background: #037CDC;
        display: flex;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #FFF;
        font-family: PT Sans;
        font-size: 10px;
        font-style: normal;
        font-weight: 700;
        line-height: 125.5%; /* 12.55px */
        text-align: center;
        margin-top: 185px;
        margin-left: -81px;
        }
        .content-card-left button:hover{
        cursor: pointer;
        color: #FFF;
        }
        .content-card-right{
        display: flex;
        justify-content: center;
        }
        .content-card-right p{
        display: flex;
        width: 184px;
        height: 13px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #434343;
        font-family: PT Sans;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: 125.5%; /* 12.55px */
        position: relative;
        margin-top: 80px;
        margin-left: -180px;
        text-align: left;
        }
        .content-card-right h5{
        display: flex;
        width: 75px;
        height: 13px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #434343;
        font-family: PT Sans;
        font-size: 12px;
        font-style: normal;
        font-weight: 700;
        line-height: 125.5%; /* 12.55px */
        margin-top: 158px;
        margin-left: -185px;
        text-align: left;

        }
        .content-card-right span{
        width: 206px;
        color: rgba(0, 0, 0, 0.70);
        font-family: PT Sans;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        }
        .card-3{
        display: flex;
        width: 370px;
        height: 219px;
        flex-shrink: 0;
        border-radius: 5px;
        border: 1px solid rgba(171, 171, 171, 0.50);
        background: rgba(241, 241, 241, 0.30);
        margin-top: 100px;
        margin-right: 100px;
        margin-top: -10px;
        }
        .card-3 .header{
        width: 370px;
        height: 33px;
        flex-shrink: 0;
        border-radius: 5px;
        background: #037CDC;
        text-align: center;
        margin-top: -2px;
        margin-left: -100px;
        position: relative;
        }
        .card-3 .header p{
        display: flex;
        width: 159px;
        height: 13px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #FFF;
        font-family: PT Sans;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 125.5%; /* 18.825px */
        margin-top: 10px;
        text-align: center;
        margin-left: 100px;
        }
        .card-content-left-3 img{
        width: 88px;
        height: 129px;
        flex-shrink: 0;
        position: relative;
        margin-left: -238px;
        margin-top: 48px;
        }
        .card-content-left-3 button{
        width: 82px;
        height: 18px;
        flex-shrink: 0;
        border-radius: 2px;
        background: #037CDC;
        display: flex;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #FFF;
        font-family: PT Sans;
        font-size: 10px;
        font-style: normal;
        font-weight: 700;
        line-height: 125.5%; /* 12.55px */
        text-align: center;
        margin-top: 10px;
        margin-left: -234px;
        }
        .card-content-left-3 button:hover{
        cursor: pointer;
        color: #FFF;
        }
        .card-content-right-3 p{
        display: flex;
        width: 184px;
        height: 13px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #434343;
        font-family: PT Sans;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: 125.5%; /* 12.55px */
        position: relative;
        margin-top: 80px;
        margin-left: -120px;
        text-align: left;
        }
        .card-content-right-3 img{
            position: fixed;
            width: 150px;
            height: 2px;
            margin-left: 690px;
            margin-top: 645px;
        }
        .card-content-right-3 h5{
            display: flex;
        width: 75px;
        height: 13px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #434343;
        font-family: PT Sans;
        font-size: 12px;
        font-style: normal;
        font-weight: 700;
        line-height: 125.5%; /* 12.55px */
        margin-top: 70px;
        margin-left: -120px;
        text-align: left;
        }
        .card-content-right-3 span{
        width: 206px;
        color: rgba(0, 0, 0, 0.70);
        font-family: PT Sans;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        }
        .card-4{
        display: flex;
        width: 370px;
        height: 219px;
        flex-shrink: 0;
        border-radius: 5px;
        border: 1px solid rgba(171, 171, 171, 0.50);
        background: rgba(241, 241, 241, 0.30);
        margin-top: 100px;
        margin-right: 50px;
        margin-top: -10px;
        }
        .card-4 .header{
        width: 370px;
        height: 33px;
        flex-shrink: 0;
        border-radius: 5px;
        background: #037CDC;
        text-align: center;
        margin-top: -2px;
        margin-left: -100px;
        position: relative;
        }
        .card-4 .header p{
        display: flex;
        width: 159px;
        height: 13px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #FFF;
        font-family: PT Sans;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 125.5%; /* 18.825px */
        margin-top: 10px;
        text-align: center;
        margin-left: 100px;
        }
        .card-content-left-4 img{
        width: 88px;
        height: 129px;
        flex-shrink: 0;
        position: relative;
        margin-left: -238px;
        margin-top: 48px;
        }
        .card-content-left-4 button{
        width: 82px;
        height: 18px;
        flex-shrink: 0;
        border-radius: 2px;
        background: #037CDC;
        display: flex;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #FFF;
        font-family: PT Sans;
        font-size: 10px;
        font-style: normal;
        font-weight: 700;
        line-height: 125.5%; /* 12.55px */
        text-align: center;
        margin-top: 10px;
        margin-left: -234px;
        }
        .card-content-left-4 button:hover{
        cursor: pointer;
        color: #FFF;
        }
        .card-content-right-4 p{
        display: flex;
        width: 184px;
        height: 13px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #434343;
        font-family: PT Sans;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: 125.5%; /* 12.55px */
        position: relative;
        margin-top: 80px;
        margin-left: -120px;
        text-align: left;
        }
        .card-content-right-4 img{
            position: fixed;
            width: 150px;
            height: 2px;
            margin-left: 1190px;
            margin-top: 645px;
        }
        .card-content-right-4 h5{
            display: flex;
        width: 75px;
        height: 13px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #434343;
        font-family: PT Sans;
        font-size: 12px;
        font-style: normal;
        font-weight: 700;
        line-height: 125.5%; /* 12.55px */
        margin-top: 70px;
        margin-left: -120px;
        text-align: left;
        }
        .card-content-right-4 span{
        width: 206px;
        color: rgba(0, 0, 0, 0.70);
        font-family: PT Sans;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        }
    </style>

</head>
<body>
    <nav>
        <img src="Logo 6.png" alt="" class="logo">
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
        </div>
    </nav>
    <!--END OF NAVBAR-->

    <div class="container">
        <!-- Kotak button bagian atas -->
         <!-- Tombol link dengan class button-kotak -->
         <button class="button-kotak" id="fiksi-button" onclick="goToHalamanTujuan()">
            <i class="fas fa-book"></i> FIKSI
        </button>
        <button class="button-kotak"><i class="fas fa-file-alt"></i> NON FIKSI</button>
        <button class="button-kotak"><i class="fas fa-history"></i> SEJARAH</button>
        <button class="button-kotak"><i class="fas fa-feather-alt"></i> CERITA PENDEK</button>
        <button class="button-kotak"><i class="fas fa-search"></i> MISTERI / THRAILER</button>
        <button class="button-kotak"><i class="fas fa-user-cog"></i> PENGEMBANGAN DIRI</button>
        <button class="button-kotak"><i class="fas fa-pen-nib"></i> SASTRA</button>
        <button class="button-kotak"><i class="fas fa-flask"></i> SAINS POPULER</button>
    </div>

    <div class="box-2">
        <div class="header">
          <p>Rekomendasi Buku</p>
        </div>
          <div class="card-2">
            <div class="header">
              <p>Biografi Gus Dur</p>
            </div>
            <div class="content-card-left">
              <img src="Biografi gus dur.png" alt="">
              <button type="button">Review Buku</button>
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
              <button type="button"> Review Buku</button>
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
              <button type="button"> Review Buku</button>
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
        </div>
</body>
</html>