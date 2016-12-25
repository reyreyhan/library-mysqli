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

    <style type="text/css">

.filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}

    </style>





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
          <li><a href="#">Menu</a></li>
          <li><a href="#">About</a></li>
          </ul>
        </div>
       </div>
     </nav>

      <div class="container-fluid content text-center">
        <!-- h3 class="font-head2">PERPUSTAKAAN</h3 -->
        <div class="row">
          <a href="#" class="set-glyph"><span class="fa fa-book fa-5x" style="margin-top:40px;"></span></a>
            <h4>Berikut ini adalah daftar koleksi buku perpustakaan Kami.</h4>
                
        <div class="panel panel-primary filterable">
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Kode Buku" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Judul Buku" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Kategori" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Tahun" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Hapus" disabled></th>
                        <th><button class="btn btn-primary btn-xs btn-filter pull-right">Cari</button></th>

                    </tr>
                </thead>
                <tbody>

                <?php
                include "php/login.php";
                ?>
                <?php
                  $view = "SELECT * FROM data_buku";
                  $viewquery= mysqli_query($login, $view);
                  while($jadi = mysqli_fetch_array($viewquery))
                  {
                ?>
                         <tr>
                        <td><?php echo $jadi['NO']; ?></td>
                        <td><?php echo $jadi['JUDUL']; ?></td>
                        <td><?php echo $jadi['TAHUN']; ?></td>
                        <td><?php echo $jadi['KATEGORI']; ?></td>                
                        <td><a href="../admin/edt-pust.php?no_urut=<?php echo $jadi['no_urut']; ?>"><label class="fa fa-hand-pointer-o fa-1x"></label></a></td>
                         </tr>
                <?php
                  }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
/*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
</script>

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
    </footer> 
  </div -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
       <script src="../framework/jquery/jquery.min.js"></script>
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../framework/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/default.js"></script>
    <script src="jq/jq1.js"></script>
    <script src="jq/jq2.js"></script>

  </body>
</html>