<?php
// Konfigurasi koneksi ke database
$host = 'localhost';
$user = 'root';      // Ganti dengan username Anda
$pass = '';      // Ganti dengan password Anda
$db   = 'kesehatan'; // Ganti dengan nama database Anda

// Membuat koneksi MySQLi
$conn = new mysqli($host, $user, $pass, $db);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


// SQL untuk membaca data
$sql = "SELECT id, nama_obat, deskripsi, stok FROM obat";

// Menjalankan query
$result = $conn->query($sql);

// Menampilkan data
if ($result->num_rows > 0) {
    // Menampilkan data dalam bentuk tabel HTML
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nama Obat</th><th>Deskripsi</th><th>Stok</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nama_obat"] . "</td>";
        echo "<td>" . $row["deskripsi"] . "</td>";
        echo "<td>" . $row["stok"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data.";
}

// Menutup koneksi
$conn->close();
?>