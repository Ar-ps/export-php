<?php
require __DIR__ . '/vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Konfigurasi Dompdf
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);

$logoPath  = __DIR__ . '/assetpdf/logo.png';
$logoHttp  = 'http://localhost/export1/assetpdf/logo.png'; // ganti sesuai base url lokal
$logoBase64 = '';
if (file_exists($logoPath)) {
    $logoBase64 = 'data:image/png;base64,' . base64_encode(file_get_contents($logoPath));
} else {
    die("❌ File logo tidak ditemukan di: " . $logoPath);
}

// HTML
$html = '
<style>
    body { font-family: Arial, sans-serif; font-size: 12px; }
    h2 { text-align:center; margin-bottom:20px; }
    table { border-collapse: collapse; width:100%; margin-top:15px; }
    th, td { border:1px solid #333; padding:8px; text-align:center; }
    img { border:1px solid #ccc; padding:4px; }
</style>

<h2>Pengujian Pemanggilan Gambar di Dompdf</h2>

<table>
    <tr>
        <th>Metode</th>
        <th>Contoh Kode</th>
        <th>Hasil di PDF</th>
    </tr>
    <tr>
        <td>Base64 (✅ Paling aman)</td>
        <td><code>&lt;img src="data:image/png;base64,..."/&gt;</code></td>
        <td><img src="' . $logoBase64 . '" width="100"></td>
    </tr>
    <tr>
        <td>Path Relatif</td>
        <td><code>&lt;img src="assetpdf/logo.png"/&gt;</code></td>
        <td><img src="assetpdf/logo.png" width="100"></td>
    </tr>
    <tr>
        <td>Path Absolut</td>
        <td><code>&lt;img src="' . $logoPath . '"/&gt;</code></td>
        <td><img src="' . $logoPath . '" width="100"></td>
    </tr>
    <tr>
        <td>URL HTTP (butuh isRemoteEnabled=true)</td>
        <td><code>&lt;img src="' . $logoHttp . '"/&gt;</code></td>
        <td><img src="' . $logoHttp . '" width="100"></td>
    </tr>
</table>
';

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("test-gambar.pdf", ["Attachment" => false]);
