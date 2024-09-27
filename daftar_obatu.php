<?php
session_start();
include('koneksi.php');
include('assets_user/head.php');

$obat_query = "SELECT * FROM obat";
$obat_result = mysqli_query($koneksi, $obat_query);
?>

<?php include('assets_user/navbar.php'); ?>

<div class="container my-5">
    <div class="table-responsive">
        <table class="table table-hover table-custom">
            <thead>
                <tr>
                    <th>Nama Obat</th>
                    <th>Deskripsi</th>
                    <th>Aturan Pakai</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($obat = mysqli_fetch_assoc($obat_result)): ?>
                    <tr>
                        <td><?= htmlspecialchars($obat['nama_obat']) ?></td>
                        <td><?= htmlspecialchars($obat['deskripsi']) ?></td>
                        <td class="text-center"><?= htmlspecialchars($obat['aturan_pakai']) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        background: url('https://media.istockphoto.com/id/1414885184/id/vektor/latar-belakang-merah-abstrak.jpg?s=170667a&w=0&k=20&c=DuE42qgDGpLnTC7XCKs3arYZDfAZ1GzB4jlkq2e_V1M=') no-repeat center center fixed;
        background-size: cover;
        color: #333;
        margin: 0;
        padding: 0;
    }
    .container {
        margin-top: 50px;
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
        background-color: #8B0000; /* Dark red for table headers */
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
</style>
