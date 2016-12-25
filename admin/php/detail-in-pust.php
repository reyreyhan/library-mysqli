<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php $jadi ?></title>
    <link rel="shortcut icon" href="img/faviconlock.ico" type="image/x-icon">
    <link rel="icon" href="img/faviconlock.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="../framework/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/default.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

               <table class="table" border="1">

                <?php
                include "login.php";

                $NO = $_GET ['NO'];
                $view = "SELECT * FROM `data_buku` WHERE `NO` = $NO ";
                $viewquery = mysqli_query ($login, $view);
                $jadi = mysqli_fetch_array ($viewquery);

                ?>
                      <tr style="background-color: #2B2B2B; color:white;">
                        <td><strong>Judul Buku</strong></td>
                        <td><strong>Tahun</strong></td>
                        <td><strong>Kategori</strong></td>
                        <td><strong>Kode Buku</strong></td>
                        <td><strong>Edit</strong></td>
                        <td><strong>Hapus</strong></td>
                        <td><a href="#collapse-cari" data-toggle="collapse"><button type="submit" class=" btn btn-default btn-xs" style="background-color: #2B2B2B; color:white;">Cari</button></a></td>
                      </tr>

                      <tr class="collapse collapseable text-center" id="collapse-cari">
                        <td colspan="6"> <input type="text" class="form-control" name="valueToSearch" placeholder="Tulis yang ingin dicari..."></td>
                        <td>
                        <button class="btn btn-default" type="submit" name="search">Search</button>
                        </td>                      
                      </tr>
                
                <?php while($jadi = mysqli_fetch_array($viewquery)):?>  
                     <tr class="text-center">
                        <td><?php echo $jadi['JUDUL']; ?></td>
                        <td><?php echo $jadi['TAHUN']; ?></td>
                        <td><?php echo $jadi['KATEGORI']; ?></td>
                        <td><?php echo $jadi['CODE']; ?></td>
                        <td><a href="../admin/php/edt-pust.php?NO=<?php echo $jadi['NO']; ?>"><label class="glyphicon glyphicon-pencil" style="color:#2B2B2B;"></label></a></td>
                        <td><a href="../admin/php/del-in-pust.php?NO=<?php echo $jadi['NO']; ?>"><label class="glyphicon glyphicon-trash" style="color:#2B2B2B;"></label></a></td>
                        <td><a href="#" onclick="detailPust()"><label class="glyphicon glyphicon-search" style="color:#2B2B2B;"></label></a></td>
                     </tr>
                <?php endwhile; ?>
               </table>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../framework/jquery/jquery.min.js"></script>
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../framework/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/default.js"></script>
  </body>
</html>
</html>