<?php
require 'vendor/autoload.php';
require 'config.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// ---------------- HEADER ----------------
// Kolom A–C: No, Nama Siswa, NIS → merge 4 baris

// Tambahkan tanggal dikeluarkan di pojok atas
$sheet->setCellValue('G1', 'Tanggal Dikeluarkan: ');
$sheet->setCellValue('L1', 'Kepala Sekolah: ');

$sheet->setCellValue('R1', 'TP: ');
$sheet->setCellValue('U1', 'Kelas/Smt: ');
$sheet->setCellValue('Y1', 'Wali Kelas: ');




$sheet->setCellValue('A2', 'No.');
$sheet->mergeCells('A2:A5');

$sheet->setCellValue('B2', 'Nama Siswa');
$sheet->mergeCells('B2:B5');

$sheet->setCellValue('C2', 'NIS');
$sheet->mergeCells('C2:C5');

// Contoh kategori Tahfizhul Qur’an
$sheet->setCellValue('D2', "Tahfizhul Qur'an");
$sheet->mergeCells('D2:M2'); // sesuaikan jumlah kolom

$sheet->setCellValue('N2', "Tahsinul Qur'an");
$sheet->mergeCells('N2:V2');

$sheet->setCellValue('W2', "Bahasa Arab");
$sheet->mergeCells('W2:AF2');

$sheet->setCellValue('AG2', "Bahasa Indonesia");
$sheet->mergeCells('AG2:AP2');

$sheet->setCellValue('AQ2', "Tsaqofah Islam (PAI)");
$sheet->mergeCells('AQ2:AZ2');

$sheet->setCellValue('BA2', "Adab");
$sheet->mergeCells('BA2:BJ2');

$sheet->setCellValue('BK2', "Matematika");
$sheet->mergeCells('BK2:BT2');

$sheet->setCellValue('BU2', "Sains (IPA)");
$sheet->mergeCells('BU2:CD2');

$sheet->setCellValue('CE2', "Geografi (IPS-PKn)");
$sheet->mergeCells('CE2:CN2');

$sheet->setCellValue('CO2', "Bahasa Inggris");
$sheet->mergeCells('CO2:CX2');

$sheet->setCellValue('CY2', "Olahraga/Senam");
$sheet->mergeCells('CY2:DH2');

$sheet->setCellValue('DI2', "Berenang");
$sheet->mergeCells('DI2:DN2');

$sheet->setCellValue('DO2', "Memanah");
$sheet->mergeCells('DO2:DT2');

$sheet->setCellValue('DU2', "Raihlah");
$sheet->mergeCells('DU2:DZ2');

$sheet->setCellValue('EA2', "Berkarya");


$sheet->setCellValue('EG2', "Memasak");


$sheet->setCellValue('EM2', "Berkebun");


$sheet->setCellValue('ES2', "Kepanduan");


$sheet->setCellValue('EY2', "Rebana");


$sheet->setCellValue('FE2', "Melaksanakan Ketaatan Kepada Allah dan Rasul-Nya");
$sheet->mergeCells('FE2:FF2');

$sheet->setCellValue('FG2', "Melaksanakan Ketaatan Kepada Orangtua");
$sheet->mergeCells('FG2:FH2');

$sheet->setCellValue('FI2', "Menghormati Guru");
$sheet->mergeCells('FI2:FJ2');

$sheet->setCellValue('FK2', "Menunjukkan Kepercayaan Diri");
$sheet->mergeCells('FK2:FL2');

$sheet->setCellValue('FM2', "Menunjukkan Kemandirian");
$sheet->mergeCells('FM2:FN2');

$sheet->setCellValue('FO2', "Menunjukkan Kedisiplinan");
$sheet->mergeCells('FO2:FP2');

$sheet->setCellValue('FQ2', "Menunjukkan Kejujuran");
$sheet->mergeCells('FQ2:FR2');

$sheet->setCellValue('FS2', "Menunjukkan Kesungguhan");
$sheet->mergeCells('FS2:FT2');

$sheet->setCellValue('FU2', "Melaksanakan Amanah");
$sheet->mergeCells('FU2:FV2');

$sheet->setCellValue('FW2', "Melaksanakan fastabiqul Khairat");
$sheet->mergeCells('FW2:FX2');

