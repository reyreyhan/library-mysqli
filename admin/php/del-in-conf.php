<?php
include "../php/login.php";

/*$no_urut = $_GET ['no_urut'];*/
$CODE = $_GET ['CODE'];
$del = "DELETE FROM `konfirmasi` WHERE `konfirmasi`.`CODE`='$CODE'";
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

header("Refresh:0; url=../conf-trans.php");
?>