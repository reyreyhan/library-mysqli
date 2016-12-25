<?php
include "../php/login.php";

$judul = $_POST['JUDUL'];
$kategori = $_POST['KATEGORI'];
$pengarang = $_POST['PENGARANG'];
$penerbit = $_POST['PENERBIT'];
$tahun = $_POST['TAHUN'];
$SINOPSIS = $_POST['SINOPSIS'];
$kode = $_POST['CODE'];
$inputK = strtoupper($kode);

$insert = "INSERT INTO data_buku (JUDUL, KATEGORI, SINOPSIS, PENGARANG, PENERBIT, TAHUN, CODE) 
		   VALUES ('$judul', '$kategori', '$SINOPSIS', '$pengarang', '$penerbit', '$tahun', '$inputK' );";

$insert_query = mysqli_query($login, $insert);

if($insert_query)
{ 

echo "<script language='javascript' type='text/javascript'>";
echo "alert('Data buku baru dengan judul $judul telah ditambahkan! :D');";
echo "</script>";
}
else
{
echo "oh god why, kok gak isok bazeeennggan :v.";
}

header("Refresh:0; url=../new-pust.html");

?>