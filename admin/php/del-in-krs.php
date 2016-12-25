<?php
include "../php/login.php";

/*$no_urut = $_GET ['no_urut'];*/
$NO = $_GET ['NO']; 
//$cheks = implode("','", $_POST['checkbox']);
$del = "DELETE FROM `saran` WHERE `saran`.`NO`=$NO";

//$del = "DELETE FROM `saran` WHERE `saran`.`NO` IN ('$cheks')";
$delquery = mysqli_query($login, $del);

if ($delquery)
{
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Menghapus data kritik dan saran berhasil');";
echo "</script>";
}
else 
{

echo "<script language='javascript' type='text/javascript'>";
echo "alert('Menghapus data kritik dan saran gagall totaall');";
echo "</script>";

};

header("Refresh:0; url=../list-krisar.php");

/*$cheks = implode("','", $_POST['checkbox']);
$sql = "delete from `saran` where `course_code` in ('$cheks')";
$result = mysql_query($sql) or die(mysql_error());
mysql_close();
?> */

?>


