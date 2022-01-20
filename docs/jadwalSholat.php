<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Check Apa Hari Ini? - luuzoid</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>
<style>
  ::-webkit-scrollbar {
    width: 3px;
  }

  ::-webkit-scrollbar-track {
    background: transparent;
  }

  ::-webkit-scrollbar-thumb {
    background: #5F73E3;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: #5F73E3;
  }

  body {
    background: #F2F3F9;
  }

  .container {
    background: transparent;
  }

  #myInput {
    background-image: url('https://www.w3schools.com/css/searchicon.png');
    background-position: 10px 12px;
    background-repeat: no-repeat;
    width: 100%;
    font-size: 16px;
    padding: 12px 20px 12px 40px;
    border: 1px solid #ddd;
    margin-bottom: 12px;
  }

  #myUL {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }

  #myUL li a {
    /* Prevent double borders */
    background-color: transparent;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    color: black;
    display: block
  }

  #myUL li a:hover:not(.header) {
    font-weight: bold;
  }

  #more {
    display: none;
  }

  ul#more {
    list-style-type: none;
  }

  button {
    border: none;
    background: transparent;
    font-size: 30px;
  }

  #myBtn {
    background: transparent !important;
    color: blue !important;
    float: right !important;
    margin-bottom: 25px !important;
    border: 0 solid transparent !important;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2) !important;
  }
</style>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <h1 class="navbar-brand-img" style="color: #6772E5 !important;font-family: 'Trebuchet MS', sans-serif;"><i class="ni ni-books" style="font-size: 20px !important;"></i> luuzoid</h1>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="../index.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="text-red ni ni-active-40"></i>
                <span class="nav-link-text">COVID19 Tracker</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="text-orange ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Gempa Bumi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./docs/jadwalSholat.php">
                <i class="text-success ni ni-money-coins"></i>
                <span class="nav-link-text">Jadwal Sholat</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <i class="text-blue ni ni-chart-bar-32"></i>
                <span class="nav-link-text">Cuaca</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active-pro" href="">
                <i class="ni ni-curved-next"></i>
                <span class="nav-link-text">API Details</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Jadwal Sholat</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Documentation</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Jadwal</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">

            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
              <div class="container">
              

              <iframe src="https://curl.luuzoid.repl.co/jadwal.php" style="border:none;" height="750px" width="100%" title="Iframe Example"></iframe>

          </div>
          </table>
          </div>


            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>