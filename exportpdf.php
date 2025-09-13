<?php
require 'config.php';
require 'fpdf/fpdf.php';

// Buat object FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Judul
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Laporan Data Siswa',0,1,'C');
$pdf->Ln(5);

// Header Tabel
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,10,'No',1,0,'C');
$pdf->Cell(60,10,'Nama',1,0,'C');
$pdf->Cell(40,10,'NIS',1,0,'C');
$pdf->Cell(40,10,'Kelas',1,0,'C');
$pdf->Cell(40,10,'Alamat',1,1,'C');

// Ambil Data dari Database
$query = $mysqli->query("SELECT id, nama, nis, kelas, alamat FROM siswa ORDER BY id ASC");
$no = 1;
$pdf->SetFont('Arial','',11);

while ($row = $query->fetch_assoc()) {
    $pdf->Cell(10,10,$no++,1,0,'C');
    $pdf->Cell(60,10,$row['nama'],1,0);
    $pdf->Cell(40,10,$row['nis'],1,0);
    $pdf->Cell(40,10,$row['kelas'],1,0);
    $pdf->Cell(40,10,$row['alamat'],1,1);
}

// Output ke browser
$pdf->Output('I', 'laporan_siswa.pdf'); // I = tampil di browser
