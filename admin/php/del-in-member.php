<?php
include "../php/login.php";

/*$no_urut = $_GET ['no_urut'];*/
$NIS = $_GET ['NIS'];
$del = "DELETE FROM `anggota` WHERE `anggota`.`NIS`=$NIS";
$delquery = mysqli_query($login, $del);

if ($delquery)
{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Menghapus data anggota dengan nomer NIS $NIS berhasil');";
echo "</script>";
}
else 
{

echo "<script language='javascript' type='text/javascript'>";
echo "alert('Menghapus data anggota dengan nomer $NIS gagall totaall');";
echo "</script>";

};

header("Refresh:0; url=../list-member.php");

?>


