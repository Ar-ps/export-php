<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$spreadsheet->getActiveSheet()->setCellValue('A1', 'Tes Streaming');

// Bersihkan buffer
if (ob_get_length()) ob_end_clean();
ini_set('zlib.output_compression', 'Off');

// Set header
header('Content-Description: File Transfer');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="test.xlsx"');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate, max-age=0');
header('Pragma: public');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
