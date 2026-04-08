<?php
error_reporting(-1);
ini_set('display_errors', 1);

require_once 'Mahasiswa.php';
require_once 'Dosen.php';
require_once 'MataKuliah.php';
require_once 'Nilai.php';

// objek
$mhs = new Mahasiswa("Nitha Wulan Sari", "I43251268");
$dosen = new Dosen("Pak Rizky", "199105292924061003");

$mk1 = new MataKuliah("Pemrograman", 3);
$mk2 = new MataKuliah("Basis Data", 4);

// input nilai
$mhs->tambahNilai(3.2);
$mhs->tambahNilai(4.0);

// output
echo $mhs->info();
echo "<br>";
echo $dosen->info();
echo "<hr>";

echo "Mata Kuliah:<br>";
echo $mk1->getInfo() . "<br>";
echo $mk2->getInfo() . "<br>";

echo "<hr>";
echo $mhs->cetak();
?>