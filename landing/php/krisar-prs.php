<?php
include "login.php";

$nama = $_POST['NAMA'];
$email = $_POST['EMAIL'];
//$domainmail = $_POST['DOMAIN'];
$saran = $_POST['KOM'];

$insert = "INSERT INTO `saran` (`NAMA`, `EMAIL`, `KOM`) VALUES ('$nama', '$email', '$saran');";

$insert_query = mysqli_query($login, $insert);

if($insert_query)
{ 
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Terima kasih $nama, telah memberikan kritik dan saran untuk perpustakaan! :D');";
echo "</script>";
}
else
{
echo "oh god why, kok gak isok";
}

header("Refresh:0; url=../index.html");

?>