$sheet->setCellValue('FY2', "Menunjukkan Kesopanan");
$sheet->mergeCells('FY2:FZ2');

$sheet->setCellValue('GA2', "Al-Qur'an Bacaan dan Amalan KU");
$sheet->mergeCells('GA2:GB2');

$sheet->setCellValue('GC2', "Bersih Diri dan Lingkungan KU");
$sheet->mergeCells('GC2:GD2');

$sheet->setCellValue('GE2', "Ibadah Sepanjang Hayat KU");
$sheet->mergeCells('GE2:GF2');

$sheet->setCellValue('GG2', "Ahsan Tutur Kata dan Perbuatan KU");
$sheet->mergeCells('GG2:GH2');

$sheet->setCellValue('GI2', "Halalan dan Thayyiban Makanan dan Minuman KU");
$sheet->mergeCells('GI2:GJ2');

$sheet->setCellValue('GK2', "TARAF BERPIKIR");
$sheet->mergeCells('GK2:GN2');

$sheet->setCellValue('GO2', "Kehadiran siswa");
$sheet->mergeCells('GO2:GT2');

$sheet->setCellValue('GU2', "KESIMPULAN");
$sheet->mergeCells('GU2:GV2');


// ---------------- SUBHEADER BARIS 3 ----------------
$sheet->setCellValue('D3', '1');
$sheet->mergeCells('D3:M3');

$sheet->setCellValue('N3', '2');
$sheet->mergeCells('N3:V3');

$sheet->setCellValue('W3', '3');
$sheet->mergeCells('W3:AF3');

$sheet->setCellValue('AG3', '4');
$sheet->mergeCells('AG3:AP3');

$sheet->setCellValue('AQ3', '5');
$sheet->mergeCells('AQ3:AZ3');

$sheet->setCellValue('BA3', '6');
$sheet->mergeCells('BA3:BJ3');

$sheet->setCellValue('BK3', '7');
$sheet->mergeCells('BK3:BT3');

$sheet->setCellValue('BU3', '8');
$sheet->mergeCells('BU3:CD3');

$sheet->setCellValue('CE3', '9');
$sheet->mergeCells('CE3:CN3');

$sheet->setCellValue('CO3', '10');
$sheet->mergeCells('CO3:CX3');

$sheet->setCellValue('CY3', '11');
$sheet->mergeCells('CY3:DH3');

$sheet->setCellValue('DI3', '12');
$sheet->mergeCells('DI3:DN3');

$sheet->setCellValue('DO3', '13');
$sheet->mergeCells('DO3:DT3');

$sheet->setCellValue('DU3', '14');
$sheet->mergeCells('DU3:DZ3');

$sheet->setCellValue('EA3', '15');
$sheet->mergeCells('EA3:EF3');

$sheet->setCellValue('EG3', '16');
$sheet->mergeCells('EG3:EL3');

$sheet->setCellValue('EM3', '17');
$sheet->mergeCells('EM3:ER3');

$sheet->setCellValue('ES3', '18');
$sheet->mergeCells('ES3:EX3');

$sheet->setCellValue('EY3', '19');
$sheet->mergeCells('EY3:FD3');

$sheet->setCellValue('FE3', '20');
$sheet->mergeCells('FE3:FF3');

$sheet->setCellValue('FG3', '21');
$sheet->mergeCells('FG3:FH3');

$sheet->setCellValue('FI3', '22');
$sheet->mergeCells('FI3:FJ3');

$sheet->setCellValue('FK3', '23');
$sheet->mergeCells('FK3:FL3');

$sheet->setCellValue('FM3', '24');
$sheet->mergeCells('FM3:FN3');

$sheet->setCellValue('FO3', '25');
$sheet->mergeCells('FO3:FP3');

$sheet->setCellValue('FQ3', '26');
$sheet->mergeCells('FQ3:FR3');

$sheet->setCellValue('FS3', '27');
$sheet->mergeCells('FS3:FT3');

$sheet->setCellValue('FU3', '28');
$sheet->mergeCells('FU3:FV3');

$sheet->setCellValue('FW3', '29');
$sheet->mergeCells('FW3:FX3');

$sheet->setCellValue('FY3', '30');
$sheet->mergeCells('FY3:FZ3');

$sheet->setCellValue('GA3', '31');
$sheet->mergeCells('GA3:GB3');

