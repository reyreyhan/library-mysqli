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
             <span class="hidden-xs hidden-sm">Daftar Hadir</span>
           </a>
         </li>

         <li class="link ">
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

         <li class="link active">
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
              <span class="deskripsi-textbox">Toggle Navigation</span>
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
         <h3 class="title-page"><span class="glyphicon glyphicon-book glyphicon-title"></span> Input Data Koleksi Baru</h3>
       
       <hr>

       <div class="content-inner">
        <div class="row">
         <div class="col-lg-6 col-md-12 col-sm-12">

          <form method="POST" action="../php/post-new-pust.php">

           <div class="form-group disabled hidden">
            <label class="deskripsi-textbox">Nomer</label>
            <input type="int" class="form-control half-width" name="NO" maxlength="5" id="NO">
           </div> 

           <div class="form-group">
            <label class="deskripsi-textbox hidden">Judul Buku</label>
              <input type="text" class="form-control half-width" name="JUDUL" placeholder="Judul Buku" id="JUDUL" maxlength="60" onkeyup="getCode()" required>
           </div> 

           <div class="form-group">
            <label class="deskripsi-textbox hidden">Kategori</label>
           <select data-placeholder="Pilih Kategori Buku" name="KATEGORI" class="form-control half-width" id="KATEGORI" onchange="getCode()" required>
              <option value="" selected hidden disabled>Kategori Buku</option>
              <option value="Teknologi">Teknologi</option>
              <option value="Biografi">Biografi</option>
              <option value="Agama">Agama</option>
              <option value="Matematika">Matematika</option>
              <option value="Kamus">Kamus</option>
              <option value="Novel">Novel</option>
              <!--option value="Umum">Umum</option>
              <option value="Teknologi">Teknologi</option>
              <option value="Sejarah">Sejarah</option>
              <option value="Agama">Agama</option>
              <!option value="Filsafat">Filsafat</option>
              <option value="IMurni">Ilmu Murni</option>
              <option value="ITerapan">Ilmu Terapan</option>
              <option value="KUmum">Karya Umum</option>
              <option value="KTI">Karya Tulis Ilmiah</option>
              <option value="Kesenian">Kesenian</option-->

            </select>
           </div>
           <div class="form-group">
            <label class="deskripsi-textbox hidden">Sinopsis</label>
            <textarea  class="form-control half-width" name="SINOPSIS" placeholder="Sinopsis Buku...." maxlength="100"></textarea> 
           </div>

           <div class="form-group">
            <label class="deskripsi-textbox hidden">Pengarang</label>
            <input type="text" class="form-control sepertiga-width" name="PENGARANG" id="PENGARANG" placeholder="Nama Pengarang" maxlength="40" required onkeyup="getCode()">

            <label class="deskripsi-textbox deskripsi-sejajar hidden">Penerbit</label>
            <input type="text" class="form-control sepertiga-width sejajar" name="PENERBIT" id="PENERBIT" placeholder="Nama Penerbit" maxlength="40" onkeyup="getCode()">
           </div>

           <div class="form-group">
            <label class="deskripsi-textbox hidden">Tahun Terbit</label>
            <select name="TAHUN" id="TAHUN" class="form-control sepertiga-width" required onchange="getCode()">
              <option value="" selected hidden disabled>Tahun Terbit Buku</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
            </select>
         
            <label class="deskripsi-textbox deskripsi-sejajar hidden">Kode Buku</label>
            <input readonly="readonly" type="text" id="CODE" class="form-control sepertiga-width sejajar" name="CODE" placeholder="Kode Buku" maxlength="10" onclick="alert('Mohon tidak mengedit kode buku.')" style="border-color:#2f3337;background-color: #242729;color:#bdc3c7;text-transform: uppercase;">
           </div>

            <div class="clearfix">
              <a href="list-pust.php"><button class="btn btn-primary pull-left">Lihat Koleksi</button></a>
              <button type="submit" class="btn btn-primary pull-right">Post</button>
            </div>
           </form>
           </div>
             <div class="col-lg-6 col-md-12 col-sm-12">
              <img src="img/nbook.png" style="float:right; width:330px; height:300px; margin-right:40px; margin-top: -20px;" />
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