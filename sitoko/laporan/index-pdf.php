<?php

require('../plugin/fpdf/fpdf.php');
$pdf = new FPDF('P', 'mm', 'Letter');

$pdf->AddPage();

$pdf->SetFont('Times', 'B', 16);
$pdf->Cell(0, 7, 'LAPORAN PDF TRANSAKSI KASIR', 0, 1, 'C');

$pdf->Cell(20, 7, '', 0, 1);

$pdf->SetFont('Times', 'B', 10);

$pdf->Cell(8, 6, 'No', 1, 0, 'C');
$pdf->Cell(50, 6, 'Nama Barang', 1, 0, 'C');
$pdf->Cell(30, 6, 'Total Harga', 1, 0, 'C');
$pdf->Cell(30, 6, 'Jumlah Dibayar', 1, 0, 'C');
$pdf->Cell(50, 6, 'Kembali', 1, 0, 'C');


$pdf->SetFont('Times', '', 10);

//Membuat Koneksi ke database sitoko
include('../koneksi.php');

$no = 1;
$jk = '';
//Query untuk mengambil data mahasiswa pada tabel mahasiswa
$hasil = mysqli_query($connection, "SELECT * FROM `transaksi` order by id asc");
while ($data = mysqli_fetch_array($hasil)) {
    $pdf->Cell(8, 6, $no, 1, 0);
    $pdf->Cell(50, 6, $data['nama_barang'], 1, 0);
    $pdf->Cell(30, 6, $data['total_harga'], 1, 0);
    $pdf->Cell(30, 6, $data['jumlah_dibayar'], 1, 0);
    $pdf->Cell(30, 6, $data['kembali'], 1, 1);
    $no++;
}

$pdf->Output();
