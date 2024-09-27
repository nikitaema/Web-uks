<?php
$host = "localhost"; // Nama host database, biasanya "localhost"
$user = "root";      // Username MySQL (default: "root")
$pass = "";          // Password MySQL (kosongkan jika default)
$db = "kesehatan";   // Nama database yang sudah dibuat

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Memeriksa apakah koneksi berhasil
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}
?>
