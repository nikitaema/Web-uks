<?php
session_start();
include('koneksi.php');



$pasien_query = "SELECT * FROM pasien";
$pasien_result = mysqli_query($koneksi, $pasien_query);
?>

<?php include('assets/navbar.php'); ?>
<h2>Daftar Pasien</h2>
<table >
    <tr>
        <th>Tanggal</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jam</th>
        <th>Keluhan</th>
        <th>Nama Obat</th>
    </tr>
    <?php while($pasien = mysqli_fetch_assoc($pasien_result)): ?>
        <tr>
            <td><?= $pasien['tanggal'] ?></td>
            <td><?= $pasien['nama'] ?></td>
            <td><?= $pasien['kelas'] ?></td>
            <td><?= $pasien['jam'] ?></td>
            <td><?= $pasien['keluhan'] ?></td>
            <td><?= $pasien['nama_obat'] ?></td>
        </tr>
    <?php endwhile; ?>
</table>
<?php

// Mengambil data pasien dari database
$pasien_query = "SELECT * FROM pasien";
$pasien_result = mysqli_query($koneksi, $pasien_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pasien - Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        h2 {
            color: #007bff;
            margin: 1rem 0;
            text-align: center;
        }
        table {
            width: 90%;
            margin: 2rem auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 0.75rem;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #e2e6ea;
        }
        .container {
            width: 90%;
            margin: 0 auto;
        }
        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }
            th, td {
                padding: 1rem;
                text-align: right;
                position: relative;
            }
            th {
                background-color: #007bff;
                color: #fff;
                text-align: center;
            }
            td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 0.5rem;
                font-weight: bold;
                text-align: left;
                white-space: nowrap;
            }
        }
    </style>

</html>
