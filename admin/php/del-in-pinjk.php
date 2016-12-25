<?php
include "../php/login.php";

/*$no_urut = $_GET ['no_urut'];*/
$NIS = $_GET ['NIS'];
$del = "DELETE FROM `pinj_konf` WHERE `pinj_konf`.`NIS`=$NIS";
$delquery = mysqli_query($login, $del);


if ($delquery)
{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Menghapus data buku dengan nomer urut $NO berhasil');";
echo "</script>";
}
else 
{

echo "<script language='javascript' type='text/javascript'>";
echo "alert('Menghapus data buku dengan nomer urut $NO gagal');";
echo "</script>";

};

header("Refresh:0; url=../list-pust.php");

?>


