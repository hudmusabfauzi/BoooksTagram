<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh 3 Kolom dengan Gambar di Sebelah Kiri</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: "PT Sans", Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        /* Set style for the container to use CSS Grid */
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Adjust the minimum width */
            gap: 20px;
        }

        /* Style for each column */
        .column {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            padding: 10px;
        }

        /* Style for the book cover image */
        .column img {
            max-width: 100px;
            height: auto;
            border-radius: 5px;
            margin-right: 10px;
        }

        /* Style for book details */
        .book-details {
            font-size: 14px; /* Increase font size for better readability */
            line-height: 1.4; /* Adjust line height for better spacing between lines */
            flex-grow: 1; /* Allow book details to expand and fill available space */
        }

        h3 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 5px; /* Reduce margin bottom for better spacing */
        }

        p {
            margin: 0;
            margin-bottom: 3px; /* Reduce margin bottom for better spacing */
        }

        /* Style for the button */
        .button-container {
            display: flex;
            align-items: center;
        }

        button {
            padding: 8px 20px; /* Adjust padding for better button size */
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Kolom 1 -->
        <div class="column">
            <img src="buku1.jpg" alt="Foto Buku 1">
            <div class="book-details">
                <h3>Judul Buku 1</h3>
                <p><b>Penulis:</b> Penulis Buku 1</p>
                <p><b>Penerbit:</b> Penerbit Buku 1</p>
                <p><b>Tebal:</b> 300 halaman</p>
                <p><b>Kategori:</b> Fiksi</p>
                <div class="button-container">
                    <button>Review Buku</button>
                </div>
            </div>
        </div>

        <!-- Kolom 2 -->
        <div class="column">
            <img src="buku2.jpg" alt="Foto Buku 2">
            <div class="book-details">
                <h3>Judul Buku 2</h3>
                <p><b>Penulis:</b> Penulis Buku 2</p>
                <p><b>Penerbit:</b> Penerbit Buku 2</p>
                <p><b>Tebal:</b> 250 halaman</p>
                <p><b>Kategori:</b> Non-Fiksi</p>
                <div class="button-container">
                    <button>Review Buku</button>
                </div>
            </div>
        </div>

        <!-- Kolom 3 -->
        <div class="column">
            <img src="buku3.jpg" alt="Foto Buku 3">
            <div class="book-details">
                <h3>Judul Buku 3</h3>
                <p><b>Penulis:</b> Penulis Buku 3</p>
                <p><b>Penerbit:</b> Penerbit Buku 3</p>
                <p><b>Tebal:</b> 180 halaman</p>
                <p><b>Kategori:</b> Fiksi</p>
                <div class="button-container">
                    <button>Review Buku</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Font Awesome Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
