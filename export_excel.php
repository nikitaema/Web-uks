<?php
include('koneksi.php');
require 'PHPExcel.php';

$query = "SELECT * FROM pasien";
$result = mysqli_query($koneksi, $query);

$excel = new PHPExcel();
$excel->setActiveSheetIndex(0);

// Set Header
$excel->getActiveSheet()->setCellValue('A1', 'Nama');
$excel->getActiveSheet()->setCellValue('B1', 'Tanggal');
$excel->getActiveSheet()->setCellValue('C1', 'Kelas');
$excel->getActiveSheet()->setCellValue('D1', 'Jam');
$excel->getActiveSheet()->setCellValue('E1', 'Keluhan');
$excel->getActiveSheet()->setCellValue('F1', 'Nama Obat');

$row = 2; // Start from second row
while($data = mysqli_fetch_assoc($result)) {
    $excel->getActiveSheet()->setCellValue('A'.$row, $data['nama']);
    $excel->getActiveSheet()->setCellValue('B'.$row, $data['tanggal']);
    $excel->getActiveSheet()->setCellValue('C'.$row, $data['kelas']);
    $excel->getActiveSheet()->setCellValue('D'.$row, $data['jam']);
    $excel->getActiveSheet()->setCellValue('E'.$row, $data['keluhan']);
    $excel->getActiveSheet()->setCellValue('F'.$row, $data['nama_obat']);
    $row++;
}

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="daftar_pasien.xls"');
header('Cache-Control: max-age=0');

$writer = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
$writer->save('php://output');
?>