$sheet->setCellValue('GC3', '32');
$sheet->mergeCells('GC3:GD3');

$sheet->setCellValue('GE3', '33');
$sheet->mergeCells('GE3:GF3');

$sheet->setCellValue('GG3', '34');
$sheet->mergeCells('GG3:GH3');

$sheet->setCellValue('GI3', '35');
$sheet->mergeCells('GI3:GJ3');

$sheet->setCellValue('GO3', "Ketidakhadiran");
$sheet->mergeCells('GO3:GR3');

$sheet->setCellValue('GS3', "Kehadiran");
$sheet->mergeCells('GS3:GT3');

// BARIS 4 \\
$sheet->setCellValue('D4', "Kuantitas");
$sheet->mergeCells('D4:E4');

$sheet->setCellValue('F4', "Kualitas");
$sheet->mergeCells('F4:G4');

$sheet->setCellValue('H4', "Kecepatan");
$sheet->mergeCells('H4:I4');

$sheet->setCellValue('J4', "Minat");
$sheet->mergeCells('J4:K4');

$sheet->setCellValue('L4', "Proses");
$sheet->mergeCells('L4:M4');

$sheet->setCellValue('O4', "Fashohah");
$sheet->mergeCells('O4:P4');

$sheet->setCellValue('Q4', "Tartil");
$sheet->mergeCells('Q4:R4');

$sheet->setCellValue('S4', "Minat");
$sheet->mergeCells('S4:T4');

$sheet->setCellValue('U4', "Proses");
$sheet->mergeCells('U4:V4');

$sheet->setCellValue('W4', "Pengetahuan");
$sheet->mergeCells('W4:X4');

$sheet->setCellValue('Y4', "Pemahaman");
$sheet->mergeCells('Y4:Z4');

$sheet->setCellValue('AA4', "Keahlian");
$sheet->mergeCells('AA4:AB4');

$sheet->setCellValue('AC4', "Minat");
$sheet->mergeCells('AC4:AD4');

$sheet->setCellValue('AE4', "Proses");
$sheet->mergeCells('AE4:AF4');

$sheet->setCellValue('AG4', "Pengetahuan");
$sheet->mergeCells('AG4:AH4');

$sheet->setCellValue('AI4', "Pemahaman");
$sheet->mergeCells('AI4:AJ4');

$sheet->setCellValue('AK4', "Keahlian");
$sheet->mergeCells('AK4:AL4');

$sheet->setCellValue('AM4', "Minat");
$sheet->mergeCells('AM4:AN4');

$sheet->setCellValue('AO4', "Proses");
$sheet->mergeCells('AO4:AP4');

$sheet->setCellValue('AQ4', "Pengetahuan");
$sheet->mergeCells('AQ4:AR4');

$sheet->setCellValue('AS4', "Pemahaman");
$sheet->mergeCells('AS4:AT4');

$sheet->setCellValue('AU4', "Keahlian");
$sheet->mergeCells('AU4:AV4');

$sheet->setCellValue('AW4', "Minat");
$sheet->mergeCells('AW4:AX4');

$sheet->setCellValue('AY4', "Proses");
$sheet->mergeCells('AY4:AZ4');

$sheet->setCellValue('BA4', "Pengetahuan");
$sheet->mergeCells('BA4:BB4');

$sheet->setCellValue('BC4', "Pemahaman");
$sheet->mergeCells('BC4:BD4');

$sheet->setCellValue('BE4', "Keahlian");
$sheet->mergeCells('BE4:BF4');

$sheet->setCellValue('BG4', "Minat");
$sheet->mergeCells('BG4:BH4');

$sheet->setCellValue('BI4', "Proses");
$sheet->mergeCells('BI4:BJ4');

$sheet->setCellValue('BK4', "Pengetahuan");
$sheet->mergeCells('BK4:BL4');

$sheet->setCellValue('BM4', "Pemahaman");
$sheet->mergeCells('BM4:BN4');

$sheet->setCellValue('BO4', "Keahlian");
$sheet->mergeCells('BO4:BP4');

$sheet->setCellValue('BQ4', "Minat");
$sheet->mergeCells('BQ4:BR4');

$sheet->setCellValue('BS4', "Proses");
$sheet->mergeCells('BS4:BT4');

