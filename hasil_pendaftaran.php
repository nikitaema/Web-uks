<?php
include('koneksi.php');

// Ambil ID dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Ambil data dari database berdasarkan ID
$query = "SELECT * FROM pasien WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hasil Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #8B0000; /* Warna merah gelap seperti darah */
            color: #fff;
            text-align: center;
            font-size: 1.25rem;
            padding: 1.5rem;
        }
        .card-body {
            padding: 1.5rem;
        }
        .btn-primary {
            background-color: #8B0000; /* Warna merah gelap seperti darah */
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
        }
        .btn-primary:hover {
            background-color: #660000; /* Warna merah yang lebih gelap saat di-hover */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            Hasil Pendaftaran
        </div>
        <div class="card-body">
            <?php if ($data): ?>
                <p><strong>Tanggal:</strong> <?= htmlspecialchars($data['tanggal']) ?></p>
                <p><strong>Nama:</strong> <?= htmlspecialchars($data['nama']) ?></p>
                <p><strong>Kelas:</strong> <?= htmlspecialchars($data['kelas']) ?></p>
                <p><strong>Jam:</strong> <?= htmlspecialchars($data['jam']) ?></p>
                <p><strong>Keluhan:</strong> <?= htmlspecialchars($data['keluhan']) ?></p>
                <p><strong>Nama Obat:</strong> <?= htmlspecialchars($data['nama_obat']) ?></p>
            <?php else: ?>
                <p>Data tidak ditemukan.</p>
            <?php endif; ?>
            <a href="form_pendaftaran.php" class="btn btn-primary">Kembali ke Form</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
