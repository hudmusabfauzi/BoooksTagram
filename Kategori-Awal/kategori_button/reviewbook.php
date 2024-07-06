<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kategori Page</title>
        <link rel="stylesheet" href="reviewstyle.css">
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
        <style>
          table {
            width: 100%;
            border-collapse: collapse;
            margin-left: 30px;
          }
      
          td {
            border: 1px;
            padding: 8px;
            text-align: inherit;
          }
      
          .grid-container {
            display: grid;
            grid-template-columns: 120px 1fr;
            gap: 5px;
            align-items: center;
          }
      
          .gambar {
            width: 98px;
            height: 149px;
            flex-shrink: 0;
            position: relative;
            margin-left: -25px;
          }
          .buton button{
            align-items: center;
            width: 125px;
            height: 23px;
            flex-shrink: 0;
            border-radius: 2px;
            background: #037CDC;
            color: #FFF;
            font-family: PT Sans;
            font-size: 10px;
            font-style: normal;
            font-weight: 700;
            line-height: 125.5%; /* 12.55px */
            margin-left: 123px;
          }
          .buton button:hover{
            cursor: pointer;
            background-color: cadetblue;
          }
        </style>
      </head>
    <body>
      <nav class="navbar">
        <div class="navbar-top">
          <img src="Logo 6.png" alt="">
          <div class="search-container">
              <input type="text" id="search" class="styled-class" type="search" placeholder="Search">
              <img class="icon" src="search.png" alt="">
            </div>
          </div>
            <ul>
              <li><a href="..//home/home.html"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                <path d="M0 0H27.03V27.03H0V0Z" fill="white" fill-opacity="0.01"/>
                <path d="M24.7775 24.7774V11.2624L13.515 2.25244L2.25247 11.2624V24.7774H9.00997V14.6412H18.02V24.7774H24.7775Z" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                <path d="M13.515 24.7777V19.1465" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg></a></li>
              <li><a href="..//event/search-event.html"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                <path d="M3.14276 11.8276H26.7977V24.9001C26.7977 25.5877 26.2403 26.1451 25.5527 26.1451H4.38776C3.70017 26.1451 3.14276 25.5877 3.14276 24.9001V11.8276Z" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                <path d="M3.14276 5.60242C3.14276 4.91483 3.70017 4.35742 4.38776 4.35742H25.5527C26.2403 4.35742 26.7977 4.91483 26.7977 5.60242V11.8274H3.14276V5.60242Z" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                <path d="M9.99026 2.49023V7.47023" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M19.9502 2.49023V7.47023" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg></a></li>
              <li><a href="..//kategori/reviewbook.html"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                <path d="M0.910156 0.632324H27.9444V27.6666H0.910156V0.632324Z" fill="white" fill-opacity="0.01"/>
                <path d="M11.048 2.88525H4.28945C3.66734 2.88525 3.16302 3.38957 3.16302 4.01168V10.7702C3.16302 11.3924 3.66734 11.8967 4.28945 11.8967H11.048C11.6701 11.8967 12.1744 11.3924 12.1744 10.7702V4.01168C12.1744 3.38957 11.6701 2.88525 11.048 2.88525Z" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                <path d="M11.048 16.4023H4.28945C3.66734 16.4023 3.16302 16.9067 3.16302 17.5288V24.2873C3.16302 24.9094 3.66734 25.4138 4.28945 25.4138H11.048C11.6701 25.4138 12.1744 24.9094 12.1744 24.2873V17.5288C12.1744 16.9067 11.6701 16.4023 11.048 16.4023Z" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                <path d="M24.5651 2.88525H17.8066C17.1845 2.88525 16.6801 3.38957 16.6801 4.01168V10.7702C16.6801 11.3924 17.1845 11.8967 17.8066 11.8967H24.5651C25.1872 11.8967 25.6916 11.3924 25.6916 10.7702V4.01168C25.6916 3.38957 25.1872 2.88525 24.5651 2.88525Z" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                <path d="M16.6801 16.4023H25.6916" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M21.1859 20.9082H25.6916" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M16.6801 25.4141H25.6916" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg></a></li>
              <li><a href="..//profilp/halaman profil.html"><svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                <path d="M0.944336 0H30.8243V29.88H0.944336V0Z" fill="white" fill-opacity="0.01"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8844 27.3902C22.7603 27.3902 28.3344 21.8162 28.3344 14.9402C28.3344 8.06428 22.7603 2.49023 15.8844 2.49023C9.00843 2.49023 3.43439 8.06428 3.43439 14.9402C3.43439 21.8162 9.00843 27.3902 15.8844 27.3902Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.8844 14.3168C17.6033 14.3168 18.9969 12.9233 18.9969 11.2043C18.9969 9.48532 17.6033 8.0918 15.8844 8.0918C14.1654 8.0918 12.7719 9.48532 12.7719 11.2043C12.7719 12.9233 14.1654 14.3168 15.8844 14.3168Z" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                <path d="M7.34726 22.8829C7.56121 19.6388 10.2603 17.0737 13.5586 17.0737H18.5385C21.8324 17.0737 24.5288 19.632 24.749 22.87" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg></a></li>
              <li><a href="..//notifikasi/notifikasi.html"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="26" viewBox="0 0 22 26" fill="none">
                <path d="M11.3242 26C12.768 26 13.9492 24.8 13.9492 23.3333H8.69922C8.69922 24.8 9.86734 26 11.3242 26ZM19.1992 18V11.3333C19.1992 7.24 17.0467 3.81333 13.293 2.90667V2C13.293 0.893333 12.4136 0 11.3242 0C10.2348 0 9.35547 0.893333 9.35547 2V2.90667C5.58859 3.81333 3.44922 7.22667 3.44922 11.3333V18L0.824219 20.6667V22H21.8242V20.6667L19.1992 18Z" fill="white"/>
              </svg></a></li>
            </ul>
            </nav>
              <div class="header">
                <div class="icon">
                  <a href="home.html"> <img src="Arrow back.png" alt=""></a>
                </div>
                <a href="..//home/home.html"><h1>Kembali</h1></a>
              </div>
              <table>
                <tr>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="Bicara Ada Seninya 2.png" alt="Gambar 1">
                      <div class="keterangan">Bicara itu Ada Seninya<br><span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                    <div class="buton"><button type="button">Review</button>
                    </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="Biografi gus dur.png" alt="Gambar 2">
                      <div class="keterangan">Biografi Gus Dur <br> <span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="atomic.png" alt="Gambar 3">
                      <div class="keterangan">Atomic Habbit <br> <span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="filosofi teras.png" alt="Gambar 4">
                      <div class="keterangan">Filosofi Teras <br><span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="Bicara Ada Seninya 2.png" alt="Gambar 1">
                      <div class="keterangan">Bicara itu Ada Seninya<br><span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                    <div class="buton"><button type="button">Review</button>
                    </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="Biografi gus dur.png" alt="Gambar 2">
                      <div class="keterangan">Biografi Gus Dur <br> <span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="atomic.png" alt="Gambar 3">
                      <div class="keterangan">Atomic Habbit <br> <span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="filosofi teras.png" alt="Gambar 4">
                      <div class="keterangan">Filosofi Teras <br><span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="Bicara Ada Seninya 2.png" alt="Gambar 1">
                      <div class="keterangan">Bicara itu Ada Seninya<br><span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                    <div class="buton"><button type="button">Review</button>
                    </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="Biografi gus dur.png" alt="Gambar 2">
                      <div class="keterangan">Biografi Gus Dur <br> <span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="atomic.png" alt="Gambar 3">
                      <div class="keterangan">Atomic Habbit <br> <span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="filosofi teras.png" alt="Gambar 4">
                      <div class="keterangan">Filosofi Teras <br><span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="Bicara Ada Seninya 2.png" alt="Gambar 1">
                      <div class="keterangan">Bicara itu Ada Seninya<br><span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                    <div class="buton"><button type="button">Review</button>
                    </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="Biografi gus dur.png" alt="Gambar 2">
                      <div class="keterangan">Biografi Gus Dur <br> <span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="atomic.png" alt="Gambar 3">
                      <div class="keterangan">Atomic Habbit <br> <span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="filosofi teras.png" alt="Gambar 4">
                      <div class="keterangan">Filosofi Teras <br><span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="Bicara Ada Seninya 2.png" alt="Gambar 1">
                      <div class="keterangan">Bicara itu Ada Seninya<br><span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                    <div class="buton"><button type="button">Review</button>
                    </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="Biografi gus dur.png" alt="Gambar 2">
                      <div class="keterangan">Biografi Gus Dur <br> <span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="atomic.png" alt="Gambar 3">
                      <div class="keterangan">Atomic Habbit <br> <span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="filosofi teras.png" alt="Gambar 4">
                      <div class="keterangan">Filosofi Teras <br><span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="Bicara Ada Seninya 2.png" alt="Gambar 1">
                      <div class="keterangan">Bicara itu Ada Seninya<br><span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                    <div class="buton"><button type="button">Review</button>
                    </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="Biografi gus dur.png" alt="Gambar 2">
                      <div class="keterangan">Biografi Gus Dur <br> <span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="atomic.png" alt="Gambar 3">
                      <div class="keterangan">Atomic Habbit <br> <span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="filosofi teras.png" alt="Gambar 4">
                      <div class="keterangan">Filosofi Teras <br><span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="Bicara Ada Seninya 2.png" alt="Gambar 1">
                      <div class="keterangan">Bicara itu Ada Seninya<br><span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                    <div class="buton"><button type="button">Review</button>
                    </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="Biografi gus dur.png" alt="Gambar 2">
                      <div class="keterangan">Biografi Gus Dur <br> <span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="atomic.png" alt="Gambar 3">
                      <div class="keterangan">Atomic Habbit <br> <span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                  <td>
                    <div class="grid-container">
                      <img class="gambar" src="filosofi teras.png" alt="Gambar 4">
                      <div class="keterangan">Filosofi Teras <br><span>Penulis   : Greg Barton <br>
                        Penerbit  : IRCiSoD <br>
                        Tebal     : 178 Halaman <br>
                        Kategori  : Non Fiksi</span></div>
                    </div>
                  </div>
                  <div class="buton"><button type="button">Review</button>
                  </div>
                  </td>
                </tr>
              </table>
          </body>
        </html>