<?php
// Include file koneksi ke database
include('koneksi.php');

// Cek apakah form disubmit
if (isset($_POST['daftar'])) {
    // Ambil data dari form
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $keluhan = $_POST['keluhan'];
    $nama_obat = $_POST['nama_obat'];

    // Query untuk menyimpan data ke tabel `pasien`
    $sql = "INSERT INTO pasien (nama, tanggal, kelas, jam, keluhan, nama_obat) 
            VALUES ('$nama', '$tanggal', '$kelas', '$jam', '$keluhan', '$nama_obat')";

    // Eksekusi query
    if ($koneksi->query($sql) === TRUE) {
        // Dapatkan ID data yang baru saja dimasukkan
        $last_id = $koneksi->insert_id;
        // Redirect ke halaman hasil pendaftaran dengan membawa ID
        header("Location: hasil_pendaftaran.php?id=" . $last_id);
        exit;
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $koneksi->error . "</div>";
    }

    // Menutup koneksi
    $koneksi->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Tambahkan seluruh header dan style Anda di sini -->
</head>
<body>

<?php include('assets_user/navbar.php'); ?>

<div class="container">
    <div class="card">
        <div class="card-header">
            Form Pendaftaran Pasien
        </div>
        <div class="card-body">
            <!-- Form Pendaftaran Pasien -->
            <form method="POST" action="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="time" id="jam" name="jam" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama" required>
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Masukkan kelas" required>
                </div>
                <div class="form-group">
                    <label for="keluhan">Keluhan</label>
                    <textarea id="keluhan" name="keluhan" class="form-control form-control-textarea" placeholder="Masukkan keluhan" required></textarea>
                </div>
                <div class="form-group">
                    <label for="nama_obat">Nama Obat</label>
                    <input type="text" id="nama_obat" name="nama_obat" class="form-control" placeholder="Masukkan nama obat" required>
                </div>
                <button type="submit" name="daftar" class="btn btn-primary">Daftar</button>
            </form>
        </div>
    </div>
</div>

<div class="footer">
    <p>&copy; UKS SMKN 3 YK</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
