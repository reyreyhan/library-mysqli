<?php
include "../php/login.php";

$NIS = $_POST['NIS'];
$NAMA = $_POST['NAMA'];
$JK = $_POST['JK'];
$KELAS = $_POST['KELAS'];
$JURUSAN = $_POST['JURUSAN'];
$ALAMAT = $_POST['ALAMAT'];
$HP = $_POST['HP'];

$insert = "INSERT INTO anggota (NIS, NAMA, JK, KELAS, JURUSAN, ALAMAT, HP) 
		   VALUES ('$NIS', '$NAMA', '$JK', '$KELAS', '$JURUSAN', '$ALAMAT', '$HP');";

$insert_query = mysqli_query($login, $insert);

if($insert_query)
{ 

echo "<script language='javascript' type='text/javascript'>";
echo "alert('Anggota baru dengan nama $NAMA telah ditambahkan! :D');";
echo "</script>";
}
else 
{
echo "oh god why, kok gak isok bazeeennggan :v."."<br/>";
echo"kode error : " .mysqli_errno($login)."<br/>";
echo"ikiloh error e: " .mysqli_error($login);

}

header("Refresh:0; url=../new-member.html");

?>