<?php
include "login.php";

$nama = $_POST['NAMA'];
$email = $_POST['EMAIL'];
$subject = $_POST['SUBJECT'];
$message = $_POST['MESSAGE'];

$insert = "INSERT INTO `contact` (`NAMA`, `EMAIL`, `SUBJECT`, `MESSAGE`) VALUES ('$nama', '$email', '$subject', '$message');";

$insert_query = mysqli_query($login, $insert);

if($insert_query)
{ 

echo "<script language='javascript' type='text/javascript'>";
echo "alert('Terima kasih $nama, telah menghubungi kami! :D');";
echo "</script>";
}
else
{
echo "oh god why, kok gak isok";
}

header("Refresh:0; url=../index.html");

?>