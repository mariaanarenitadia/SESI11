<?php
$dta ["NIM"] ="1122334455";
$dta ["NAMA"] ="RENITA";
$dta ["ALAMAT"] ="PANJER";
$dta ["JURUSAN"] ="TI_PAR";
$dta ["PRODI"] ="TEKNIK INFORMATIKA";
$dta ["HOBI"] ="MENULIS, OLAHRAGA";
$dta ["JKEL"] ="P";
header("content-type: application/json; charset=utf-8");

echo json_encode($dta);