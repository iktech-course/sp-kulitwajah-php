<?php


include("../db/db_conn.php");

$result = mysqli_query($conn, "SELECT * FROM tbl_penyakit");

while($p = mysqli_fetch_array($result)){
    $penyakit[] = $p;
}

$resultG = mysqli_query($conn, "SELECT * FROM tbl_gejala");

while($g = mysqli_fetch_array($resultG)){
    $gejala[] = $g;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <title>
    Tambah Gejala
  </title>
  
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <span class="ms-1 font-weight-bold text-white">StomachHeal</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
  
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">      
  
    
  <li class="nav-item">
    <a class="nav-link text-white " href="penyakit.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <!-- <i class="material-icons opacity-10">table_view</i> -->
        </div>
      
      <span class="nav-link-text ms-1">Penyakit</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link text-white " href="gejala.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <!-- <i class="material-icons opacity-10">table_view</i> -->
        </div>
      
      <span class="nav-link-text ms-1">Gejala</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link text-white " href="aturan.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <!-- <i class="material-icons opacity-10">table_view</i> -->
        </div>
      
      <span class="nav-link-text ms-1">Aturan</span>
    </a>
  </li>

  <hr class="horizontal light mt-0 mb-2">

  <li class="nav-item">
    <a class="nav-link text-white " href="../action/logout.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <!-- <i class="material-icons opacity-10">table_view</i> -->
        </div>
      
      <span class="nav-link-text ms-1">Keluar</span>
    </a>
  </li>
  
       
        
      </ul>
    </div>
  
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">
      <li class="nav-item d-xl-none ps-0 d-flex m-3 align-items-center">
        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
          <div class="sidenav-toggler-inner">
          <i class="sidenav-toggler-line"></i>
          <i class="sidenav-toggler-line"></i>
          <i class="sidenav-toggler-line"></i>
          </div>
        </a>
      </li>
      <nav aria-label="breadcrumb">
        
        
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="aturan.php">Aturan</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tambah Aturan</li>
        </ol>
  
        
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
  
            
        </div>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a class="nav-link text-body font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>
              
              <span class="d-sm-inline d-none">Admin</span>
              
            </a>
          </li>
  
  
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- End Navbar -->
  <div class="container-fluid py-4">
    
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Tambah gejala</h6>
            </div>
            <form method="post" action="action/aturanTambah.php" role="form">
                
                <div class="mt-5" >Penyakit : </div> <br>

                <div class="input-group input-group-outline mb-3">
                  <!-- <label class="form-label">Email</label> -->
                  <select name="id_penyakit" class="form-control">
                        <option value="">--- PILIH PENYAKIT ---</option>
                    <?php foreach($penyakit as $p){ ?>
                        <option value="<?= $p['id_penyakit'] ?>"><?= $p['id_penyakit'] ?> - <?= $p['name'] ?></option>

                    <?php } ?>
                  </select>
                </div>

                <div class="mt-5" >Gejala : </div> <br>

                <div class="input-group input-group-outline mb-3">
                  <!-- <label class="form-label">Email</label> -->
                  <select name="id_gejala" class="form-control">
                    <option value="">--- PILIH GEJALA ---</option>
                    <?php foreach($gejala as $g){ ?>
                        <option value="<?= $g['id_gejala'] ?>"><?= $g['id_gejala'] ?> - <?= $g['name'] ?></option>

                    <?php } ?>
                  </select>
                </div>
                    
                <div class="text-center">
                  <button type="submit" class="btn btn-lg bg-primary btn-lg w-100 mt-4 mb-0 text-white">Simpan</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>