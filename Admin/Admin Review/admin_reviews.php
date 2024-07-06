<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Admin - Kelola Review Buku</title>

    <style>
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 215px;
            background-color: #262626;
            padding-top: 20px;
            overflow-x: hidden;
            transition: 0.2s;
        }

        .sidebar-header {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 20px;
        }

        .sidebar-logo {
            width: 30px;
            height: 23px;
            margin-right: 10px;
        }

        .logo {
            width: 150px;
            height: 30px;
            margin-right: 10px;
        }

        .sidebar-title {
            color: #fff;
            font-size: 18px;
        }

        .nav-item {
            margin-bottom: 15px;
        }

        .nav-link {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            transition: 0.2s;
        }

        .nav-link i {
            margin-right: 10px;
        }

        .nav-link:hover {
            background-color: #444;
        }

        /* Optional: Add some animation on hover */
        .nav-link i {
            transition: 0.2s;
        }

        .nav-link:hover i {
            transform: rotate(360deg);
        }

        /* Adjust body padding to make space for sidebar */
        body {
            padding-left: 215px;
        }

        /* Optional: Adjust footer spacing */
        .footer {
            margin-left: 215px;
        }

        /* Navbar */
        .navbar {
            background-color: #262626;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .navbar-menu {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar-item {
            margin-left: 20px;
        }

        .navbar-link {
            color: #fff;
            text-decoration: none;
            padding: 5px;
            display: flex;
            align-items: center;
            transition: 0.2s;
        }

        .navbar-link i {
            margin-right: 5px;
        }

        .navbar-link:hover {
            background-color: #444;
        }

    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="logo.png" alt="Logo" class="logo">
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="../Admin Review/Home.php">
                    <i class="fas fa-home"></i>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_reviews.php">
                    <i class="fas fa-book"></i>
                    Review Buku
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Kompetisi Review/admin_dashboard.php">
                    <i class="fas fa-trophy"></i>
                    Kompetisi & Event
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="datakategori.php">
                    <i class="fas fa-tags"></i>
                    Kategori
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="datarekomendasi.php">
                    <i class="fas fa-thumbs-up"></i>
                    Rekomendasi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="notifikasi.php">
                    <i class="fas fa-bell"></i>
                    Notifikasi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pengaturan">
                    <i class="fas fa-cog"></i>
                    Pengaturan
                </a>
            </li>
        </ul>
    </div>
    
       <!-- Navbar -->
       <div class="navbar">
        <ul class="navbar-menu">
            <li class="navbar-item">
                <a class="navbar-link" href="#">
                    <i class="fas fa-user"></i>
                </a>
            </li>
            <li class="navbar-item">
                <a class="navbar-link" href="#">
                    <i class="fas fa-bell"></i>
                </a>
            </li>
        </ul>
    </div>

    <div class="container mt-4">
        <h2>Kelola Review Buku</h2>
        <hr>

        <!-- Tombol untuk menambahkan review baru -->
        <a href="tambah_review.php" class="btn btn-primary mb-3">Tambah Review Baru</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul Buku</th>
                    <th>Penerbit</th>
                    <th>Rating</th>
                    <th>Aksi</th>
                </tr>
            </thead>
                <?php
                // Koneksi ke database
                $host = "localhost"; // Ganti dengan host database Anda
                $username = "root"; // Ganti dengan username database Anda
                $password = ""; // Ganti dengan kata sandi database Anda
                $dbname = "bookstagram"; // Ganti dengan nama database Anda

                // Buat koneksi ke database
                $conn = new mysqli($host, $username, $password, $dbname);

                // Periksa apakah koneksi berhasil
                if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }

                // Query untuk mengambil semua data review buku
                $sql = "SELECT id, judul, penerbit, rating FROM reviews";

                // Eksekusi query dan simpan hasilnya dalam $result
                $result = $conn->query($sql);

                // Cek apakah ada data yang diambil dari database
                if ($result->num_rows > 0) {
                    // Tampilkan data ke halaman admin
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["judul"] . "</td>";
                        echo "<td>" . $row["penerbit"] . "</td>";
                        echo "<td>" . $row["rating"] . "</td>";
                        echo "<td>";
                        echo '<a href="edit_review.php?id=' . $row["id"] . '" class="btn btn-info btn-sm mr-2">Edit</a>';
                        echo '<a href="hapus_review.php?id=' . $row["id"] . '" class="btn btn-danger btn-sm">Hapus</a>';
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Tidak ada data review buku.</td></tr>";
                }

                // Tutup koneksi ke database
                $conn->close();
                ?>
        </table>
    </div>

    <!-- Script untuk Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