$sheet->setCellValue('BU4', "Pengetahuan");
$sheet->mergeCells('BU4:BV4');

$sheet->setCellValue('BW4', "Pemahaman");
$sheet->mergeCells('BW4:BX4');

$sheet->setCellValue('BY4', "Keahlian");
$sheet->mergeCells('BY4:BZ4');

$sheet->setCellValue('CA4', "Minat");
$sheet->mergeCells('CA4:CB4');

$sheet->setCellValue('CC4', "Proses");
$sheet->mergeCells('CC4:CD4');

$sheet->setCellValue('CE4', "Pengetahuan");
$sheet->mergeCells('CE4:CF4');

$sheet->setCellValue('CG4', "Pemahaman");
$sheet->mergeCells('CG4:CH4');

$sheet->setCellValue('CI4', "Keahlian");
$sheet->mergeCells('CI4:CJ4');

$sheet->setCellValue('CK4', "Minat");
$sheet->mergeCells('CK4:CL4');

$sheet->setCellValue('CM4', "Proses");
$sheet->mergeCells('CM4:CN4');

$sheet->setCellValue('CO4', "Pengetahuan");
$sheet->mergeCells('CO4:CP4');

$sheet->setCellValue('CQ4', "Pemahaman");
$sheet->mergeCells('CQ4:CR4');

$sheet->setCellValue('CS4', "Keahlian");
$sheet->mergeCells('CS4:CT4');

$sheet->setCellValue('CU4', "Minat");
$sheet->mergeCells('CU4:CV4');

$sheet->setCellValue('CW4', "Proses");
$sheet->mergeCells('CW4:CX4');

$sheet->setCellValue('CY4', "Pengetahuan");
$sheet->mergeCells('CY4:CZ4');

$sheet->setCellValue('DA4', "Pemahaman");
$sheet->mergeCells('DA4:DB4');

$sheet->setCellValue('DC4', "Keahlian");
$sheet->mergeCells('DC4:DD4');

$sheet->setCellValue('DE4', "Minat");
$sheet->mergeCells('DE4:DF4');

$sheet->setCellValue('DG4', "Proses");
$sheet->mergeCells('DG4:DH4');

$sheet->setCellValue('DI4', "Kreativitas/Inovasi");
$sheet->mergeCells('DI4:DJ4');

$sheet->setCellValue('DK4', "Kesungguhan");
$sheet->mergeCells('DK4:DL4');

$sheet->setCellValue('DM4', "Minat");
$sheet->mergeCells('DM4:DN4');

$sheet->setCellValue('DO4', "Kreativitas/Inovasi");
$sheet->mergeCells('DO4:DP4');

$sheet->setCellValue('DQ4', "Kesungguhan");
$sheet->mergeCells('DQ4:DR4');

$sheet->setCellValue('DS4', "Minat");
$sheet->mergeCells('DS4:DT4');

$sheet->setCellValue('DU4', "Kreativitas/Inovasi");
$sheet->mergeCells('DU4:DV4');

$sheet->setCellValue('DW4', "Kesungguhan");
$sheet->mergeCells('DW4:DX4');

$sheet->setCellValue('DY4', "Minat");
$sheet->mergeCells('DY4:DZ4');

$sheet->setCellValue('EA4', "Kreativitas/Inovasi");
$sheet->mergeCells('EA4:EB4');

$sheet->setCellValue('EC4', "Kesungguhan");
$sheet->mergeCells('EC4:ED4');

$sheet->setCellValue('EE4', "Minat");
$sheet->mergeCells('EE4:EF4');

$sheet->setCellValue('EG4', "Kreativitas/Inovasi");
$sheet->mergeCells('EG4:EH4');

$sheet->setCellValue('EI4', "Kesungguhan");
$sheet->mergeCells('EI4:EJ4');

$sheet->setCellValue('EK4', "Minat");
$sheet->mergeCells('EK4:EL4');

$sheet->setCellValue('EM4', "Kreativitas/Inovasi");
$sheet->mergeCells('EM4:EN4');

$sheet->setCellValue('EO4', "Kesungguhan");
$sheet->mergeCells('EO4:EP4');

$sheet->setCellValue('EQ4', "Minat");
$sheet->mergeCells('EQ4:ER4');

$sheet->setCellValue('ES4', "Kreativitas/Inovasi");
$sheet->mergeCells('ES4:ET4');

