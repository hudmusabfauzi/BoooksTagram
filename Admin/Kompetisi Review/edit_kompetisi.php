
<!DOCTYPE html>
<html>
<head>
    <!-- Hubungkan CSS Bootstrap dan Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Edit Kompetisi</title>
    <style>

     /* Gaya khusus untuk elemen unggah gambar */
     .upload-box {
            border: 2px dashed #ccc;
            padding: 20px;
            text-align: center;
            background-color: #f8f9fa;
            transition: border-color 0.3s ease-in-out;
        }    
            .upload-box p {
        margin: 10px 0;
    }

    .upload-box img {
        max-width: 100%;
        max-height: 300px;
        border: 1px dashed #ccc;
        padding: 10px;
    }

    /* Gaya untuk ikon angka berbentuk lingkaran biru */
    .circle-icon {
        display: inline-block;
        width: 30px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        border-radius: 50%;
        background-color: #007bff;
        color: #fff;
        font-size: 18px;
        margin-right: 5px;
    }

    /* Gaya untuk tautan "pilih file" */
    .choose-file-link {
        color: #007bff;
        text-decoration: none;
        cursor: pointer;
        transition: color 0.3s ease-in-out;
    }

    .choose-file-link:hover {
        color: #0056b3;
    }
</style>

    </style>
</head>

<body>
    <div class="container">
        <h3>Edit Kompetisi</h3>
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

            // Memeriksa apakah ada data yang dikirimkan melalui URL
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        // Mengambil data kompetisi berdasarkan ID yang diberikan
        $sql = "SELECT * FROM kompetisi WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $kompetisi = mysqli_fetch_assoc($result);

        // Memeriksa apakah data kompetisi ditemukan
        if (!$kompetisi) {
            echo "Data kompetisi tidak ditemukan.";
            exit;
        }
    } else {
        echo "ID kompetisi tidak diberikan.";
        exit;
    }
    ?>
    <!-- Form untuk edit data kompetisi -->
    <form enctype="multipart/form-data" action="proses_edit_kompetisi.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $kompetisi['id']; ?>">
        <div class="row">
            <!-- Kolom 2 -->
            <div class="col">
                <h5><span class="circle-icon">2</span>Isi Deskripsi Kompetisi / Event</h5>
                <!-- Form untuk nama kompetisi / event -->
                <div class="form-group">
                    <label for="namaKompetisi"><b>Nama Kompetisi / Event</b></label>
                    <input type="text" class="form-control" id="namaKompetisi"
                        placeholder="LKTIN, COMFEST, dll." name="namaKompetisi" value="<?php echo $kompetisi['nama_kompetisi']; ?>" required>
                </div>
                <!-- Form untuk nama penyelenggara -->
                <div class="form-group">
                    <label for="penyelenggara"><b>Penyelenggara Kompetisi / Event</b></label>
                    <input type="text" class="form-control" id="penyelenggara"
                        placeholder="Himpunan Mahasiswa Sastra, HMPS Unsiq, dll." name="penyelenggara" value="<?php echo $kompetisi['penyelenggara']; ?>" required>
                </div>

                <!-- Form untuk link pendaftaran dan link narahubung -->
                <div class="form-group">
                    <label for="linkPendaftaran"><b>Link Pendaftaran Kompetisi / Event</b></label>
                    <input type="text" class="form-control" id="linkPendaftaran" name="linkPendaftaran"
                        placeholder="unsiq.id/lktin-2023 dll." value="<?php echo $kompetisi['link_pendaftaran']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="linkNarahubung"><b>Link Narahubung</b></label>
                    <p class="text-muted">Link kontak panitia (Instagram/WhatsApp/Telegram)</p>
                    <input type="text" class="form-control" id="linkNarahubung" name="linkNarahubung"
                        placeholder="wa.me/6288995475414" value="<?php echo $kompetisi['link_narahubung']; ?>" required>
                </div>
                <!-- Form untuk deskripsi kompetisi / event -->
                <div class="form-group">
                    <label for="deskripsiKompetisi"><b>Deskripsi Kompetisi / Event</b></label>
                    <textarea class="form-control" id="deskripsiKompetisi" name="deskripsiKompetisi" rows="4"
                        placeholder="Masukkan Deskripsi Kompetisi / Event"><?php echo $kompetisi['deskripsi_kompetisi']; ?></textarea>
                </div>
            </div>

            <!-- Kolom 3 -->
            <div class="col-md-4">
                      <!-- Form untuk tingkat kompetisi / event -->
                      <div class="form-group">
                    <label for="tingkatKompetisi"><b>Tingkat Kompetisi / Event</b></label><br>
                    <div class="form-check form-check-inline">
                        <!-- Radio button untuk tingkat internasional -->
                        <input class="form-check-input" type="radio" name="tingkatKompetisi" id="internasional"
                            value="Internasional" <?php if ($kompetisi['tingkat_kompetisi'] === "Internasional") echo "checked"; ?>>
                        <label class="form-check-label" for="internasional">
                            Internasional
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <!-- Radio button untuk tingkat nasional -->
                        <input class="form-check-input" type="radio" name="tingkatKompetisi" id="nasional"
                            value="Nasional" <?php if ($kompetisi['tingkat_kompetisi'] === "Nasional") echo "checked"; ?>>
                        <label class="form-check-label" for="nasional">
                            Nasional
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <!-- Radio button untuk tingkat regional -->
                        <input class="form-check-input" type="radio" name="tingkatKompetisi" id="regional"
                            value="Regional" <?php if ($kompetisi['tingkat_kompetisi'] === "Regional") echo "checked"; ?>>
                        <label class="form-check-label" for="regional">
                            Regional
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <!-- Radio button untuk tingkat lokal -->
                        <input class="form-check-input" type="radio" name="tingkatKompetisi" id="lokal"
                            value="Lokal" <?php if ($kompetisi['tingkat_kompetisi'] === "Lokal") echo "checked"; ?>>
                        <label class="form-check-label" for="lokal">
                            Lokal
                        </label>
                    </div>
                </div>

                <!-- Form untuk biaya pendaftaran kompetisi / event -->
                <div class="form-group">
                    <label for="biayaPendaftaran"><b>Biaya Pendaftaran Kompetisi / Event</b></label><br>
                    <div class="form-check form-check-inline">
                        <!-- Radio button untuk biaya gratis -->
                        <input class="form-check-input" type="radio" name="biayaPendaftaran" id="gratis"
                            value="Gratis" <?php if ($kompetisi['biaya_pendaftaran'] === "Gratis") echo "checked"; ?> required>
                        <label class="form-check-label" for="gratis">
                            Gratis
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <!-- Radio button untuk biaya berbayar -->
                        <input class="form-check-input" type="radio" name="biayaPendaftaran" id="berbayar"
                            value="Berbayar" <?php if ($kompetisi['biaya_pendaftaran'] === "Berbayar") echo "checked"; ?> required>
                        <label class="form-check-label" for="berbayar">
                            Berbayar
                        </label>
                    </div>
                </div>
                
                <!-- Konten kolom 3 -->
                <h5><span class="circle-icon">3</span>Survey Pengunggahan</h5>

                <!-- Form Pilih Sumber -->
                <div class="form-group">
                    <label for="sumber">Darimana mengetahui lomba?</label>
                    <select class="form-control" id="sumber" name="sumber" required>
                        <option value="" disabled selected>Pilih sumber</option>
                        <option value="Media Sosial" <?php if ($kompetisi['sumber'] === "Media Sosial") echo "selected"; ?>>Media Sosial</option>
                        <option value="Website" <?php if ($kompetisi['sumber'] === "Website") echo "selected"; ?>>Website</option>
                        <option value="Teman" <?php if ($kompetisi['sumber'] === "Teman") echo "selected"; ?>>Teman</option>
                        <option value="Lainnya" <?php if ($kompetisi['sumber'] === "Lainnya") echo "selected"; ?>>Lainnya</option>
                    </select>
                </div>

                <!-- Tombol "Simpan Perubahan" -->
                <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
            </div>
        </div>
    </form>
