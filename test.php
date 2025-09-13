<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);

$html = '
<style>
    body { font-family: Arial, sans-serif; font-size: 11px; }
    h2, h3 { text-align: center; margin: 0; }
    p { margin: 2px 0; }
    th, td { padding: 4px; text-align: center; }
    .left { text-align: left; }
    .page-break { page-break-before: always; }
</style>

<h2>LAPORAN HASIL BELAJAR SISWA</h2>
<h3>SEKOLAH TAHFIZH PLUS KHOIRU UMMAH</h3>
<p style="text-align:center;">Jl. Mengger Hilir No. 73 RT 01 RW 04 Desa Sukapura, Kec. Dayeuh Kolot, Kab. Bandung</p>

<table cellspacing="0" cellpadding="4" width="100%" style="border:none;">
   <tr>
    <td class="left" width="20%">Nama Siswa :</td>
    <td class="left" width="30%">#REF!</td>
    <td class="left" width="20%">Tahun Pelajaran :</td>
    <td class="left" width="30%">#REF!</td>
  </tr>
  <tr>
    <td class="left">No. Induk Siswa :</td>
    <td class="left">#REF!</td>
    <td class="left">Kelas / Semester :</td>
    <td class="left">#REF!</td>
  </tr>
</table>

<h4>A. PENILAIAN MATA PELAJARAN DASAR</h4>

<!-- Tabel Tahfizh -->
<table border="1" frame="box" rules="all" cellspacing="0" cellpadding="4" width="100%">
  <tr>
    <th>No</th><th>Mata Pelajaran</th><th>KKM</th>
    <th colspan="2">Kuantitas</th>
    <th colspan="2">Kualitas</th>
    <th colspan="2">Kecepatan</th>
    <th colspan="2">Minat</th>
    <th colspan="2">Proses</th>
  </tr>
  <tr>
    <td>1</td>
    <td class="left">Tahfizhul Qur\'an</td>
    <td>71</td>
    <td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
  </tr>
</table>

<br>

<!-- Tabel Tahsin -->
<table border="1" frame="box" rules="all" cellspacing="0" cellpadding="4" width="100%">
  <tr>
    <th>No</th><th>Mata Pelajaran</th><th>KKM</th>
    <th colspan="2">Capaian</th>
    <th colspan="2">Fashohah</th>
    <th colspan="2">Tartil</th>
    <th colspan="2">Minat</th>
    <th colspan="2">Proses</th>
  </tr>
  <tr>
    <td>2</td>
    <td class="left">Tahsinul Qur\'an</td>
    <td>71</td>
    <td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
  </tr>
</table>

<br>

<!-- Tabel Bahasa -->
<table border="1" frame="box" rules="all" cellspacing="0" cellpadding="4" width="100%">
  <tr>
    <th>No</th><th>Mata Pelajaran</th><th>KKM</th>
    <th colspan="2">Pengetahuan</th>
    <th colspan="2">Pemahaman</th>
    <th colspan="2">Keahlian</th>
    <th colspan="2">Minat</th>
    <th colspan="2">Proses</th>
  </tr>
  <tr>
    <td>3</td>
    <td class="left">Bahasa Arab</td>
    <td>71</td>
    <td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
  </tr>
  <tr>
    <td>4</td>
    <td class="left">Bahasa Indonesia</td>
    <td>71</td>
    <td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
  </tr>
</table>

<h4>B. PENILAIAN MATA PELAJARAN INTI</h4>
<table border="1" frame="box" rules="all" cellspacing="0" cellpadding="4" width="100%">
  <tr>
    <th>No</th><th>Mata Pelajaran</th><th>KKM</th>
    <th colspan="2">Pengetahuan</th><th colspan="2">Pemahaman</th>
    <th colspan="2">Keahlian</th><th colspan="2">Minat</th><th colspan="2">Proses</th>
  </tr>
  <tr>
    <td>1</td><td class="left">Tsaqofah Islam (PAI)</td><td>71</td>
    <td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
  </tr>
  <tr>
    <td>2</td><td class="left">Adab</td><td>71</td>
    <td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td>
    <td>#REF!</td><td>#REF!</td>
  </tr>
</table>

<h4>C. PENILAIAN MATA PELAJARAN PENUNJANG</h4>
<table border="1" frame="box" rules="all" cellspacing="0" cellpadding="4" width="100%">
  <tr>
    <th>No</th><th>Mata Pelajaran</th><th>KKM</th>
    <th colspan="2">Pengetahuan</th><th colspan="2">Pemahaman</th>
    <th colspan="2">Keahlian</th><th colspan="2">Minat</th><th colspan="2">Proses</th>
  </tr>
  <tr><td>1</td><td class="left">Matematika</td><td>71</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>2</td><td class="left">Sains (IPA)</td><td>71</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>3</td><td class="left">Geografi (IPS-PKn)</td><td>71</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>4</td><td class="left">Bahasa Inggris</td><td>71</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>5</td><td class="left">Olahraga/Senam</td><td>71</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td></tr>
</table>

