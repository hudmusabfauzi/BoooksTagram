<html>
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SignIn</title>
        <link rel="stylesheet" href="dftarstyle.css">
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
        <script src="Validateform.js"></script>
        <script>
            function goToPage() {
            window.location.href="../home/home.html"
            }
        </script>
    </head>
    <body>
    <form class="login-form" method="post" action="proses_pendaftaran.php" onsubmit="return validateForm()">
        <div class="background-image">
            <div class="logo">
                <img src="logobook.png" alt="">
            </div>
            <div class="container">
                <div class="form-container">
                    <form class="login-form" onsubmit="return validateForm()">
                        <h3>Pendaftaran Akun</h3>
                        <h4 class="atas">Sudah Punya Akun? <span><a href="../loginf/Login.html">Masuk</a></span></h4>
                        <div class="form-group" >
                            <label for="Nama Lengkap" class="nama">Nama Lengkap</label>
                            <input type="text" class="styled-input" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="Email" class="email">Email</label>
                            <input type="email" class="styled-input" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="Ponsel" class="Ponsel">No. Ponsel</label>
                            <input type="tel" class="styled-input" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="password">Kata Sandi</label>
                            <input type="password" class="styled-input" id="password" name="password" required>
                        </div>
                            <h6>Minimal 8 karakter kombinasi huruf besar. huruf kecil. dan angka</h6>
                            <h5>Dengan daftar, saya menyetujui <span>Syarat & Ketentuan</span> serta
                                <span>Kebijkan Privasi</span> yang berlaku</h5>
                                <button onclick="goToPage()" type="submit" class="styled-button">Masuk</button>
                                <div class="container-image">
                                    <div class="left-image">
                                        <img src="line.png" alt="">
                                    </div>
                                    <div class="center-text">
                                        <p>Atau</p>
                                    </div>
                                    <div class="right-image">
                                        <img src="line.png" alt="">
                                    </div>
                                </div>
                               <div class="rectangle">
                                <div class="left-content">
                                    <a href="..//Home/home_page.php"><img src="Profil.jpg" alt=""></a>
                                </div>
                                <div class="center-content">
                                    <p>Lanjutkan Sebagai Anisa Hikmawati</p>
                                    <div class="link">
                                        <a href="../Home/home_page.php">hikmaa@gmail.com</a>
                                    </div>
                                </div>
                                <div class="right-content">
                                    <a href="..//Home/home_page.php"><img src="google.png" alt=""></a>
                                </div>
                               </div>
                            </form>
                            </div>
                        </div>
                </div>
            </body>
    </form>
</html>