</div>
<!-- Hubungkan Bootstrap JS (opsional, untuk fitur-fitur interaktif) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    const uploadBox = document.getElementById('uploadBox');

    // Fungsi untuk mencegah default behavior saat menggandakan gambar
    function preventDefaultHandler(event) {
        event.preventDefault();
        event.stopPropagation();
    }

    // Fungsi untuk menangani event saat drag over area upload
    function dragOverHandler(event) {
        preventDefaultHandler(event);
        uploadBox.classList.add('dragover');
    }

    // Fungsi untuk menangani event saat drag leave dari area upload
    function dragLeaveHandler(event) {
        preventDefaultHandler(event);
        uploadBox.classList.remove('dragover');
    }

    // Fungsi untuk menangani event saat drop gambar ke area upload
    function dropHandler(event) {
        preventDefaultHandler(event);
        uploadBox.classList.remove('dragover');

        // Mendapatkan data gambar yang diunggah
        const file = event.dataTransfer.files[0];

        // Validasi apakah gambar telah dipilih dan tipe file adalah gambar
        if (!file || !file.type.startsWith('image/')) {
            alert('Silakan pilih gambar terlebih dahulu.');
            return;
        }

        // Menampilkan preview gambar yang dipilih
        const img = document.getElementById('preview');
        const reader = new FileReader();
        reader.onload = function (e) {
            img.src = e.target.result;
        };
        reader.readAsDataURL(file);

        // Simpan data gambar ke dalam variabel formData untuk dikirim ke server
        const formData = new FormData();
        formData.append('poster_path', file);
        formData.append('namaKompetisi', document.getElementById('namaKompetisi').value);
        formData.append('penyelenggara', document.getElementById('penyelenggara').value);
        // Sisipkan kode untuk data lain yang ingin disimpan ke database

        // Panggil fungsi unggahKompetisi untuk mengirim data ke server
        unggahKompetisi(formData);
    }

    // Fungsi untuk mengunggah kompetisi ke server
    function unggahKompetisi(formData) {
        // Menggunakan fetch API untuk mengirim data ke server
        fetch("upload_kompetisi.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(message => {
            alert(message); // Menampilkan pesan hasil dari server
        })
        .catch(error => {
            console.error("Error:", error);
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        // Memasukkan fungsi drag and drop ke dalam event listener
        uploadBox.addEventListener('drop', dropHandler);
        uploadBox.addEventListener('dragover', dragOverHandler);
        uploadBox.addEventListener('dragleave', dragLeaveHandler);
    });
</script>

</body>

</html>
