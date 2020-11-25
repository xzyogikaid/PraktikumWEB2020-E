<?php
$nama = $_POST['nama'];
$nim  = $_POST['nim'];
$tugas  = $_POST['tugas'];
$uts    = $_POST['uts'];
$uas    = $_POST['uas'];
$nilai_tugas = $tugas;
$nilai_uts   = $uts;
$nilai_uas   = $uas;
//penjumlahan dari nilai-nilai yang sudah diinput
$nilai_akhir = ($nilai_tugas+$nilai_uts+$nilai_uas)/3;
//menampilkan grade berdasarkan hasil nilai akhir
if ($nilai_akhir>=80)
{
$grade = "Anda dinyatakan lulus dengan predikat  A";
}
elseif ($nilai_akhir>=70)
{
$grade = "Anda dinyatakan lulus dengan predikat B";
}
elseif ($nilai_akhir>=60)
{
$grade = "Anda dinyatakan lulus dengan predikat C";
}
elseif ($nilai_akhir>=59)
{
$grade = "Anda Tidak Lulus";
}
else
{
$grade = "Anda Tidak Lulus";
}
echo
"
<h1>Nilai Akhir Mahasiswa</h1>
Nama Mahasiswa = $nama <br>
NIM = $nim <br>

<br> Nilai Tugas Anda = <b>$nilai_tugas</b><br>
Nilai UTS   Anda = <b>$nilai_uts</b><br>
Nilai UAS   Anda = <b>$nilai_uas</b><br>

<h4>Nilai Akhir Anda = $nilai_akhir<br>
 $grade</h4>
";
?>