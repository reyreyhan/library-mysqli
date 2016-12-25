<?php
include "login.php";

$NIS = $_POST['NIS'];
$JUDUL = $_POST['JUDUL'];
$KATEGORI = $_POST['KATEGORI'];
$CODE = $_POST['CODE'];
$TGL	= date('Y-m-d');

$varNIS = "SELECT * FROM anggota WHERE NIS='$NIS'";
$varKDNIS = "SELECT NIS FROM konfirmasi WHERE NIS='$NIS'";
$varKDJDL = "SELECT * FROM konfirmasi WHERE JUDUL='$JUDUL'";
$varPDNIS = "SELECT NIS FROM pinjam WHERE NIS='$NIS'";
$varPDJDL = "SELECT JUDUL FROM pinjam WHERE JUDUL='$JUDUL'";


//$nmpemPDJDL = "SELECT anggota.NAMA FROM pinjam WHERE JUDUL='$JUDUL' INNER JOIN anggota ON konfirmasi.NIS=anggota.NIS;";

$checknis = mysqli_query($login, $varNIS);
$checkDNIS = mysqli_query($login, $varKDNIS);
$checkDJDL = mysqli_query($login, $varKDJDL);
$checkPDNIS = mysqli_query($login, $varPDNIS);
$checkPDJDL = mysqli_query($login, $varPDJDL);

//$checknpemPDJDL = mysqli_query($login, $nmpemPDJDL);


$jadi = mysqli_fetch_array($checknis);
$nama = $jadi['NAMA'];


//echo "$nispm";
//echo "$nama";

//$jadi2 = mysqli_fetch_array($checknpemPDJDL);
//$nama2 = $jadi2['NAMA'];

//		print_r($checkDNIS)."<br>";
//		print_r($checknis)."<br>";
//		print_r($checkDJDL)."<br>";

	if (mysqli_num_rows($checknis) > 0) {


		if (mysqli_num_rows($checkPDNIS) > 1) {
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert(' Hallo $nama, Kamu hanya diperbolehkan meminjam  2 Buku saat transaksi... ');";
			echo "</script>";

			}

		else if (mysqli_num_rows($checkPDJDL) > 0) {
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert(' Maaf $nama, Buku $JUDUL sudah di PINJAM...  ');";
			echo "</script>";
			}

		else if (mysqli_num_rows($checkDNIS) > 1) {
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert(' Hallo $nama, Kamu hanya diperbolehkan meminjam 2 Buku saat transaksi... ');";
			echo "</script>";

			}

		else if (mysqli_num_rows($checkDJDL) > 0) {
/*			$jadi2 = mysqli_fetch_array($checkDJDL);
			$nispm	= $jadi2['NIS'];
			$nmpemKDJDL = "SELECT NAMA FROM anggota WHERE NIS='$nispm';";
			$checknpemKDJDL = mysqli_query($login, $nmpemKDJDL);
			$jadi3 = mysqli_fetch_array($checknpemKDJDL);
			$nama3 = $jadi3['NAMA'];
*/
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert(' Maaf $nama, Buku $JUDUL sudah di PESAN orang lain...  ');";
			echo "</script>";
			}
		

		else {
			$insert = "INSERT INTO konfirmasi (NIS, JUDUL, KATEGORI, CODE, TGL) 
			VALUES ('$NIS', '$JUDUL', '$KATEGORI', '$CODE', '$TGL');";
			
			$insert_query = mysqli_query($login, $insert);
			
			if($insert_query)
			{ 
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert(' Silahkan konfirmasi ke Petugas Perpustakaan, untuk meminjam Buku $JUDUL ');";
			echo "</script>";
			} 
			else
			{
			echo "oh god why, kok gak isok :v."."<br>";
			echo"kode error : " .mysqli_errno($login)."<br/>";
			echo"ikiloh error e: " .mysqli_error($login);
			}
			header("Refresh:0; url=../kobuk.php");
			};
}
	else {
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert(' NIS $NIS Tidak terdaftar... ');";
			echo "</script>";		
		}
header("Refresh:0; url=../kobuk.php");
?>