<h4>D. KEGIATAN EKSTRAKURIKULER</h4>
<table border="1" frame="box" rules="all" cellspacing="0" cellpadding="4" width="100%">
  <tr>
    <th>No</th><th>Mata Pelajaran</th><th>KKM</th>
    <th colspan="2">Kreativitas/Inovasi</th><th colspan="2">Kesungguhan</th><th colspan="2">Minat</th>
  </tr>
  <tr><td>1</td><td class="left">Berenang</td><td>71</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>2</td><td class="left">Memanah</td><td>71</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>3</td><td class="left">Rihlah</td><td>71</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>4</td><td class="left">#REF!</td><td>71</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td></tr>
</table>

<div class="page-break"></div>

<h4>E. SIKAP DAN PERILAKU SISWA</h4>
<table border="1" frame="box" rules="all" cellspacing="0" cellpadding="4" width="100%">
  <tr>
    <th rowspan="2">No.</th>
    <th rowspan="2">Sikap</th>
    <th colspan="2">Penilaian</th>
  </tr>
  <tr>
    <th>Angka</th>
    <th>Huruf</th>
  </tr>
  <tr><td>1</td><td class="left">Melaksanakan Ketaatan Kepada Allah dan Rasul-Nya</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>2</td><td class="left">Melaksanakan Ketaatan Kepada Orangtua</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>3</td><td class="left">Menghormati Guru</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>4</td><td class="left">Menunjukkan Kepercayaan diri</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>5</td><td class="left">Menunjukkan Kemandirian</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>6</td><td class="left">Menunjukkan Kedisiplinan</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>7</td><td class="left">Menunjukkan Kejujuran</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>8</td><td class="left">Menunjukkan Kesungguhan</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>9</td><td class="left">Melaksanakan Amanah</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>10</td><td class="left">Melaksanakan Fastabiqul khairat</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>11</td><td class="left">Menunjukkan Kesopanan</td><td>#REF!</td><td>#REF!</td></tr>
</table>

<br>

<table border="1" frame="box" rules="all" cellspacing="0" cellpadding="4" width="100%">
  <tr>
    <th rowspan="2">No.</th>
    <th rowspan="2">Perilaku / ALBIAH KU</th>
    <th colspan="2">Penilaian</th>
  </tr>
  <tr>
    <th>Angka</th>
    <th>Huruf</th>
  </tr>
  <tr><td>1</td><td class="left">Al-Quran Bacaan dan Amalan KU</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>2</td><td class="left">Bersih Diri dan Lingkungan KU</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>3</td><td class="left">Ibadah Sepanjang Hayat KU</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>4</td><td class="left">Ahsan Tutur Kata dan Perbuatan KU</td><td>#REF!</td><td>#REF!</td></tr>
  <tr><td>5</td><td class="left">Halalan dan Thayyiban Makanan dan Minuman KU</td><td>#REF!</td><td>#REF!</td></tr>
</table>

<h4>F. TARAF BERPIKIR</h4>
<table border="1" frame="box" rules="all" cellspacing="0" cellpadding="4" width="100%">
  <tr>
    <th>Pembentukan Pola Pikir</th><th>Berpikir Benar</th><th>Berpikir Solutif</th><th>Berpikir Cepat</th>
  </tr>
  <tr>
    <td>#REF!</td><td>#REF!</td><td>#REF!</td><td>#REF!</td>
  </tr>
</table>

<h4>G. KETIDAKHADIRAN</h4>
<table border="1" frame="box" rules="all" cellspacing="0" cellpadding="4" width="100%">
  <tr><td class="left">1. Sakit</td><td>= #REF! hari</td></tr>
  <tr><td class="left">2. Izin</td><td>= #REF! hari</td></tr>
  <tr><td class="left">3. Tanpa Keterangan</td><td>= #REF! hari</td></tr>
</table>

<h4>H. KESIMPULAN</h4>
<table border="1" frame="box" rules="all" cellspacing="0" cellpadding="4" width="100%">
  <tr>
    <th width="50%">Proses</th>
    <th width="50%">Output</th>
  </tr>
  <tr>
    <td>#REF!</td>
    <td>#REF!</td>
  </tr>
</table>

<p><b>Catatan untuk diperhatikan orangtua/wali:</b></p>
<p>#REF!</p>

<table border="1" frame="box" rules="all" cellspacing="0" cellpadding="4" width="100%">
  <tr>
    <th width="30%">Keterangan Kenaikan Kelas</th>
    <td width="70%">#REF!</td>
  </tr>
</table>

<br><br>
<table style="border:none; text-align:center; width:100%;">
  <tr>
    <td style="border:none;">Orang Tua / Wali Siswa,</td>
    <td style="border:none;">Mengetahui<br>Kepala Sekolah,</td>
    <td style="border:none;">Wali Kelas,</td>
  </tr>
  <tr style="height:80px;">
    <td style="border:none;">(……………………………………..)</td>
    <td style="border:none;">#REF!</td>
    <td style="border:none;">#REF!</td>
  </tr>
</table>
';

$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("raport.pdf", ["Attachment" => false]);
?>