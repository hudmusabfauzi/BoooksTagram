<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fontawesome.com/icons/eye-slash?f=classic&s=regular">
    <script>
        function openModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "block";
        }

        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }

        function sendResetLink() {
            // Logika untuk mengirim link reset kata sandi
            var email = document.getElementById("emailReset").value;
            // Lakukan pengiriman link reset sandi atau tampilkan pesan sukses di sini
            console.log("Mengirim link reset kata sandi ke: " + email);

            // Setelah mengirim link reset, tutup modal
            closeModal();
        }
    </script>
    <script>
        function goToPage() {
            window.location.href="../home/home.html";
        }
    </script>
</head>
<body>
    <div class="background-image">
        <div class="logo">
            <img src="logo.png" alt="">
        </div>
        <div class="container">
            <div class="form-container">
                <form class="login-form" method="post" action="/Login/proses_login.php">
                    <h3>Masuk</h3>
                    <h4 class="atas">Belum Punya Akun? <span><a href="../daftar/daftar.html">Daftar Sekarang</a></span></h4>
                    <div class="form-group">
                        <label for="Email" class="email">Email</label>
                        <input type="text" class="styled-input" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="password">Password</label>
                        <input type="password" class="styled-input" id="password" name="password" required>
                    </div>
                    <div class="remember-forgot">
                        <div class="form-group checkbox-group">
                            <label for="remember-me">Ingat Saya</label>
                            <input type="checkbox" class="styled-checkbox" id="remember-me" name="remember-me">
                            <h5 onclick="openModal()">Lupa Kata Sandi?</h5>
                            <div id="myModal" class="modal">
                                <div class="modal-content">
                                    <span class="close" onclick="closeModal()">&times;</span>
                                    <p> Lupa Kata Sandi? <br><br>
                                        <span>Masukkan email yang terdaftar. <br> Link reset
                                            kata sandi akan dikirim ke email.</span>
                                    </p>
                                    <input type="email" id="emailReset" placeholder="Email">
                                    <button type="button" onclick="sendResetLink()">Kirim</button>
                                </div>
                            </div>
                            <button type="submit" class="styled-button">Masuk</button>
                            <div class="container-image">
                                <div class="left-image">
                                    <img src="line.png" alt="">
                                </div>
                                <div class="center-text">
                                    <p>Atau</p>
                                </div>
                                <div class="right-image">
                                    <a href="..//Home/home_page.php"><img src="line.png" alt=""></a>
                                </div>
                            </div>
                            <div class="rectangle">
                                <div class="left-content">
                                    <a href="..//Home/home_page.php"><img src="avatop.png" alt=""></a>
                                </div>
                                <div class="center-content">
                                    <p>Lanjutkan Sebagai Anisa Hikmawati</p>
                                    <div class="link">
                                        <a href="..//Home/home_page.php">hikmaa@gmail.com</a>
                                    </div>
                                </div>
                                <div class="right-content">
                                    <a href="..//Home/home_page.php"><img src="google.png" alt=""></a>
                                </div>
                            </div>
                            <div class="text-above">
                                <p>Lapor kendala masuk ke</p>
                                <div class="logo-app">
                                    <a href="https://api.whatsapp.com/send?phone=628995475414"><img src="logo-app.png" alt=""></a>
                                </div>
                            </div>
                            <div class="text-right">
                                <a href="https://api.whatsapp.com/send?phone=628995475414"><p>08995475414 (Chat Only)</p></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
