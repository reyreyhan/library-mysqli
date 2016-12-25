<?php
include "../php/login.php";

$NIS1	  = $_GET['NIS'];
$NO1	  = $_GET['NO'];
$NIS2     = $_POST['NIS'];
$JUDUL    = $_POST['JUDUL'];
$KATEGORI = $_POST['KATEGORI'];
$CODE     = $_POST['CODE'];
$TGLB     = $_POST['TGLB'];
$DENDA     = $_POST['DENDA'];
$NAMA	=	$_POST['NAMA'];

$del = "DELETE FROM `pinjam` WHERE `pinjam`.`NIS`=$NIS1 AND `pinjam`.`no`=$NO1" ;
$delquery = mysqli_query($login, $del);


$upt = "UPDATE data_buku SET STATUS = '' WHERE `data_buku`.`JUDUL`='$JUDUL'" ;
$uptdate = mysqli_query($login, $upt);

$insert = "INSERT INTO pengembalian (NIS, NAMA, JUDUL, KATEGORI, CODE, TGLB, DENDA) 
		   VALUES ('$NIS2','$NAMA', '$JUDUL', '$KATEGORI', '$CODE', '$TGLB','$DENDA');";
$insert_query = mysqli_query($login, $insert);

/*if($insert_query)
{ 
echo "<script language='javascript' type='text/javascript'>";
echo "alert(' Peminjaman baru dengan judul buku $JUDUL telah dipinjam oleh NIS $NAMA ');";
echo "</script>";
}
else
{
echo "oh god why, kok gak isok :v."."<br>";
echo"kode error : " .mysqli_errno($login)."<br/>";
echo"ikiloh error e: " .mysqli_error($login); 

} */

header("Refresh:0; url=../list-trans.php");

?>