 <?php

    include "login.php";
	
    $tgl = date('Y-m-d');

	$absen = "SELECT COUNT(IF(`TGL` LIKE '$tgl', `KELAS`, Null)) AS `absen` FROM absensi;";
    $viewabsen = mysqli_query($login, $absen);
    $habsen = mysqli_fetch_array($viewabsen);
    
    $trans = "SELECT COUNT(IF(`TGL` LIKE '$tgl', `NIS`, Null)) AS `transaksi` FROM pinjam;";
    $viewtrans = mysqli_query($login, $trans);
    $htrans = mysqli_fetch_array($viewtrans);

    $dat_buk = "SELECT COUNT(JUDUL) AS `dat_buk` FROM data_buku;";
    $viewdbuk = mysqli_query($login, $dat_buk);
    $hdbuk = mysqli_fetch_array($viewdbuk);

    $dat_ang = "SELECT COUNT(NAMA) AS `dat_ang` FROM anggota;";
    $viewdang = mysqli_query($login, $dat_ang);
    $hdang = mysqli_fetch_array($viewdang);


 ?>