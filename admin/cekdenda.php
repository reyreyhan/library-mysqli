<?php  
  include 'php/login.php';
  session_start();
  if (!isset($_SESSION['USERNAME'])) {
      header('location:login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>
    <link rel="shortcut icon" href="img/faviconlock.ico" type="image/x-icon">
    <link rel="icon" href="img/faviconlock.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css"> -->
    <link rel="stylesheet" type="text/css" href="../framework/jquery/chosen/chosen.min.css">
    <link href="../framework/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="css/new-all.css">
    <link rel="stylesheet" type="text/css" href="../framework/jquery/datepicker/css/datepicker.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <div class="container-fluid display-table">
   <div class="row display-table-row"> 
    
  <!--  navigation left menu  -->
    <div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu">
       <div class="title-admin-div">
       <h1 class="hidden-sm hidden-xs title-admin">ADMIN Panel</h1>
       </div>
       
       <ul>
         <li class="link ">
           <a href="index.php">
             <span class="glyphicon glyphicon-th"></span>
             <span class="hidden-xs hidden-sm">Dashboard</span>
           </a>
         </li>

         <li class="link ">
           <a href="list-absensi.php">
             <span class="glyphicon glyphicon-copy"></span>
             <span class="hidden-xs hidden-sm">Absensi</span>
           </a>
         </li>

         <li class="link active">
           <a href="#collapse-trans" data-toggle="collapse">
             <span class="glyphicon glyphicon-briefcase"></span>
             <span class="hidden-xs hidden-sm">Transaksi</span>
           </a>
           <ul class="collapse collapseable" id="collapse-trans">
              <li>
               <a href="conf-trans.php">
                  <span class="glyphicon glyphicon-ok"></span>
                  <span class="hidden-xs hidden-sm">Konfirmasi</span>
                </a>
              </li>
              <li>
                <a href="list-trans.php">
                  <span class="glyphicon glyphicon-eye-open"></span>
                  <span class="hidden-xs hidden-sm">Daftar Transaksi</span>
                </a>
              </li>
              <li>
               <a href="list-kbli.php">
                  <span class="glyphicon glyphicon-share-alt"></span>
                  <span class="hidden-xs hidden-sm">Pengembalian</span>
                </a>
              </li>           
            </ul>
         </li>

         <li class="link ">
           <a href="#collapse-buku" data-toggle="collapse">
             <span class="glyphicon glyphicon-book"></span>
             <span class="hidden-xs hidden-sm">Koleksi Buku</span>
            <!-- <span class="label label-success pull-right hidden-sm hidden-xs">10</span> -->
           </a>
           <ul class="collapse collapseable" id="collapse-buku">
            <li>
            <a href="new-pust.php">
             <span class="glyphicon glyphicon-pencil"></span>
             <span class="hidden-xs hidden-sm">Koleksi Baru</span>
           </a>
             </li>
            <li>
            <a href="list-pust.php">
              <span class="glyphicon glyphicon-eye-open"></span>
              <span class="hidden-xs hidden-sm">Daftar Koleksi</span>
            </a>
            </li>
            </ul>
         </li>

         <li class="link ">
           <a href="#collapse-anggota" data-toggle="collapse">
             <span class="glyphicon glyphicon-user"></span>
             <span class="hidden-xs hidden-sm">Anggota</span>
           </a>
           <ul class="collapse collapseable" id="collapse-anggota">
            <li>
              <a href="new-member.php">
             <span class="glyphicon glyphicon-pencil"></span>
             <span class="hidden-xs hidden-sm">Anggota Baru</span> 
              </a>
            </li>
            <li>
            
              <a href="list-member.php">
              <span class="glyphicon glyphicon-eye-open"></span>
              <span class="hidden-xs hidden-sm">Daftar Anggota</span> 
              </a>
            </li>
           </ul>
         </li>
        
         <li class="link ">
           <a href="list-krisar.php">
             <span class="glyphicon glyphicon-comment"></span>
             <span class="hidden-xs hidden-sm">Komentar</span>
           </a>
         </li>
       </ul>
    </div>
     
    <!--* main content right *-->
<div class="col-md-10 col-sm-11 display-table-cell valign-top">
      <div class="row">
        <header id="cont-header" class="clearfix">
          <div class="col-md-12">
          <nav class="navbar-default pull-left">
            <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </nav>

            <!--input type="text" class="hidden-sm hidden-xs" id="cont-search-field" placeholder="Search something here....."-->
          </div>
          <div class="col-md-12">
           <ul class=" hidden-sm hidden-xs">
            <li class=" pull-left"> <img src="img/logopal.png" width="35" height="40"> </li>
            <li class="hidden-xs welcome pull-left">Perpustakaan SMKN 3 Buduran<br> Jl Jenggolo No.1-C, Buduran, Kabupaten Sidoarjo</li>

            <!--li class="fixed-width ">
              <a href="#">
                <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                <span class="label label-success">3</span>
              </a>
            </li>
            <li class="fixed-width">
              <a href="#">
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                <span class="label label-primary">3</span>
              </a>
            </li-->

            <li class="pull-right">
              <span class="glyphicon glyphicon-user"></span>
              <label class="welcome" style="margin-right: 20px; margin-top: 10px;"><?php echo $_SESSION['NAMA']; ?></label>
              <a href="php/logout.php">
                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                Log Out
              </a>
            </li>
          
           </ul>

          </div>
        </header>
      </div>

      <div id="content">
         <h3 class="title-page"><span class="glyphicon glyphicon-briefcase glyphicon-title"></span> Input Data Pengembalian Buku <a href="list-pust.php"><button class="btn btn-warning pull-right" style="margin-right:60px;margin-top:11px;"><label class="glyphicon" style="font-size:15px;"></label>Pilih Buku</button></a>
         </h3>
       <hr>

          <?php 
            include "/php/login.php";

			$NIS = $_GET ['NIS'];
      $NO = $_GET ['NO'];

//            $view = "SELECT pinjam.JUDUL, anggota.NAMA, pinjam.NIS, anggota.HP, anggota.ALAMAT, pinjam.TGL, pinjam.TGLB FROM pinjam INNER JOIN anggota ON pinjam.NIS=anggota.NIS;";

// aktifkan jika di list-pust peminjaman aktif  $view = "SELECT * FROM `data_buku` WHERE `NO` = $NO ";
//            $view = "SELECT * FROM `pinjam` WHERE `NIS`=$NIS ";
			$view ="SELECT pinjam.NO, pinjam.JUDUL, pinjam.KATEGORI, pinjam.CODE, pinjam.NIS, pinjam.TGL, anggota.NAMA FROM pinjam INNER JOIN anggota ON pinjam.NIS=anggota.NIS WHERE pinjam.NO=$NO AND anggota.NIS=$NIS;";
            $viewquery = mysqli_query ($login, $view);
            $jadi = mysqli_fetch_array ($viewquery);

/*          $rngpinjam = "SELECT DATEDIFF(TGLB, $TGL2) AS rngpinjam FROM pinjam WHERE NIS=$NIS";
            $viewrngpinjam= mysqli_query ($login, $rngpinjam);
            $so = mysqli_fetch_array($viewrngpinjam);  */

/*           	$tglpinjam = "SELECT TGL FROM pinjam WHERE NIS=$NIS";
            $viewtglpinjam = mysqli_query ($login, $tglpinjam);
            $so2 = mysqli_fetch_array($viewtglpinjam);
*/
			$TGLP = $jadi['TGL']; 
			$TGLB  = date('Y-m-d');
			$Namapeminjam = $jadi['NAMA']; 

			$tglpinjam = date_create("$TGLP");
			$tglbalik  = date_create("$TGLB");
			$diff      = date_diff($tglpinjam,$tglbalik);
			$selisih   = $diff->format("%a");

			if ($selisih > 7) {
				$telat = $selisih-7;
				$denda = $telat*500;
				echo "<script language='javascript' type='text/javascript'>";
				echo "alert('$Namapeminjam, telat mengembalikan buku $telat hari, jadi denda Rp$denda')";
				echo "</script>";
			} else {
				$denda = 0;
				echo "<script language='javascript' type='text/javascript'>";
				echo "alert('$Namapeminjam, telah mengembalikan buku tepat waktu :D')";
				echo "</script>";
			}
//            $totimeskr = strtotime($TGL);
//            $totimeblk = strtotime($TGLB);
//            $odayskrng = date('d', $totimeskr);
//            $odaybalik = date('d', $totimeblk);
//			echo $TGL;
//            echo $odayskrng."minus";
//            echo $odaybalik."<br>";
//            echo "kamu telat $telat hari, maka denda $denda";

            /*if ( $tglskrng>$tglbalik) {
            $telat    = $diff->format("%a");
			$denda    = ($telat*500);
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('Telat $telat hari, denda Rp$denda ')";
			echo "</script>";
           	}
           	elseif ($odayskrng<$odaybalik)  {
           	$denda = 0;
           	echo "<script language='javascript' type='text/javascript'>";
			echo "alert(' Pengembalian buku tepat waktu :D ')";
			echo "</script>"; 
           	 }
           	else {
           	$denda = 0;
           	echo "<script language='javascript' type='text/javascript'>";
			echo "alert(' Pengembalian buku tepat waktu :D ')";
			echo "</script>";
           	}*/
          ?>

       <div class="content-inner container-fluid">
        <div class="row">
         <div class="col-lg-6 col-md-12 col-sm-12">

          <form method="POST" action="../php/post-kbli-trans.php?NIS=<?php echo $jadi['NIS'];?>&NO=<?php echo $jadi['NO'];?>">

           <div class="form-group">
            <label class="deskripsi-textbox">NIS</label>
            <input type="text" readonly class="form-control sepertiga-width nospace" name="NIS" value="<?php echo $jadi['NIS']; ?>" placeholder="NIS" maxlength="10" required>
            <label class="deskripsi-textbox deskripsi-sejajar">Nama Peminjam</label>
            <input type="text" readonly class="form-control sejajar sepertiga-width" name="NAMA" value="<?php echo $Namapeminjam ?>" placeholder="NAMA" required style="float:right;margin-top:-34px;margin-right: -26px;">
           </div>

           <div class="form-group">
            <label class="deskripsi-textbox">Judul Buku</label>
            <input type="text" readonly class="form-control half-width" value="<?php echo $jadi['JUDUL']; ?>" name="JUDUL" placeholder="Judul Buku" maxlength="60" required>
           </div>

           <div class="form-group">
            <label class="deskripsi-textbox">Kategori</label>
            <input type="text" readonly class="form-control sepertiga-width" value="<?php echo $jadi['KATEGORI']; ?>" name="KATEGORI" placeholder="Judul Buku" maxlength="60" required>

            <!--label class="deskripsi-textbox">Kategori Buku</label>
            <select data-placeholder="Pilih Kategori Buku" name="KATEGORI" class="form-control sepertiga-width" required>
              <option value="<?php echo $jadi['KATEGORI'];?>" selected hidden><?php echo $jadi['KATEGORI']; ?></option>
              <option value="Horror">Horror</option>
              <option value="Comedy">Teknologi</option>
              <option value="Ensiklopedi">Ensiklopedi</option>
              <option value="Agama">Agama</option>
              <option value="Fiksi">Fiksi</option>
              <option value="Non-Fiksi">Non-Fiksi</option>
              <option value="Pendidikan">Pendidikan</option>
            </select-->
            <label class="deskripsi-textbox deskripsi-sejajar">Kode Buku</label>          
            <input type="text" class="form-control sepertiga-width nospace" name="CODE" value="<?php echo $jadi['CODE'] ?>" placeholder="Tanggal Kembali" maxlength="10" required style="float:right;margin-top:-34px;margin-right: -26px;">

           </div>

           <div class="form-group">
            <label class="deskripsi-textbox">Tanggal Kembali</label>
            <input type="text" readonly class="form-control sepertiga-width nospace" value="<?php echo $TGLB; ?>" name="TGLB" placeholder="Tanggal Kembali " maxlength="4" required>
            <label class="deskripsi-textbox deskripsi-sejajar">Denda (Rp)</label>          
            <input type="text" readonly name="DENDA" class="form-control sepertiga-width nospace" value="<?php echo $denda ?>" placeholder="Tanggal Kembali" maxlength="10" required style="float:right;margin-top:-34px;margin-right: -26px;">
           </div>

            <div class="clearfix">
              <button type="submit" class="btn btn-primary pull-right">Post</button>
            </div>
           </form>
              <a href="list-trans.php"><button class="btn btn-primary pull-left" style="margin-top:-30px;">Lihat Transaksi</button></a>
           </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <img src="img/npinjam.png" style="float:right; width:420px; height:300px; margin-top: -50px;" />
            </div>           
          </div>
         </div>
        </div>

      <div class="row">
      <footer id="admin-footer" class="clearfix">
      <div class="pull-left"><b>Copyright</b> &copy; 2016 </div>
      <div class="pull-right"><b>Ivan Aries Rizaldy</b></div>
      </footer>
      </div>
    </div>
   </div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../framework/jquery/jquery.min.js"></script>
  <script src="../framework/jquery/chosen/chosen.jquery.min.js"></script>
  <script type="text/javascript" src="js/new-all.js"></script>
  <script src="../framework/jquery/datepicker/js/bootstrap-datepicker.js"></script>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../framework/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/default.js"></script>
 </body>
</html>