$sheet->setCellValue('EU4', "Kesungguhan");
$sheet->mergeCells('EU4:EV4');

$sheet->setCellValue('EW4', "Minat");
$sheet->mergeCells('EW4:EX4');

$sheet->setCellValue('EY4', "Kreativitas/Inovasi");
$sheet->mergeCells('EY4:EZ4');

$sheet->setCellValue('FA4', "Kesungguhan");
$sheet->mergeCells('FA4:FB4');

$sheet->setCellValue('FC4', "Minat");
$sheet->mergeCells('FC4:FD4');

$sheet->setCellValue('FE4', "PENILAIAN SIKAP");
$sheet->mergeCells('FE4:FZ4');

$sheet->setCellValue('GA4', "PERILAKU / ALBIAH KU");
$sheet->mergeCells('GA4:GJ4');

// N4 : N5 \\
$sheet->setCellValue('N4', "Capaian");
$sheet->mergeCells('N4:N5');

// BARIS 5 \\
    $sheet->setCellValue('D5', 'Setoran');
    $sheet->setCellValue('E5', 'Mutqin');
    $sheet->setCellValue('F5', 'Angka');
    $sheet->setCellValue('G5', 'Huruf');
    $sheet->setCellValue('H5', 'Angka');
    $sheet->setCellValue('I5', 'Huruf');
    $sheet->setCellValue('J5', 'Angka');
    $sheet->setCellValue('K5', 'Huruf');
    $sheet->setCellValue('L5', 'Angka');
    $sheet->setCellValue('M5', 'Huruf');
    $sheet->setCellValue('O5', 'Angka');
    $sheet->setCellValue('P5', 'Huruf');
    $sheet->setCellValue('Q5', 'Angka');
    $sheet->setCellValue('R5', 'Huruf');
    $sheet->setCellValue('S5', 'Angka');
    $sheet->setCellValue('T5', 'Huruf');
    $sheet->setCellValue('U5', 'Angka');
    $sheet->setCellValue('V5', 'Huruf');
    $sheet->setCellValue('W5', 'Angka');
    $sheet->setCellValue('X5', 'Huruf');
    $sheet->setCellValue('Y5', 'Angka');
    $sheet->setCellValue('Z5', 'Huruf');
    $sheet->setCellValue('AA5', 'Angka');
    $sheet->setCellValue('AB5', 'Huruf');
    $sheet->setCellValue('AC5', 'Angka');
    $sheet->setCellValue('AD5', 'Huruf');
    $sheet->setCellValue('AE5', 'Angka');
    $sheet->setCellValue('AF5', 'Huruf');
    $sheet->setCellValue('AG5', 'Angka');
    $sheet->setCellValue('AH5', 'Huruf');
    $sheet->setCellValue('AI5', 'Angka');
    $sheet->setCellValue('AJ5', 'Huruf');
    $sheet->setCellValue('AK5', 'Angka');
    $sheet->setCellValue('AL5', 'Huruf');
    $sheet->setCellValue('AM5', 'Angka');
    $sheet->setCellValue('AN5', 'Huruf');
    $sheet->setCellValue('AO5', 'Angka');
    $sheet->setCellValue('AP5', 'Huruf');
    $sheet->setCellValue('AQ5', 'Angka');
    $sheet->setCellValue('AR5', 'Huruf');
    $sheet->setCellValue('AS5', 'Angka');
    $sheet->setCellValue('AT5', 'Huruf');
    $sheet->setCellValue('AU5', 'Angka');
    $sheet->setCellValue('AV5', 'Huruf');
    $sheet->setCellValue('AW5', 'Angka');
    $sheet->setCellValue('AX5', 'Huruf');
    $sheet->setCellValue('AY5', 'Angka');
    $sheet->setCellValue('AZ5', 'Huruf');
    $sheet->setCellValue('BA5', 'Angka');
    $sheet->setCellValue('BB5', 'Huruf');
    $sheet->setCellValue('BC5', 'Angka');
    $sheet->setCellValue('BD5', 'Huruf');
    $sheet->setCellValue('BE5', 'Angka');
    $sheet->setCellValue('BF5', 'Huruf');
    $sheet->setCellValue('BG5', 'Angka');
    $sheet->setCellValue('BH5', 'Huruf');
    $sheet->setCellValue('BI5', 'Angka');
    $sheet->setCellValue('BJ5', 'Huruf');
    $sheet->setCellValue('BK5', 'Angka');
    $sheet->setCellValue('BL5', 'Huruf');
    $sheet->setCellValue('BM5', 'Angka');
    $sheet->setCellValue('BN5', 'Huruf');
    $sheet->setCellValue('BO5', 'Angka');
    $sheet->setCellValue('BP5', 'Huruf');
    $sheet->setCellValue('BQ5', 'Angka');
    $sheet->setCellValue('BR5', 'Huruf');
    $sheet->setCellValue('BS5', 'Angka');
    $sheet->setCellValue('BT5', 'Huruf');
    $sheet->setCellValue('BU5', 'Angka');
    $sheet->setCellValue('BV5', 'Huruf');
    $sheet->setCellValue('BW5', 'Angka');
    $sheet->setCellValue('BX5', 'Huruf');
    $sheet->setCellValue('BY5', 'Angka');
    $sheet->setCellValue('BZ5', 'Huruf');
    $sheet->setCellValue('CA5', 'Angka');
    $sheet->setCellValue('CB5', 'Huruf');
    $sheet->setCellValue('CC5', 'Angka');
    $sheet->setCellValue('CD5', 'Huruf');
    $sheet->setCellValue('CE5', 'Angka');
    $sheet->setCellValue('CF5', 'Huruf');
    $sheet->setCellValue('CG5', 'Angka');
    $sheet->setCellValue('CH5', 'Huruf');
    $sheet->setCellValue('CI5', 'Angka');
    $sheet->setCellValue('CJ5', 'Huruf');
    $sheet->setCellValue('CK5', 'Angka');
    $sheet->setCellValue('CL5', 'Huruf');
    $sheet->setCellValue('CM5', 'Angka');
    $sheet->setCellValue('CN5', 'Huruf');
    $sheet->setCellValue('CO5', 'Angka');
    $sheet->setCellValue('CP5', 'Huruf');
    $sheet->setCellValue('CQ5', 'Angka');
    $sheet->setCellValue('CR5', 'Huruf');
    $sheet->setCellValue('CS5', 'Angka');
    $sheet->setCellValue('CT5', 'Huruf');
    $sheet->setCellValue('CU5', 'Angka');
    $sheet->setCellValue('CV5', 'Huruf');
    $sheet->setCellValue('CW5', 'Angka');
    $sheet->setCellValue('CX5', 'Huruf');
    $sheet->setCellValue('CY5', 'Angka');
    $sheet->setCellValue('CZ5', 'Huruf');
    $sheet->setCellValue('DA5', 'Angka');
    $sheet->setCellValue('DB5', 'Huruf');
    $sheet->setCellValue('DC5', 'Angka');
    $sheet->setCellValue('DD5', 'Huruf');
    $sheet->setCellValue('DE5', 'Angka');
    $sheet->setCellValue('DF5', 'Huruf');
    $sheet->setCellValue('DG5', 'Angka');
    $sheet->setCellValue('DH5', 'Huruf');
    $sheet->setCellValue('DI5', 'Angka');
    $sheet->setCellValue('DJ5', 'Huruf');
    $sheet->setCellValue('DK5', 'Angka');
    $sheet->setCellValue('DL5', 'Huruf');
    $sheet->setCellValue('DM5', 'Angka');
    $sheet->setCellValue('DN5', 'Huruf');
    $sheet->setCellValue('DO5', 'Angka');
    $sheet->setCellValue('DP5', 'Huruf');
    $sheet->setCellValue('DQ5', 'Angka');
    $sheet->setCellValue('DR5', 'Huruf');
    $sheet->setCellValue('DS5', 'Angka');
    $sheet->setCellValue('DT5', 'Huruf');
    $sheet->setCellValue('DU5', 'Angka');
    $sheet->setCellValue('DV5', 'Huruf');
    $sheet->setCellValue('DW5', 'Angka');
    $sheet->setCellValue('DX5', 'Huruf');
    $sheet->setCellValue('DY5', 'Angka');
    $sheet->setCellValue('DZ5', 'Huruf');
    $sheet->setCellValue('EA5', 'Angka');
    $sheet->setCellValue('EB5', 'Huruf');
    $sheet->setCellValue('EC5', 'Angka');
    $sheet->setCellValue('ED5', 'Huruf');
    $sheet->setCellValue('EE5', 'Angka');
    $sheet->setCellValue('EF5', 'Huruf');
    $sheet->setCellValue('EG5', 'Angka');
    $sheet->setCellValue('EH5', 'Huruf');
    $sheet->setCellValue('EI5', 'Angka');
    $sheet->setCellValue('EJ5', 'Huruf');
    $sheet->setCellValue('EK5', 'Angka');
    $sheet->setCellValue('EL5', 'Huruf');
    $sheet->setCellValue('EM5', 'Angka');
    $sheet->setCellValue('EN5', 'Huruf');
    $sheet->setCellValue('EO5', 'Angka');
    $sheet->setCellValue('EP5', 'Huruf');
    $sheet->setCellValue('EQ5', 'Angka');
    $sheet->setCellValue('ER5', 'Huruf');
    $sheet->setCellValue('ES5', 'Angka');
    $sheet->setCellValue('ET5', 'Huruf');
    $sheet->setCellValue('EU5', 'Angka');
    $sheet->setCellValue('EV5', 'Huruf');
    $sheet->setCellValue('EW5', 'Angka');
    $sheet->setCellValue('EX5', 'Huruf');
    $sheet->setCellValue('EY5', 'Angka');
    $sheet->setCellValue('EZ5', 'Huruf');
    $sheet->setCellValue('FA5', 'Angka');
    $sheet->setCellValue('FB5', 'Huruf');
    $sheet->setCellValue('FC5', 'Angka');
    $sheet->setCellValue('FD5', 'Huruf');
    $sheet->setCellValue('FE5', 'Angka');
    $sheet->setCellValue('FF5', 'Huruf');
    $sheet->setCellValue('FG5', 'Angka');
    $sheet->setCellValue('FH5', 'Huruf');
    $sheet->setCellValue('FI5', 'Angka');
    $sheet->setCellValue('FJ5', 'Huruf');
    $sheet->setCellValue('FK5', 'Angka');
    $sheet->setCellValue('FL5', 'Huruf');
    $sheet->setCellValue('FM5', 'Angka');
    $sheet->setCellValue('FN5', 'Huruf');
    $sheet->setCellValue('FO5', 'Angka');
    $sheet->setCellValue('FP5', 'Huruf');
    $sheet->setCellValue('FQ5', 'Angka');
    $sheet->setCellValue('FR5', 'Huruf');
    $sheet->setCellValue('FS5', 'Angka');
    $sheet->setCellValue('FT5', 'Huruf');
    $sheet->setCellValue('FU5', 'Angka');
    $sheet->setCellValue('FV5', 'Huruf');
    $sheet->setCellValue('FW5', 'Angka');
    $sheet->setCellValue('FX5', 'Huruf');
    $sheet->setCellValue('FY5', 'Angka');
    $sheet->setCellValue('FZ5', 'Huruf');
    $sheet->setCellValue('GA5', 'Angka');
    $sheet->setCellValue('GB5', 'Huruf');
    $sheet->setCellValue('GC5', 'Angka');
    $sheet->setCellValue('GD5', 'Huruf');
    $sheet->setCellValue('GE5', 'Angka');
    $sheet->setCellValue('GF5', 'Huruf');
    $sheet->setCellValue('GG5', 'Angka');
    $sheet->setCellValue('GH5', 'Huruf');
    $sheet->setCellValue('GI5', 'Angka');
    $sheet->setCellValue('GJ5', 'Huruf');
    $sheet->setCellValue('GK5', 'Pola Pikir');
    $sheet->setCellValue('GL5', 'Berpikir Benar');
    $sheet->setCellValue('GM5', 'Berpikir Solutif');
    $sheet->setCellValue('GN5', 'Berpikir Cepat');
    $sheet->setCellValue('GO5', 'Sakit');
    $sheet->setCellValue('GP5', 'Izin');
    $sheet->setCellValue('GQ5', 'Alpa');
    $sheet->setCellValue('GR5', '%');
    $sheet->setCellValue('GS5', 'Kehadiran');
    $sheet->setCellValue('GT5', '%');
    $sheet->setCellValue('GU5', 'Proses');
    $sheet->setCellValue('GV5', 'Output');






