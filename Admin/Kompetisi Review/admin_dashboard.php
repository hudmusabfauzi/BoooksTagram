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

        th {
            white-space: nowrap;
        }

        .aksi-buttons {
            display: flex;
            justify-content: center;
        }

        .aksi-buttons a {
            margin-right: 5px;
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
                <a class="nav-link" href="../Admin Review/admin_reviews.php">
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
    <div class="container">
        <h3 class="my-4">Data Kompetisi</h3>
        <!-- Tombol untuk tambah data kompetisi -->
        <a href="tambah_kompetisi.php" class="btn btn-primary mb-3">Tambah Kompetisi</a>
        <!-- Tabel untuk menampilkan data kompetisi -->
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Kompetisi</th>
                        <th>Penyelenggara</th>
                        <th>Tingkat</th>
                        <th>Biaya Pendaftaran</th>
                        <th>Deadline</th>
                        <th>Link Pendaftaran</th>
                        <th>Link Narahubung</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Koneksi ke database
                    $host = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "bookstagram";
                    $conn = mysqli_connect($host, $username, $password, $database);
                    if (!$conn) {
                        die("Koneksi gagal: " . mysqli_connect_error());
                    }

                    // Fungsi untuk mengambil data kompetisi dari tabel "kompetisi"
                    function getKompetisiData()
                    {
                        global $conn;
                        $sql = "SELECT * FROM kompetisi";
                        $result = mysqli_query($conn, $sql);
                        $data = array();
                        while ($row = mysqli_fetch_assoc($result)) {
                            $data[] = $row;
                        }
                        return $data;
                    }

                    // Panggil fungsi untuk mendapatkan data kompetisi
                    $dataKompetisi = getKompetisiData();

                    // Looping untuk menampilkan data kompetisi dalam tabel
                    foreach ($dataKompetisi as $kompetisi) {
                        echo "<tr>";
                        echo "<td>" . $kompetisi['id'] . "</td>";
                        echo "<td>" . $kompetisi['nama_kompetisi'] . "</td>";
                        echo "<td>" . $kompetisi['penyelenggara'] . "</td>";
                        echo "<td>" . $kompetisi['tingkat_kompetisi'] . "</td>";
                        echo "<td>" . $kompetisi['biaya_pendaftaran'] . "</td>";
                        echo "<td>" . $kompetisi['tanggal_deadline'] . " " . $kompetisi['waktu_deadline'] . "</td>";
                        echo "<td>" . $kompetisi['link_pendaftaran'] . "</td>";
                        echo "<td>" . $kompetisi['link_narahubung'] . "</td>";
                        echo "<td class='text-center aksi-buttons'>
                                <a href='edit_kompetisi.php?id=" . $kompetisi['id'] . "' class='btn btn-info btn-sm'>Edit</a>
                                <a href='hapus_kompetisi.php?id=" . $kompetisi['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus kompetisi ini?\")'>Hapus</a>
                              </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Hubungkan Bootstrap JS (opsional, untuk fitur-fitur interaktif) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    
</body>
</html>
