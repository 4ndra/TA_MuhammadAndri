<?php 
session_start();

include '../koneksi.php';
 
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    //cek username
    $q = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
    
    //ambil data dari database tabel login
    if (mysqli_num_rows($q)) {
      echo "<script>alert('Login berhasil!!'); document.location='../dashboard.php';</script>";
    } else {
        echo '<div class="alert alert-danger alert-dismissable"><a href="" class="close" data-dismiss="alert">x</a> <strong class="text-white">Data salah atau belum di verifikasi</strong></div>';
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>potoub</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../assets/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../assets/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../assets/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../assets/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>

         <!-- request -->
         <div id="contact" class="request">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2>Login <span class="white">Sekarang</span></h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <form id="request" class="main_form"  method="post">
                        <div class="row">
                           <div class="col-md-12 ">
                              <input class="contactus" placeholder="username" type="type" name="username" id="password" > 
                           </div>
                           <div class="col-md-12">
                            <input type="password" class="contactus" name="password" id="password" placeholder="password" >
                           </div>
                           <div class="col-md-12">
                              <button class="send_btn" href="../warga_satu/index.php" type="submit" name="submit" id="submit" >Login</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6">
                     <div id="map"></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end request -->
         <!--  footer -->
         <footer>
               <div class="copyright">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <p>Copyright 2023 All Right Reserved By <a href="https://html.design/"> Free  html Templates</a></p>
                        </div>
                     </div>
                  </div>
               </div>
         </footer>
         <!-- end footer -->
      </div>
      <div class="overlay"></div>
      <!-- Javascript files-->
      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/popper.min.js"></script>
      <script src="../assets/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../assets/js/custom.js"></script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>

