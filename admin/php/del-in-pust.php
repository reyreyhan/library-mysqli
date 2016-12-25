<?php
include "../php/login.php";

/*$no_urut = $_GET ['no_urut'];*/
$NO = $_GET ['NO'];
$del = "DELETE FROM `data_buku` WHERE `data_buku`.`NO`=$NO";
$delquery = mysqli_query($login, $del);

if ($delquery)
{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Menghapus data buku berhasil');";
echo "</script>";
}
else 
{

echo "<script language='javascript' type='text/javascript'>";
echo "alert('Menghapus data buku gagal');";
echo "</script>";

};

header("Refresh:0; url=../list-pust.php");

?>


