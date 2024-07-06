<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Searching For Event</title>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
        <style>
        
            .body{
            margin: 0;
            padding: 0;
        }

        header{
            display: flex;
        }

        h1{
            color: #292D32;
            font-family: PT Sans;
            font-size: 36px;
            font-style: normal;
            font-weight: 700;
            line-height: 100.4%; /* 36.144px */
            margin-left: 28px;
        }

        h1 span{
            background: linear-gradient(90deg, #00269D 0%, #037CDC 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: PT Sans;
            font-size: 36px;
            font-style: normal;
            font-weight: 700;
            line-height: 100.4%;
        }

        h4{
            color: #292D32;
            font-family: PT Sans;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            margin-left: 30px;
            margin-top: -15px;
        }
        .right-header{
            display: flex;
            gap: 20px;
            margin-left: 800px;
            margin-top: -85px;
        }

        .right-header button{
            width: 165px;
            height: 35px;
            background: #037CDC;
            border-radius: 3px;
            border: 1px solid #037CDC;
        }


        .right-header button:hover{
            background-color: #00269D;
            cursor: pointer;
        }


        .right-header button img{
            width: 21px;
            height: 21px;
            flex-shrink: 0;
            margin-left: -120px;
            margin-top: 3px;
        }


        .right-header button img:hover{
            background-color: #00269D;
            cursor: pointer;
        }


        .right-header button p{
            color: #fff;
            font-family: PT Sans;
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            margin-top: -23px;
            margin-left: 10px;
        }


        .form-container {
            display: flex;
            align-items: center;
            border: 1px solid #037CDC;
            padding: 10px;
            border-radius: 5px;
            width: 280.694px;
            height: 15px;
            flex-shrink: 0;
        }


        .form-container:hover{
            cursor: pointer;
        }

        /* Gaya untuk input form */
        .form-input {
          width: 250px;
          font-family: PT Sans;
          margin: 5px;
          border-color: #FFF;
        }
  
        option{
            font-family: PT Sans;
        }


        .form-containerKategori{
            display: flex;
            border: 1px solid #037CDC;
            width: 135px;
            height: 35px;
            flex-shrink: 0;
            border-radius: 3px;
            background: #FFF;
        }


        .form-containerKategori img{
            width: 21px;
            height: 21px;
            flex-shrink: 0;
            margin-top: 8px;
            margin-left: 10px;
            cursor: pointer;
        }


      .form-containerKategori h6{
          width: 118px;
          height: 16px;
          flex-shrink: 0;
          color: rgba(67, 67, 67, 0.53);
          font-family: PT Sans;
          font-size: 14px;
          font-style: normal;
          font-weight: 500;
          line-height: normal;
          margin-left: 18px;
          margin-top: 10px;
      }

      /* ... (CSS styles remain the same until the '.grid-container' class) ... */

            .grid-container {
                width: 1400px;
                margin: 55px auto;
                columns: 4;
                column-gap: 40px;
            }

            .grid-container
            .grid-item {
                width: 100%;
                margin-bottom: 10px;
                break-inside: avoid;
               
            }

            /* ... (CSS styles remain the same after '.grid-container' class) ... */

      .pict img{
        width: 100%;
        flex-shrink: 0;
        margin-top: 2px;
        margin-left: 2px;
        border-radius: 15px;
        border: 2px #434343;
        transition: transform 0.3s;
      }
      .pict img:hover{
        cursor: pointer;
        transform: scale(1.05);
        
      }

      .header-button {
          display: inline-block;
          padding: 4px 4px;
          font-size: 11px;
          font-family: PT Sans;
          color: #037CDC;
          border: 2px solid #037CDC;
          border-radius: 3.5px;
          background-color: #FFF;
          cursor: pointer;
          white-space: nowrap;
          margin-top: 5px;
          margin-left: 5px;
          transition: transforms 0.3s;
      }


      .header-button:hover{
          border-color: blue;
          transform: scale(1.3);
      }


      .text-header{
          display: flex;
          flex-direction: column;
      }


      .tanggal{
      color: #434343;
      font-family: PT Sans;
      font-size: 13px;
      font-style: normal;
      font-weight: 400;
      line-height: 125.5%; /* 7.53px */
      margin-left: 7px;
      }


      .text-header img{
      width: 13px;
      height: 13px;
      flex-shrink: 0;
      margin-left: 263px;
      margin-top: -29px;
      }


      .numb{
      color: #434343;
      font-family: Roboto;
      font-size: 13px;
      font-style: normal;
      font-weight: 400;
      line-height: 125.5%; /* 7.53px */
      margin-left: 278px;
      margin-top: -14px;
      }


      .text-center h3{
          color: #000;
      font-family: PT Sans;
      font-size: 16px;
      font-style: normal;
      font-weight: 700;
      line-height: normal;
      margin-left: 5px;
      }


      .text-center span{
          color: #434343;
      font-family: PT sans-serif;
      font-size: 14px;
      font-style: normal;
      font-weight: 400;
      line-height: 125.5%; /* 10.04px */
      }


      .bottom-button button{
      width: 320px;
      height: 27px;
      flex-shrink: 0;
      border-radius: 4px;
      background: #037CDC;
      cursor: pointer;
      margin-left: 5px;
      border: 1px solid #037CDC;
      color: #FFF;
      font-family: PT Sans;
      font-size: 14px;
      font-style: normal;
      font-weight: 700;
      line-height: 125.5%; /* 17.57px */
      }


      .bottom-button button:hover{
          background-color: #00269D;
      }
        </style>
    
    </head>
    <body>
    <br><br>
    <?php include  "/xampp/htdocs/BOOKSTAGRAM/Navbar/navbar.php"; ?>
        <div class="header">
            <div class="left-header">
                <h1>Cari Kompetisi <span>& Event disini</span></h1>
                <h4>Cari, simpan, dan ikuti berbagai jenis kompetisi <br>
                  dengan mudah dan nyaman</h4>
              </div>
              <div class="right-header">
              <a href="/Kompetisi dan Event/unggah_kompetisi.php">
              <button type="button">
                <img src="File upload.png" alt="">
                <p>Unggah Kompetisi</p>
              </button>
              </a>

                <div class="form-container">
                  <img src="Timesheet.png" alt="">
                  <select id="dropdown-input" class="form-input" name="sortingOption">
                      <option value="option1">Deadline Terdekat</option>
                      <option value="option2">Lomba Terbaru</option>
                      <option value="option3">Lomba Terpopuler</option>
                    </select>   
                </div>
              <div class="form-containerKategori">
                <img src="Eye.png" alt="">
                <h6>Kategori</h6>
              </div>
              </div>
        </div>

        <!--Konten 1-->
        <div class="grid-container">
            <div class="grid-item">
              <div class="pict">
                  <img  src="Bedah buku ernest 1.png" alt="">
                </div> 
                <div class="button">
                  <button class="header-button" type="button">Talk Show</button>
                  <button class="header-button" type="button">Bedah buku</button>
                </div>
                <div class="text-header">
                  <p class="tanggal">5 Juli 2023, 23:58;19</p>
                  <img src="Eye.png" alt="">
                  <p class="numb">78</p>
                </div>
                  <div class="text-center">
                    <h3>Talkshow & Bedah Buku <br>
                      <span>Bank Indonesia</span></h3>
                  </div>
                <div class="bottom-button">
                  <button type="button">Selengkapnya</button>
                </div>
            </div>
            
          <!--Konten 2-->
            <div class="grid-item">
              <div class="pict">
                  <img  src="Lomba Menulis Puisi 2.png" alt="">
                </div> 
                <div class="button">
                  <button class="header-button" type="button">Esay</button>
                  <button class="header-button" type="button">Fotografi</button>
                </div>
                <div class="text-header">
                  <p class="tanggal">20 Juni - 23 Juli 2023, 23:58;19</p>
                  <img src="Eye.png" alt="">
                  <p class="numb">123</p>
                </div>
                  <div class="text-center">
                    <h3>Lomba Essay dan Fotografi<br>
                      <span>Himadippussunila</span></h3>
                  </div>
                <div class="bottom-button">
                <button onclick="window.location.href='/Kompetisi dan Event/detail_kompetisi.php';">Mulai Sekarang</button>
                </div>
            </div>
            <!--Konten 3-->
            <div class="grid-item">
              <div class="pict">
                  <img  src="lomba 2022.png" alt="">
                </div> 
                <div class="button">
                  <button class="header-button" type="button">Fair</button>
                  <button class="header-button" type="button">Pameran</button>
                  <button class="header-button" type="button">Talkshow</button>
                  <button class="header-button" type="button">Gratis</button>
                  <button class="header-button" type="button">Buku</button>
                </div>
                <div class="text-header">
                  <p class="tanggal">21 - 24 Maret 2017, 2023, 23:58;19</p>
                  <img src="Eye.png" alt="">
                  <p class="numb">78</p>
                </div>
                  <div class="text-center">
                    <h3>Book Fair Plaza Pameran Industri<br>
                      <span>Kementrian Perindustrian</span></h3>
                  </div>
                <div class="bottom-button">
                  <button type="button">Selengkapnya</button>
                </div>
            </div>
            <!--Konten 4-->
             <div class="gird-item">
              <div class="pict">
                  <img  src="Pelatihan-Literasi-Digital-di-Lingkungan-Kemendikbudristek.jpg" alt="">
                </div> 
                <div class="button">
                  <button class="header-button" type="button">Esay</button>
                  <button class="header-button" type="button">Fotografi</button>
                </div>
                <div class="text-header">
                  <p class="tanggal">20 Juni - 23 Juli 2023, 23:58;19</p>
                  <img src="Eye.png" alt="">
                  <p class="numb">123</p>
                </div>
                  <div class="text-center">
                    <h3>Lomba Essay dan Fotografi<br>
                      <span>Himadippussunila</span></h3>
                  </div>
                <div class="bottom-button">
                  <button type="button">Selengkapnya</button>
                </div>
            </div>
           
            <!--Konten 5-->
            <div class="grid-item">
              <div class="pict">
                  <img  src="BOOK FAIR 1.png" alt="">
                </div> 
                <div class="button">
                  <button class="header-button" type="button">Talk Show</button>
                  <button class="header-button" type="button">Bedah buku</button>
                </div>
                <div class="text-header">
                  <p class="tanggal">5 Juli 2023, 23:58;19</p>
                  <img src="Eye.png" alt="">
                  <p class="numb">78</p>
                </div>
                  <div class="text-center">
                    <h3>Talkshow & Bedah Buku <br>
                      <span>Bank Indonesia</span></h3>
                  </div>
                <div class="bottom-button">
                  <button type="button">Selengkapnya</button>
                </div>
            </div>
            <!--Konten 6-->
            <div class="grid-item">
              <div class="pict">
                  <img  src="0.jpg" alt="">
                </div> 
                <div class="button">
                  <button class="header-button" type="button">Esay</button>
                  <button class="header-button" type="button">Fotografi</button>
                </div>
                <div class="text-header">
                  <p class="tanggal">20 Juni - 23 Juli 2023, 23:58;19</p>
                  <img src="Eye.png" alt="">
                  <p class="numb">123</p>
                </div>
                  <div class="text-center">
                    <h3>Lomba Essay dan Fotografi<br>
                      <span>Himadippussunila</span></h3>
                  </div>
                <div class="bottom-button">
                  <button type="button">Selengkapnya</button>
                </div>
            </div>
            <!--Konten 7-->
            <div class="grid-item">
              <div class="pict">
                  <img  src="indonesia.jpg" alt="">
                </div> 
                <div class="button">
                  <button class="header-button" type="button">Fair</button>
                  <button class="header-button" type="button">Pameran</button>
                  <button class="header-button" type="button">Talkshow</button>
                  <button class="header-button" type="button">Gratis</button>
                  <button class="header-button" type="button">Buku</button>
                </div>
                <div class="text-header">
                  <p class="tanggal">21 - 24 Maret 2017, 2023, 23:58;19</p>
                  <img src="Eye.png" alt="">
                  <p class="numb">78</p>
                </div>
                  <div class="text-center">
                    <h3>Book Fair Plaza Pameran Industri<br>
                      <span>Kementrian Perindustrian</span></h3>
                  </div>
                <div class="bottom-button">
                  <button type="button">Selengkapnya</button>
                </div>
            </div>
            <!--Konten 8-->
            <div class="grid-item">
              <div class="pict">
                  <img  src="lktin.png" alt="">
                </div> 
                <div class="button">
                  <button class="header-button" type="button">Puisi</button>
                  <button class="header-button" type="button">Lomba</button>
                </div>
                <div class="text-header">
                  <p class="tanggal">1- 27 Juli 2021, 23:58;19</p>
                  <img src="Eye.png" alt="">
                  <p class="numb">78</p>
                </div>
                  <div class="text-center">
                    <h3>Lomba Cipta Karya Puisi<br>
                      <span>Universitas Sembilan Belas November</span></h3>
                  </div>
                <div class="bottom-button">
                  <button type="button">Selengkapnya</button>
                </div>
            </div>

            <!--Konten 9-->
            <div class="grid-item">
                <div class="pict">
                    <img  src="Festival litnas lomba essay 1.png" alt="">
                  </div> 
                  <div class="button">
                    <button class="header-button" type="button">Puisi</button>
                    <button class="header-button" type="button">Lomba</button>
                  </div>
                  <div class="text-header">
                    <p class="tanggal">1- 27 Juli 2021, 23:58;19</p>
                    <img src="Eye.png" alt="">
                    <p class="numb">78</p>
                  </div>
                    <div class="text-center">
                      <h3>Lomba Cipta Karya Puisi<br>
                        <span>Universitas Sembilan Belas November</span></h3>
                    </div>
                  <div class="bottom-button">
                    <button type="button">Selengkapnya</button>
                  </div>
              </div>
              <!--Konten 10-->
              <div class="grid-item">
                <div class="pict">
                    <img  src="bazar.jpg" alt="">
                  </div> 
                  <div class="button">
                    <button class="header-button" type="button">Puisi</button>
                    <button class="header-button" type="button">Lomba</button>
                  </div>
                  <div class="text-header">
                    <p class="tanggal">1- 27 Juli 2021, 23:58;19</p>
                    <img src="Eye.png" alt="">
                    <p class="numb">78</p>
                  </div>
                    <div class="text-center">
                      <h3>Lomba Cipta Karya Puisi<br>
                        <span>Universitas Sembilan Belas November</span></h3>
                    </div>
                  <div class="bottom-button">
                    <button type="button">Selengkapnya</button>
                  </div>
              </div>
              <!--Konten 11-->
              <div class="grid-item">
                <div class="pict">
                    <img  src="Seminar-Kepenulisan.jpg" alt="">
                  </div> 
                  <div class="button">
                    <button class="header-button" type="button">Puisi</button>
                    <button class="header-button" type="button">Lomba</button>
                  </div>
                  <div class="text-header">
                    <p class="tanggal">1- 27 Juli 2021, 23:58;19</p>
                    <img src="Eye.png" alt="">
                    <p class="numb">78</p>
                  </div>
                    <div class="text-center">
                      <h3>Lomba Cipta Karya Puisi<br>
                        <span>Universitas Sembilan Belas November</span></h3>
                    </div>
                  <div class="bottom-button">
                    <button type="button">Selengkapnya</button>
                  </div>
              </div>
              <!--Konten 12-->
              <div class="grid-item">
                <div class="pict">
                    <img  src="semnas.jpg" alt="">
                  </div> 
                  <div class="button">
                    <button class="header-button" type="button">Puisi</button>
                    <button class="header-button" type="button">Lomba</button>
                  </div>
                  <div class="text-header">
                    <p class="tanggal">1- 27 Juli 2021, 23:58;19</p>
                    <img src="Eye.png" alt="">
                    <p class="numb">78</p>
                  </div>
                    <div class="text-center">
                      <h3>Lomba Cipta Karya Puisi<br>
                        <span>Universitas Sembilan Belas November</span></h3>
                    </div>
                  <div class="bottom-button">
                    <button type="button">Selengkapnya</button>
                  </div>
              </div>
          </div>
    </body>
</html>

