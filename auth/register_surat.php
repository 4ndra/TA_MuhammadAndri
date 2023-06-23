<?php
include('../koneksi.php');
if (isset($_POST['daftar'])) {
   //echo 'kesini';
    $nik = $_POST['nik'];
    $nama = $_POST['nama_lengkap'];
    $tgl = $_POST['tanggal_lahir'];
    $kerja = $_POST['pekerjaan'];
    $agama = $_POST['agama'];
    $status = $_POST['status'];
    $perihal = $_POST['maksud_perihal'];
    $q = "INSERT INTO `surat_pengantar` (nik, nama_lengkap, tanggal_lahir, pekerjaan, agama, status, maksud_perihal) VALUES ('$nik', '$nama', '$tgl', '$kerja', '$agama', '$status', '$perihal')";
    $r = mysqli_query($conn, $q);
    if ($r){
      echo "<script>alert('Registrasi berhasil!!'); document.location='/register-login-ajax-php/assets/index.php';</script>";
    } else {
      echo "<script>alert('Registrasi gagal!!'); document.location='register_surat.php';</script>";
    }

    /*if ($r == true){
      header("location: ");
    } else {
      echo"pendaftaran gagal : ". mysqli_error($conn);
    }*/
   }

    /*if ($q) {
        echo  '<div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                Registrasi Berhasil
                </div>';
    
}*/
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
                        <h2>Registrasi <span class="white">Sekarang</span></h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <form action="" class="main_form" method="post">
                        <div class="row">
                           <div class="col-md-12 ">
                              <input class="contactus" placeholder="Masukkan NIK" type="text" name="nik" id="nik"> 
                           </div>
                           <div class="col-md-12 ">
                              <input class="contactus" placeholder="Masukkan Nama Lengkap" type="text" name="nama_lengkap" id="nama_lengkap"> 
                           </div>
                           <div class="col-md-12 ">
                              <input class="contactus" placeholder="Masukkan Tanggal Lahir" type="date" name="tanggal_lahir" id="tanggal_lahir"> 
                           </div>
                           <div class="col-md-12">
                              <textarea class="textarea" placeholder="Masukkan Pekerjaan" type="text" name="pekerjaan" id="pekerjaan"></textarea>
                           </div>
                           <div class="col-md-12">
                              <select class="contactus" aria-label="Default select example" name="agama" id="agama">
                                <option value="islam">Islam</option>
                                <option value="katolik">Katolik</option>
                                <option value="protestan">Protestan</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                                <option value="konghucu">Konghucu</option>
                            </select> 
                           </div>
                           <div class="col-md-12">
                              <select class="contactus" aria-label="Default select example" name="status" id="status">
                                <option value="menikah">Menikah</option>
                                <option value="pelajar">Pelajar</option>
                            </select> 
                           </div>
                           <div class="col-md-12">
                              <textarea class="textarea" placeholder="Masukkan Perihal" type="text" name="maksud_perihal" id="maksud_perihal"></textarea>
                           </div>
                        
                           <div class="col-md-12">
                              <button class="send_btn" name="daftar" type="submit">DAFTAR</button>
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
                           <p>Copyright 2019 All Right Reserved By <a href="https://html.design/"> Free  html Templates</a></p>
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
      <script type="text/javascript">
	// Optional
	Prism.plugins.NormalizeWhitespace.setDefaults({
		'remove-trailing': true,
		'remove-indent': true,
		'left-trim': true,
		'right-trim': true,
	});
	
	// handle links with @href started with '#' only
	$(document).on('click', 'a[href^="#"]', function(e) {
		// target element id
		var id = $(this).attr('href');

		// target element
		var $id = $(id);
		if ($id.length === 0) {
			return;
		}

		// prevent standard hash navigation (avoid blinking in IE)
		e.preventDefault();

		// top position relative to the document
		var pos = $id.offset().top - 80;

		// animated top scrolling
		$('body, html').animate({scrollTop: pos});
	});
</script>
   </body>
</html>