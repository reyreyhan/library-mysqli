<?php
include "login.php";

$nama = $_POST['NAMA'];
$upperN = strtoupper($nama);
$kelas = $_POST['KELAS'];
$jurusan = $_POST['JURUSAN'];

$tgl= date('Y-m-d');

$insert = "INSERT INTO `absensi` (`NAMA`, `KELAS`, `JURUSAN`, `TGL`) VALUES ('$upperN', '$kelas', '$jurusan', '$tgl');";

$insert_query = mysqli_query($login, $insert);

if($insert_query)
{ 
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Terima kasih $nama, telah mengisi daftar hadir perpustakaan! :D');";
echo "</script>";
}
else
{
echo "oh god why, kok gak isok";
}
header("Refresh:0; url=../index.html");
?>