<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Perpustakaan SMKN 3 Buduran</title>
    <link rel="shortcut icon" href="img/faviconlock.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="../framework/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>  
<!--      <div class="container-fluid primary-bg text-center">
        <h3>Who Am I?</h3>
          <img src="img/readlikeabos.jpg" alt="Foto Admin Yang Tamvan" class="img-circle img-responsive"style="display:inline">
       <h3>I'm Administrator</h3>
      </div> -->

     <nav class="navbar navbar-default">
       <div class="container">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <!-- a class="navbar-brand" href="#">Login</a -->
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          </ul>
        </div>
       </div>
     </nav>

      <div class="content-kobuk" data-scroll-index="1">
        <!-- h3 class="font-head2">PERPUSTAKAAN</h3 -->
        <div class="row">
          <div class="text-center">
          <a href="#" class="set-glyph"><span class="fa fa-book fa-5x" style="margin-top:30px;"></span></a>
            <h4>Berikut ini adalah daftar koleksi buku perpustakaan Kami.</h4>
             <form action="kobuk.php" method="post">         
               <table class="table table-striped table-hover" style="margin-top: 50px;">
                <input type="text" class="form-control pull-right" name="valueToSearch" placeholder="Tulis yang ingin dicari..." style="width: 300px; margin: 30px; margin-right: 70px;">   
                 <button class="btn btn-primary fa fa-search fa-lg pull-right" type="submit" name="search" style="margin-right: -400px; margin-top: 30px; padding: 10px;"></button>
                      <thead>
                       <tr class="bg-primary" >
                        <td><strong>JUDUL BUKU</strong></td>
                        <td><strong>TAHUN</strong></td>
                        <td><strong>KATEGORI</strong></td>
                        <td><strong>STATUS</strong></td>
                        <td><strong>PINJAM</strong></td>
                       </tr>
                      </thead>
            </div> 
            
                <?php include "php/filter-kobuk.php" ?>
                <?php while($jadi = mysqli_fetch_array($viewquery)):?>
                 
                      <tr class="">
                        <td><a href="php/detailpust.php?NO=<?php echo $jadi['NO']; ?>"><?php echo $jadi['JUDUL']; ?></a></td>
                        <td><?php echo $jadi['TAHUN']; ?></td>
                        <td><?php echo $jadi['KATEGORI']; ?></td>
                        <td><?php echo $jadi['STATUS']; ?></td>                        
                        <td><a href="php/new-trans.php?NO=<?php echo $jadi['NO']; ?>"><label class="fa fa-hand-pointer-o" style="padding:10px; border-radius: 5px;background-color:#7f8c8d;color:#ecf0f1;"></label></a>
                        </td>
                      </tr>
                  
                      <div data-scroll-index="1"></div>

                <?php endwhile; ?>

              </table>
            </form>
            <a href="#" class="fa fa-arrow-up fa-3x arrow-up" data-scroll-goto="1" style="text-decoration:none;">
            </a>
          </div>
        </div>

<!--
  <div class="">
      <footer class="footer-distributed footer footer-kobuk">
      <div class="footer-left">

        <div>
          <i class="fa fa-map-marker"></i>
          <span>Jalan Jenggolo No.1-C, Sidoarjo, Buduran, Jawa Timur</span>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <span>+62 31 8961218</span>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <span><a href="mailto:smkn3buduran@gmail.com">smkn3buduran@gmail.com</a></span>
        </div>
      </div>

      <div class="footer-right pull-right">
        <p class="footer-school-about">
          <span>About SMKN 3 Buduran</span>

          SMK Negeri 3 Buduran Sidoarjo sebelumnya bernama STM PERKAPALAN SIDOARJO yang pendiriannya mengacu pada perjanjian kerja sama antara Direktorat Jenderal Pendidikan Dasar dan Menengah Departemen Pendidikan dan Kebudayaan dengan Badan Pengkajian dan Penerapan Teknologi (BPPT) dan PT.PAL INDONESIA (Persero).
        </p>

        <div class="footer-icons">
          <a href="https://www.facebook.com/pages/SMKN-3-BUDURAN/117767401585018"><i class="fa fa-facebook"></i></a>
          <a href="https://twitter.com/infostemapal"><i class="fa fa-twitter"></i></a>
          <a href="https://www.instagram.com/instaperkapalan/"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </footer> -->
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	   <script src="../framework/jquery/jquery.min.js"></script>
     <script type="text/javascript" src="js/scrollIt.min.js"></script>
     <script type="text/javascript">
       $(function(){$.scrollIt();});

       $.scrollIt({
          scrollTime: 800       // how long (in ms) the animation takes
        });
     </script>
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../framework/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/default.js"></script>
  </body>
</html>