<?php
include "login.php";

$NO = $_GET['NO'];
$NAMA = $_POST['NAMA'];
$KELAS = $_POST['KELAS'];
$JK = $_POST['JK'];
$JURUSAN = $_POST['JURUSAN'];
$NIS = $_POST['NIS'];
$ALAMAT = $_POST['ALAMAT'];
$HP = $_POST['HP'];


$insert = "UPDATE `anggota`
			SET `NAMA` = '$NAMA', 
				`KELAS` = '$KELAS', 
				`JK` = '$JK', 
				`JURUSAN` = '$JURUSAN',
				`NIS` = '$NIS',
				`ALAMAT` = '$ALAMAT',
				`HP` = '$HP'
			WHERE `anggota`.`NO` = '$NO'";
$edt_query = mysqli_query($login, $insert);

if($edt_query)
{ 
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Edit data anggota dengan nama $NAMA berhasil!');";
echo "</script>";
}
else
{
echo "Gagal Mengedit Data";
echo"kode error : " .mysqli_errno($login)."<br/>";
echo"ikiloh error e: " .mysqli_error($login); 

}
header("Refresh:0; url=../list-member.php");
?>