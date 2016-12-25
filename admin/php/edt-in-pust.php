<?php
include "login.php";

$NO = $_GET['NO'];
$JUDUL = $_POST['JUDUL'];
$KATEGORI = $_POST['KATEGORI'];
$PENGARANG = $_POST['PENGARANG'];
$PENERBIT = $_POST['PENERBIT'];
$TAHUN = $_POST['TAHUN'];

$insert = "UPDATE `data_buku`
			SET `JUDUL` = '$JUDUL', 
				`KATEGORI` = '$KATEGORI', 
				`PENGARANG` = '$PENGARANG', 
				`PENERBIT` = '$PENERBIT',
				`TAHUN` = '$TAHUN'
			WHERE `data_buku`.`NO` = $NO";
$edt_query = mysqli_query($login, $insert);

if($edt_query)
{ 
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Edit data buku dengan judul $JUDUL berhasil!');";
echo "</script>";
}
else
{
echo "Gagal Mengedit Data";
}
header("Refresh:0; url=../list-pust.php");
?>