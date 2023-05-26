<?php
$dta [0]["NIM"] ="1122334455";
$dta [0]["NAMA"] ="RENITA";
$dta [0]["ALAMAT"] ="PANJER";
$dta [0]["JURUSAN"] ="TI_PAR";
$dta [0]["PRODI"] ="TEKNIK INFORMATIKA";
$dta [0]["HOBI"] ="MENULIS, OLAHRAGA";
$dta [0]["JKEL"] ="P";

$dta [1]["NIM"] ="2201010355";
$dta [1]["NAMA"] ="norcella";
$dta [1]["ALAMAT"] ="bali";
$dta [1]["JURUSAN"] ="MTI";
$dta [1]["PRODI"] ="TEKNIK INFORMATIKA";
$dta [1]["HOBI"] ="menyanyi";
$dta [1]["JKEL"] ="P";

$dta [2]["NIM"] ="2201010737";
$dta [2]["NAMA"] ="qietta";
$dta [2]["ALAMAT"] ="badung";
$dta [2]["JURUSAN"] ="SK";
$dta [2]["PRODI"] ="TEKNIK INFORMATIKA";
$dta [2]["HOBI"] ="membaca";
$dta [2]["JKEL"] ="L";

$dta [3]["NIM"] ="2201010452";
$dta [3]["NAMA"] ="SANDRIANA";
$dta [3]["ALAMAT"] ="KUTA";
$dta [3]["JURUSAN"] ="AKUNTANSI";
$dta [3]["PRODI"] ="TEKNIK INFORMATIKA";
$dta [3]["HOBI"] ="OLAHRAGA";
$dta [3]["JKEL"] ="P";
header("content-type: application/json; charset=utf-8");

echo json_encode($dta);