<?php
include "../php/login.php";

$NO	  = $_GET['NO'];
$NIS2     = $_POST['NIS'];
$TGL      = $_POST['TGL'];
$JUDUL    = $_POST['JUDUL'];
$KATEGORI = $_POST['KATEGORI'];
$CODE     = $_POST['CODE'];

$del = "DELETE FROM `konfirmasi` WHERE `konfirmasi`.`NO`='$NO'";
$delquery = mysqli_query($login, $del);

$insert = "INSERT INTO pinjam (NIS, JUDUL, KATEGORI, CODE, TGL) 
		   VALUES ('$NIS2', '$JUDUL', '$KATEGORI', '$CODE', '$TGL');";
$insert_query = mysqli_query($login, $insert);

$insert2 = "UPDATE data_buku SET STATUS = 'Terpinjam' WHERE `data_buku`.`JUDUL`='$JUDUL';";
$insert_query2 = mysqli_query($login, $insert2);


if($insert_query)
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

}

header("Refresh:0; url=../list-trans.php");

?>