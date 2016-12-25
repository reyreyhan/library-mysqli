<?php
include "../php/login.php";

/*$no_urut = $_GET ['no_urut'];*/
$NO = $_GET ['NO'];
$del = "DELETE FROM `absensi` WHERE `absensi`.`NO`=$NO";
$delquery = mysqli_query($login, $del);

if ($delquery)
{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Menghapus data absensi berhasil');";
echo "</script>";
}
else 
{

echo "<script language='javascript' type='text/javascript'>";
echo "alert('Menghapus data absensi gagall totaall');";
echo "</script>";

};

header("Refresh:0; url=../list-absensi.php");

?>


