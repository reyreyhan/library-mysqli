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
    <link rel="stylesheet" type="text/css" href="css/sweetalert/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="css/sweetalert/facebook/facebook.css">
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

<!--      <div class="container-fluid primary-bg text-center">
        <h3>Who Am I?</h3>
          <img src="img/readlikeabos.jpg" alt="Foto Admin Yang Tamvan" class="img-circle img-responsive"style="display:inline">
       <h3>I'm Administrator</h3>
      </div> -->

      <div class="container-fluid content text-center">
        <!-- h3 class="font-head2">PERPUSTAKAAN</h3 -->
        <div class="row">
          <a href="#" class="set-glyph"><span class="fa fa-pencil-square-o fa-5x"></span></a>
            <h4>Daftar Hadir Perpustakaan</h4>
        </div>
            <div class="content-menu">
              <form name="myForm2" method="POST" action="php/absn-prs.php" onsubmit="return validateAbsensi();">
              <div class="col-lg-3"></div>
              <div class="col-lg-6">
                  <div class="form-group">
                    <label class="pull-left">Nama</label>
                    <input type="text" data-toggle="popover" data-content="Nama Lengkap" class="form-control hurufsaja" name="NAMA" placeholder="Masukkan Nama" style="text-transform:capitalize;">
                  </div>

                  <div class="form-group">
                    <label class="pull-left">Kelas</label><br>
                  </div>
                  <div class="form-group">
                    <select class="form-control sepertiga-width pull-left" name="KELAS" style="width:130px;">
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                        <option value="XIV">XIV </option>
                        <option value="Alumni">Alumni</option>
                    </select>
                  </div>
                    <select class="form-control" name="JURUSAN" style="float:right; width: 340px;">
                        <option value="Teknik Komputer & Jaringan-1">Teknik Komputer & Jaringan-1</option>
                        <option value="Teknik Komputer & Jaringan-2">Teknik Komputer & Jaringan-2</option>
                        <option value="Gambar Rancang Bangun Kapal-1">Gambar Rancang Bangun Kapal-1</option>
                        <option value="Gambar Rancang Bangun Kapal-2">Gambar Rancang Bangun Kapal-2</option>
                        <option value="Teknologi Pengelasan Kapal">Teknologi Pengelasan Kapal</option>
                        <option value="Teknik Pemesinan Kapal">Teknik Pemesinan Kapal</option>
                        <option value="Instalasi Pemesinan Kapal">Instalasi Pemesinan Kapal</option>
                        <option value="Mekanik Otomotif">Mekanik Otomotif</option>
                        <option value="Teknik Pendingin Tata Udara">Teknik Pendingin Tata Udara</option>
                        <option value="Interior Kapal">Interior Kapal</option>
                        <option value="Konstruksi Kapal Baja">Konstruksi Kapal Baja</option>
                        <option value="Kelistrikan Kapal">Kelistrikan Kapal</option>
                    </select> 

                  <!--div class="form-group" hidden>
                    <label>Tanggal</label>
                      <div class="input-group">
                        <input type="text" class="form-control"  name="TGL" value="<!?php $tgl=date('Y-m-d'); echo $tgl; ?>">
                      </div>
                  </div-->          

                  <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary pull-right" style="margin-top:30px;">

              </div>
              <div class="col-lg-3"></div>
              </form>
            </div>
        </div>

      
      <footer class="footer-distributed footer hidden-xs hidden-sm hidden-md" style="font-family: 'Raleway', sans-serif;">
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
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	   <script src="../framework/jquery/jquery.min.js"></script>
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../framework/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/default.js"></script>
    <script type="text/javascript" src="js/sweetalert.min.js"></script>
  </body>
</html>