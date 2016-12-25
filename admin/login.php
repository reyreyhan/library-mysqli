<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administrator Login</title>
    <link rel="shortcut icon" href="img/faviconkey1.ico" type="image/x-icon">
    <link rel="icon" href="img/faviconkey1.ico" type="image/x-icon">


    <!-- Bootstrap -->
    <link href="../framework/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="../css/default.css" rel="stylesheet">
  </head>

  <body class="login">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">     
            <center><h2><i class="glyphicon glyphicon-user" style="margin-top: 100px; margin-bottom: 50px;"></i> Administrator Login</h2></center>
            <?php  
              include 'php/login.php';
              echo "<link rel='stylesheet' type='text/css' href='css/sweetalert/sweetalert.css'>";
              echo "<link rel='stylesheet' type='text/css' href='css/sweetalert/facebook/facebook.css'>";
              echo "<script type='text/javascript' src='js/sweetalert.min.js'></script>";
              
              if (isset($_POST['USERNAME']) && isset($_POST['PASSWORD'])) {
                $username = $_POST['USERNAME'];
                $password = md5($_POST['PASSWORD']);
                
                $view      = "SELECT * FROM admin where USERNAME='$username' AND PASSWORD='$password'";
                $viewquery = mysqli_query($login, $view);
                $jadi      = mysqli_fetch_array($viewquery);

                $user   = $jadi['USERNAME'];
                $pass   = $jadi['PASSWORD'];
                $iduser = $jadi['ID_USER'];
                $nama   = $jadi['NAMA'];

//                echo "$user=$username"."<br>";
//                echo "$pass=$password";                

                if ($user!=$username && $pass!=$password) {
                   echo "<script language='javascript' type='text/javascript'>";
                   echo "swal({
                          title: 'Oopss....',
                          text: 'Username / Password anda salahh...', 
                          type: 'error'
                        });";
                   echo "</script>";
 
                }
/*                elseif ($user==$username && $pass!=$password) {
                   echo "<script language='javascript' type='text/javascript'>";
                   echo "alert('password anda salah');";
                   echo "</script>";
                }
*/
                else  {
                  session_start();
                  $_SESSION['USERNAME'] =$user;
                  $_SESSION['NAMA']     =$nama;
                  $_SESSION['ID_USER']  =$iduser;
                  ?>
                  <script type="text/javascript">
                  window.location.href='index.php'</script>
                  <?php
                }
              }
            ?>
            <form method="POST">  
              <div class="form-group">
                <input type="text" class="form-control"  name="USERNAME" placeholder="Username" required="" />
              </div>

              <div class="form-group">
                <input type="password" class="form-control" name="PASSWORD"  placeholder="Password" required="" />
              </div>
              
              <div class="form-group" style="margin-top: 50px;">
              <center>
                <button class="btn btn-primary" type="submit">Log in</button>
              </center>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <br />

                <div>
                  <p>©2016 All Rights Reserved. Perpustakaan SMK Negeri 3 Buduran.</p>
                  <p><center>Privacy and Terms</center>
                </div>
              </div>
            </form>
            <div class="col-lg-4"></div>
        </div>
  </body>
</html>
