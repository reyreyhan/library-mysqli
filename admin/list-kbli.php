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
    <link rel="stylesheet" type="text/css" href="../framework/jquery/datepicker/css/datepicker.css">
    <link href="../framework/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="css/new-pust.css">
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
         <h3 class="title-page">
          <span class="glyphicon glyphicon-share-alt glyphicon-title"></span> Daftar Pengembalian <a href="list-trans.php">
          <button class="btn btn-warning pull-right" style="margin-right:60px;margin-top:11px;"><label class="glyphicon glyphicon-plus" style="font-size:15px;"></label></button></a>
         </h3>
      <form action="list-kbli.php" method="post">
         <input type="text" class="form-control" name="valueToSearch" style="width:300px;float:right;margin-top:-55px;margin-right: 210px;" placeholder="Tulis yang ingin dicari...">
          <button class="btn btn-primary" type="submit" style="float:right;margin-top:-55px;margin-right: 120px;" name="search">Search</button>

          <input type="text" class="form-control datepicker" name="TGLB" style="width:150px;float:right;margin-top:-20px;margin-right: 210px;" placeholder="Tgl Kembali">
          <input type="text" class="form-control datepicker" name="TGL" style="width:150px;float:right;margin-top:-20px;margin-right: 0px;" placeholder="Tgl Pinjam"> <br>
          <button class="btn btn-primary" type="submit" style="float:right;margin-top:-35px;margin-right: 120px; padding-left:30px;" name="search_tgl">TGL</button>
         <hr>


       <div class="content-inner">
 
       <!-- <label>Tambah data</label> -->

          <div class="table-responsive table-scroll">
               <table class="table table-hover">
                <?php
                include "php/filter-kbli.php";
                ?>
                      <thead style="color:#a8b9bd; border-color:#95A5A6;">
                           <tr>
                        <td><strong>Judul Buku</strong></td>
                        <td><strong>Nama Peminjam</strong></td>
                        <td><strong>Kode Buku</strong></td>
                        <td><strong>NIS</strong></td>
                        <td><strong>Denda</strong></td>
                        <td><strong>Tgl Kembali</strong></td>
                           </tr>
                      </thead>

                <?php?>
                
                <?php while($jadi = mysqli_fetch_array($viewquery)):?>  
                    <tbody style="color:#a8b9bd; border-color:#95A5A6;" >
                     <tr>
                        <td><?php echo $jadi['JUDUL']; ?></td>
                        <td><?php echo $jadi['NAMA']; ?></td>
                        <td><?php echo $jadi['CODE']; ?></td>
                        <td><?php echo $jadi['NIS']; ?></td>
                        <td><center><?php echo $jadi['DENDA']; ?></center></td>
                        <td><?php echo $jadi['TGLB']; ?></td>
                        <!--td><center><a href=".php?NIS=<?php echo $jadi['NIS']; ?>"><button class="btn btn-primary"><label class="glyphicon glyphicon-ok" style="color:#ECF0F1;"></label></button></center></a></td-->
                     </tr>
                    </tbody>
                <?php endwhile; ?>
               </table>

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
  <script type="text/javascript" src="js/new-all.js"></script>
  <script src="../framework/jquery/datepicker/js/bootstrap-datepicker.js"></script>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../framework/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/default.js"></script>

 </body>
</html>