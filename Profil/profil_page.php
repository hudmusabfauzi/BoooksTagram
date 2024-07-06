<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profil</title>
        <link rel="stylesheet" href="style.css">
      </head>
    <body>

      <div class="box">
        <div class="rectangle-top">
        <img src="smapul.png" alt="">
        </div>
        <div class="rectangle-topava">
          <img src="avatop.png" alt="">
        </div>
        <div class="right-contenttop">
          <h4>Annisa Hikmawati <br>
          <span>@nisaa11</span>
          </h4>
          <p>Membaca adalah jalan menuju pengetahuan yang <br> tak terbatas.
            Setiap halaman membawa pelajaran baru, <br> memperluas wawasan 
            tentang dunia dan manusia.</p>
        </div>
      </div>
      <div class="right-container">
        <p>175 <span>Mengikuti</span></p>
      </div>
      <div class="right-container-left">
        <p>275 <span>Pengikut</span></p>
      </div>
      <div class="button-right">
        <button class="styled-class">Edit Profil</button>
      </div>
      <div class="nav-body">
        <a href="halaman profil.html">Review</a>
        <a href="Suka.html">Suka</a>
        <a href="Disimpan.html">Disimpan</a>
      </div>
      <!--Bagian 1-->
      <div class="box-2">
        <section id="Review">
          <div class="top-content">
            <img src="avatop.png" alt="">
            <h4>Anisa Hikmawati <br>
            <span>@nisaa11</span>
            </h4>
            <p>18 Jam yang lalu</p>
          </div>
          <div class="content-right">
            <img src="Biografi gus dur.png" alt="">
          </div>
          <div class="left-content">
            <h4>Biografi Gus Dur</h4>
            <p>  Penulis   : Greg Barton <br>
              Penerbit  : IRCiSoD <br>
              Tebal     : 178 Halaman <br>
              Kategori  : Non Fiksi</p>
            </div>
            <div class="rating">
              <p>Rating</p>
              <img src="rating.png" alt="">
            </div>        
            <div class="conten-rightprof">
              <h4>Review : <br>
                <span>Buku ini memulai perjalanan Gus Dur sejak masa kecilnya,
                  menggambarkan latar belakang <br>
                  keluarganya yang terhormat dan pengaruh dari 
                  ayahnya, Kyai Hasyim Asy'ari,
                   pendiri <br>
                   Nahdlatul Ulama.
                   Buku ini kemudian mengikuti perjalanan Gus Dur dalam dunia <br>
                    pesantren, aktivisme 
                   sosial, hingga karir politiknya sebagai Presiden Indonesia pada tahun 1999.
                </span>
              </h4>
            </div>
        </section>
      </div>
      <div class="card-right">
        <div class="header">
          <p>Rekomendasi Untuk Kamu</p>
        </div>
        <div class="card">
        </div>
      </div>
      <div class="card-bottom">
        <div class="header">
          <p>Reviewer untuk diikuti</p>
        </div>
        <div class="card">
          <!--gambar1-->
          <div class="user1">
            <img src="avaadit.png" alt="">
            <h6>Adityadika <br>
            <span>@adity33</span>
            </h6>
            <p>Silence is the powerful scream</p>
            <button type="button">Ikuti</button>
          </div>
          <!--gambar2-->
            <div class="user2">
              <img src="avanazwa.png" alt="">
              <h6>NazwaAulia <br>
                <span>@nazwalia23</span>
              </h6>
              <p>Dunia adalah novelku yang belum <br>selesai | Pecinta musik dan pengembara</p>
              <button type="button">Ikuti</button>
            </div>
          <!--gambar3-->
          <div class="user3">
            <img src="avanaisa.png" alt="">
            <h6>NaisaAlifia<br>
            <span>@akunay</span>
          </h6>
          <p>Long life learner</p>
          <button type="button">Ikuti</button>
          </div>
        </div>
      </div>
      <!--Bagian 2-->

      <!--Bagian 3-->
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          // Menggulir halaman ke section yang sesuai saat link di klik
          document.querySelectorAll("nav a").forEach(link => {
            link.addEventListener("click", function(event) {
              event.preventDefault();
              const targetSection = document.querySelector(link.getAttribute("href"));
              targetSection.scrollIntoView({ behavior: "smooth" });
            });
          });
        });
      </script>
    </body>
</html>