// === Lanjutkan dengan pola yang sama untuk Tahsinul Qur’an, Bahasa Arab, dst ===
// Setiap kategori besar di baris 1, nomor kelompok di baris 2,
// subkategori di baris 3, dan detail penilaian di baris 4.

// ---------------- STYLE ----------------
$highestCol = $sheet->getHighestColumn();
$highestRow = $sheet->getHighestRow();

// Style header & tabel
$sheet->getStyle("A1:{$highestCol}{$highestRow}")->applyFromArray([
    'font' => ['bold' => true],
    'alignment' => [
        'horizontal' => Alignment::HORIZONTAL_CENTER,
        'vertical'   => Alignment::VERTICAL_CENTER,
        'wrapText'   => true
    ],
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN  // ✅ border lebih tebal
        ]
    ]
]);

// Auto height untuk semua baris
for ($i = 1; $i <= $highestRow; $i++) {
    $sheet->getRowDimension($i)->setRowHeight(-1); // auto
}

// Auto width semua kolom
for ($col = 'A'; $col <= $highestCol; $col++) {
    $sheet->getColumnDimension($col)->setAutoSize(true);
}

// === Tambahkan di sini ===
// Atur kolom panjang dengan lebar tetap (biar wrapText aktif)
$sheet->getColumnDimension('FE')->setWidth(25); // "Melaksanakan Ketaatan Kepada Allah dan Rasul-Nya"
$sheet->getColumnDimension('FG')->setWidth(25); // "Melaksanakan Ketaatan Kepada Orangtua"
$sheet->getColumnDimension('FI')->setWidth(20); // "Menghormati Guru"
$sheet->getColumnDimension('FK')->setWidth(25); // "Menunjukkan Kepercayaan Diri"
$sheet->getColumnDimension('FM')->setWidth(25); // "Menunjukkan Kemandirian"
$sheet->getColumnDimension('FO')->setWidth(25); // "Menunjukkan Kedisiplinan"
$sheet->getColumnDimension('FQ')->setWidth(25); // "Menunjukkan Kejujuran"
$sheet->getColumnDimension('FS')->setWidth(25); // "Menunjukkan Kesungguhan"
$sheet->getColumnDimension('FU')->setWidth(25); // "Melaksanakan Amanah"
$sheet->getColumnDimension('FW')->setWidth(25); // "Melaksanakan fastabiqul Khairat"
$sheet->getColumnDimension('FY')->setWidth(25); // "Menunjukkan Kesopanan"
$sheet->getColumnDimension('GA')->setWidth(25); // "Al-Qur'an Bacaan dan Amalan KU"
$sheet->getColumnDimension('GC')->setWidth(25); // "Bersih Diri dan Lingkungan KU"
$sheet->getColumnDimension('GE')->setWidth(25); // "Ibadah Sepanjang Hayat KU"
$sheet->getColumnDimension('GG')->setWidth(25); // "Ahsan Tutur Kata dan Perbuatan KU"
$sheet->getColumnDimension('GI')->setWidth(30); // "Halalan dan Thayyiban Makanan dan Minuman KU"
$sheet->getColumnDimension('EG')->setWidth(10); // "Halalan dan Thayyiban Makanan dan Minuman KU"
$sheet->getColumnDimension('ES')->setWidth(10); // "Halalan dan Thayyiban Makanan dan Minuman KU"
$sheet->getColumnDimension('U')->setWidth(10); // "Halalan dan Thayyiban Makanan dan Minuman KU"
$sheet->getColumnDimension('Y')->setWidth(10); // "Halalan dan Thayyiban Makanan dan Minuman KU"
$sheet->getColumnDimension('L')->setWidth(10); // "Halalan dan Thayyiban Makanan dan Minuman KU"
$sheet->getColumnDimension('C')->setWidth(10); // "Halalan dan Thayyiban Makanan dan Minuman KU"

// ---------------- DATA ----------------


// ---------------- EXPORT ----------------
$writer = new Xlsx($spreadsheet);
$filename = "Raport_Siswa.xlsx";

if (ob_get_length()) ob_end_clean();
ini_set('zlib.output_compression', 'Off');

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="'.$filename.'"');
header('Cache-Control: max-age=0');
header('Pragma: public');

$writer->save('php://output');
exit;
