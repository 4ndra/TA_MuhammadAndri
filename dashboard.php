<?php

include 'koneksi.php';

//Total data rt1
$get1 = mysqli_query($conn,"SELECT * FROM warga1");
$count = mysqli_num_rows($get1);

//Total data rt2
$get2 = mysqli_query($conn,"SELECT * FROM warga2");
$count2 = mysqli_num_rows($get2);

/*
  session_start();

  if(!$_SESSION['username']){
    header("location: auth/login.php");
    exit;
  } */

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Dashboard</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../register-login-ajax-php/startbootstrap-sb-admin-gh-pages/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  
  </head>
  <body class="main-layout">

  <!--asal-->
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Data Penduduk</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>



            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Penduduk
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="../register-login-ajax-php/warga_satu/index.php">RT01</a>
                                    <a class="nav-link" href="../register-login-ajax-php/warga_dua/index.php">RT02</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="surat/surat_pengantar/index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Data Surat Pengantar
                            </a>
                        </div>
                    </div>
                </nav> 

                    <!-- loader  -->
                    <div class="sb-nav-fixed">
                            <div class="loader"><img src="images/loading.gif" alt="" /></div>
                          </div>

                        <div class="container" style="margin-top: 50px">
                          <div class="row">

                              <div class="col-md-9">
                                <div class="card">
                                  <div class="card-body">
                                    <label>DASBOARD</label>
                                    <hr>

                                    Selamat Datang <?php echo $_SESSION['username'] ?>

                                  </div>
                                </div>
                               
                              </div>

                          </div>
                        </div>

                       
                      <div class="sb-sidenav-footer">
                          <div class="small">Logged in as:</div>
                          Start Bootstrap
                      </div>
                  </nav>
              </div>

              <!--selamat datang-->
              <div class="row">
                  <div class="col-xl-3 col-md-6">
                    <h3>Total Penduduk</h3>
                    
                      </div>
                      <!--Total data penduduk-->
                      <div class="row">
                        <div class="col-xl-3 col-md-6">
                          <div class="card bg-primary text-white mb-4">
                            <div class="row mt-4">
                              <div class="col">
                                <div class="card bg-info"><h1>Total data warga RT01: <?=$count?></h1></div>
                               </div>
                               <div class="col">
                                <br><div class="card bg-info"><h1>Total data warga RT02: <?=$count2?></h1></div>
                               </div>
                            </div>
                        </div>
                      </div>
                      </div>
              </div>
        </div>

              <!--Footer-->
              <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Pencatatan Penduduk Sipil 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

    <!-- Javascript files-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
</body>
</html>