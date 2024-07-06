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
        body {
            margin: 0;
            padding: 0;
            font-family: "PT Sans", sans-serif;
            background: #f2f2f2;
            min-height: 100vh; /* Set minimum height of the body to full viewport height */
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1; /* Allow the content to take up all available vertical space */
            padding: 20px;
            /* Add additional styles for content if needed */
        }

        footer {
            background: #1a1a1a; /* Ganti warna latar belakang footer menjadi lebih gelap */
            color: #fff; /* Ganti warna teks footer menjadi putih */
            padding: 20px;
            text-align: center;
        }

        .footer-icons {
            display: flex;
            justify-content: center;
            margin-bottom: 20px; /* Increase margin to create space between icons and text */
        }

        .footer-icons a {
            margin: 10px;
            text-decoration: none; /* Hilangkan underline default pada link */
            color: #fff; /* Ganti warna teks menjadi putih */
            transition: color 0.3s ease; /* Animasi perubahan warna teks */
        }

        .footer-icons i {
            font-size: 24px; /* Atur ukuran ikon menjadi lebih besar */
        }

        /* Efek hover yang lebih halus pada ikon */
        .footer-icons a:hover {
            color: #0E41DF; /* Ganti warna ikon menjadi kuning saat hover */
        }

        .footer-icons a::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: -3px; /* Letakkan di bawah ikon */
            height: 2px;
            background-color: #fff; /* Warna garis bawah */
            transform: scaleX(0); /* Skala garis bawah menjadi 0 (tidak terlihat) saat awal */
            transition: transform 0.3s ease; /* Animasi perubahan skala */
        }

        .footer-icons a:hover::after {
            transform: scaleX(1); /* Skala garis bawah menjadi 1 (terlihat) saat mengarahkan kursor */
        }
    </style>
</head>
<body>

<footer>
    <div class="footer-icons">
        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/your-twitter-link" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/t.co/VivnoICVJe" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/hud-mus-ab-fauzi-72b5a9283/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    </div>
    <p>&copy; Bookstagram 2023.<br>Created by Hud Mus'ab Fauzi & Ulinnuhanuranisa.</p>
</footer>

</body>
</html>
