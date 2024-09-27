<?php
include('koneksi.php');

$obat_query = "SELECT * FROM obat";
$obat_result = mysqli_query($koneksi, $obat_query);
?>

<h2>Daftar Obat</h2>
    <tr>
        <th>Nama Obat</th>
        <th>Deskripsi</th>
        <th>Aturan Pakai</th>
    </tr>
    <?php while($obat = mysqli_fetch_assoc($obat_result)): ?>
        <tr>
            <td><?= $obat['nama_obat'] ?></td>
            <td><?= $obat['deskripsi'] ?></td>
            <td><?= $obat['aturan_pakai'] ?></td>
        </tr>
    <?php endwhile; ?>
</table>
