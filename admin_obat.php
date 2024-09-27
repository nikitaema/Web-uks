<?php
session_start();
include('koneksi.php');
include('assets/head.php');

// Menambah obat
if (isset($_POST['tambah'])) {
    $nama_obat = $_POST['nama_obat'];
    $deskripsi = $_POST['deskripsi'];
    $aturan_pakai = $_POST['aturan_pakai'];

    $query = "INSERT INTO obat (nama_obat, deskripsi, aturan_pakai) VALUES ('$nama_obat', '$deskripsi', '$aturan_pakai')";
    mysqli_query($koneksi, $query);
}

// Menghapus obat
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = "DELETE FROM obat WHERE id=$id";
    mysqli_query($koneksi, $query);
}

// Menampilkan daftar obat
$obat_query = "SELECT * FROM obat";
$obat_result = mysqli_query($koneksi, $obat_query);
?>

<?php include('assets/navbar.php'); ?>

<div class="container my-5">
    <!-- Daftar Obat Card -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Daftar Obat</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-custom">
                    <thead>
                        <tr>
                            <th>Nama Obat</th>
                            <th>Deskripsi</th>
                            <th>Aturan Pakai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($obat = mysqli_fetch_assoc($obat_result)): ?>
                            <tr>
                                <td><?= htmlspecialchars($obat['nama_obat']) ?></td>
                                <td><?= htmlspecialchars($obat['deskripsi']) ?></td>
                                <td class="text-center"><?= htmlspecialchars($obat['aturan_pakai']) ?></td>
                                <td class="text-center">
                                    <a href="admin_obat.php?hapus=<?= $obat['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Tambah Obat Card -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h3 class="card-title">Tambah Obat</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="nama_obat" class="form-label">Nama Obat</label>
                            <input type="text" class="form-control" id="nama_obat" name="nama_obat" required>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="aturan_pakai" class="form-label">Aturan Pakai</label>
                            <input type="text" class="form-control" id="aturan_pakai" name="aturan_pakai" required>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-success">Tambah Obat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        background: url('https://png.pngtree.com/background/20211217/original/pngtree-health-care-abstract-light-effect-icon-decoration-picture-image_1591329.jpg') no-repeat center center fixed;
        background-size: cover;
        color: #333;
        margin: 0;
        padding: 0;
    }
    .container {
        margin-top: 50px;
    }
    .card {
        border-radius: 10px;
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }
    .card-header {
        background-color: #28a745; /* Green color for healthcare theme */
        color: #fff;
        text-align: center;
        font-size: 1.25rem;
        padding: 1rem;
        border-radius: 10px 10px 0 0;
    }
    .card-header.bg-primary {
        background-color: #007bff; /* Blue color for listing */
    }
    .table-custom {
        border-collapse: separate;
        border-spacing: 0;
    }
    .table-custom th, .table-custom td {
        border: 1px solid #dee2e6;
        padding: 0.75rem;
        vertical-align: middle;
    }
    .table-custom thead th {
        background-color: #007bff; /* Blue color for table headers */
        color: #fff;
        text-align: center;
        font-weight: bold;
    }
    .table-custom tbody tr {
        transition: background-color 0.2s ease;
    }
    .table-custom tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .table-custom tbody tr:hover {
        background-color: #e9ecef;
    }
    .table-custom td {
        text-align: center;
    }
    .table-responsive {
        margin-bottom: 1.5rem;
    }
    .btn-success {
        background-color: #28a745; /* Green color */
        border: none;
        transition: background-color 0.3s;
    }
    .btn-success:hover {
        background-color: #218838; /* Darker green */
    }
    .btn-danger {
        background-color: #dc3545; /* Red color */
        border: none;
        transition: background-color 0.3s;
    }
    .btn-danger:hover {
        background-color: #c82333; /* Darker red */
    }
</style>
