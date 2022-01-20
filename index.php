<?php

    function getStringBetween($teks, $sebelum, $sesudah) {
      
      $teks = ' '.$teks;
      $ini = strpos($teks,$sebelum);
      if($ini == 0) return '';
      $ini += strlen($sebelum);
      $panjang = strpos($teks, $sesudah, $ini) - $ini;
      return substr($teks, $ini, $panjang);

    }

    // COVID19 Tracker
    $covid = file_get_contents("https://api.kawalcorona.com/indonesia/");
    $dataCovid = json_decode($covid, true);

    // GEMPA BUMI
    $gempaUrl = file_get_contents("https://bmkggoid-rest-api.luuzoid.repl.co/api/gempa/terkini");
    $gempa = json_decode($gempaUrl, true);
    // $gempa = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");

    // PRAKIRAAN CUACA
    $url = file_get_contents("https://bmkggoid-rest-api.luuzoid.repl.co/api/cuaca/");
    $cuaca = json_decode($url, true);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Check Apa Hari Ini? - luuzoid</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">

  <style>
    ::-webkit-scrollbar {
      width: 3px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: transparent; 
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #5F73E3; 
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #5F73E3; 
    }
  </style>
</head>

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
              <a class="nav-link active" href="">
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
              <a class="nav-link" href="./docs/covidTracker.php">
                <i class="text-red ni ni-world-2"></i>
                <span class="nav-link-text">COVID19 Tracker</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./docs/gempaBumi.php">
                <i class="text-orange ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Gempa Bumi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./docs/jadwalSholat.php">
                <i class="text-success ni ni-calendar-grid-58"></i>
                <span class="nav-link-text">Jadwal Sholat</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./docs/Cuaca.php">
                <i class="text-blue ni ni-chart-bar-32"></i>
                <span class="nav-link-text">Cuaca</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./docs/mataUang.php">
                <i class="text-purple ni ni-money-coins"></i>
                <span class="nav-link-text">Mata Uang</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active-pro" href="#api-details">
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
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
              </nav>
              <h2 class="d-none d-md-inline-block ml-md-4" style="text-shadow: 2px 2px #FFF;font-size: 21px;color: black;background:#E9ECEF;padding:9px;border-radius: 6px;letter-spacing: 5px;" id="time">
              </h2>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">COVID19 Tracker</h5>
                      <span class="h2 font-weight-bold mb-0">Indonesia</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-world-2"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-warning mr-2"><i class="ni ni-curved-next" style="font-size: 13px !important;"></i> <?php echo $dataCovid[0]['positif']; ?></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats" data-toggle="tooltip" data-placement="top" title="<?php echo $gempa['gempa_terkini'][0]['waktu_gempa']; ?>">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Gempa Bumi</h5>
                      <span class="h2 font-weight-bold mb-0" style="font-size: 15px !important;">
                      
                      <?php 
                      
                      // if(strlen($gempa->gempa->Dirasakan) > 12) {
                      //   echo substr($gempa->gempa->Dirasakan, 0, 11)."..";

                      // }

                        echo "<marquee>".$gempa['gempa_terkini'][0]['wilayah']."</marquee>";
                      ?>
                    
                    
                    </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-orange mr-2" style="color: #FBA340 !important;"><i class="ni ni-curved-next"></i> <?php echo $gempa['gempa_terkini'][0]['magnitudo']; ?> Magnitudo</span>
                    <!-- <span class="text-nowrap" style="float: right !important;"><img height="25" width="50" src="https://data.bmkg.go.id/DataMKG/TEWS/<?php echo $gempa->gempa->Shakemap; ?>"></span> -->
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats" data-toggle="tooltip" data-placement="top">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Jadwal Sholat</h5>
                      <span class="h2 font-weight-bold mb-0">Surabaya</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-calendar-grid-58"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mb-0 text-sm">
                    <span class="text-nowrap"><div id="demo" style="float: left !important;margin-top: 17px;color: #2DCE94 !important;"></div></span>
                  </p>
                  <br>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Cuaca</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $cuaca['daftar_cuaca'][8]['namaKota']; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="mr-2" style="color: #1187EF !important;font-weight: 600 !important;">
                    <?php

                      // if($cuaca['daftar_kota'][34]['suhu'] === "Cerah") {
                      //   echo ">30° ";
                      // }

                      echo $cuaca['daftar_cuaca'][8]['suhu'];

                    ?>
                    </span>
                    <span class="text-nowrap">
                    <?php

                      // if($cuaca['daftar_kota'][34]['kelembapan'] === "Cerah") {
                      //   echo "Cerah Berawan";
                      // }

                      echo $cuaca['daftar_cuaca'][8]['cuaca'];
                    ?>
                    </span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-8">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-light text-uppercase ls-1 mb-1">Overview</h6>
                  <h5 class="h3 text-white mb-0">COVID19 Tracker</h5>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="chart-dark" class="chart-canvas" width="20" height="9"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header bg-transparent" style="background: #F6F9FC !important;">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">GMT +7</h6>
                  <h5 class="h3 mb-0">Jadwal Sholat</h5>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="card-body">
            <p style="text-align: center;"><iframe src="https://www.jadwalsholat.org/jadwal-sholat/monthly.php?id=265" height="320" frameborder="0"></iframe></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Gempa Bumi</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Page name</th>
                    <th scope="col">Visitors</th>
                    <th scope="col">Unique users</th>
                    <th scope="col">Bounce rate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      /argon/
                    </th>
                    <td>
                      4,569
                    </td>
                    <td>
                      340
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /argon/index.html
                    </th>
                    <td>
                      3,985
                    </td>
                    <td>
                      319
                    </td>
                    <td>
                      <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /argon/charts.html
                    </th>
                    <td>
                      3,513
                    </td>
                    <td>
                      294
                    </td>
                    <td>
                      <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /argon/tables.html
                    </th>
                    <td>
                      2,050
                    </td>
                    <td>
                      147
                    </td>
                    <td>
                      <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      /argon/profile.html
                    </th>
                    <td>
                      1,795
                    </td>
                    <td>
                      190
                    </td>
                    <td>
                      <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Cuaca</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Referral</th>
                    <th scope="col">Visitors</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      Facebook
                    </th>
                    <td>
                      1,480
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Facebook
                    </th>
                    <td>
                      5,480
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">70%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Google
                    </th>
                    <td>
                      4,807
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">80%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      Instagram
                    </th>
                    <td>
                      3,678
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">75%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      twitter
                    </th>
                    <td>
                      2,645
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">30%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
  <!-- Argon Scripts -->
  <script>
      function checkTime(i) {
        if (i < 10) {
          i = "0" + i;
        }
        return i;
      }

      function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        // add a zero in front of numbers<10
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
        t = setTimeout(function() {
          startTime()
        }, 500);
      }
      startTime();
  </script>
  <script>
    var ucapan;
    var time = new Date().getHours();
    if (time == 4) {
      ucapan = "Waktunya Sholat Shubuh";
    } else if (time == 11) {
      ucapan = "Persiapan Sholat Dzuhur";
    } else if (time == 12) {
      ucapan = "Waktunya Sholat Dzuhur";
    } else if (time == 14) {
      ucapan = "Persiapan Sholat Ashar";
    } else if (time == 15) {
      ucapan = "Waktunya Sholat Ashar";
    } else if (time == 17) {
      ucapan = "Persiapan Sholat Maghrib";
    } else if (time == 18) {
      ucapan = "Waktunya Sholat Maghrib";
    } else if (time == 19) {
      ucapan = "Waktunya Sholat Isya";
    } else {
      ucapan = "Selamat Menunaikan Sholat!";
    }
    document.getElementById("demo").innerHTML = ucapan;
  </script>
  <script>
    var config = {
      type: 'line',
      data: {
        labels: ["Positif", "Sembuh", "Meninggal", "Dirawat"],
        datasets: [
          {
            label: '',
            data: [
                <?php 
                $url = file_get_contents("https://covid19.mathdro.id/api/countries/indonesia/confirmed");
                $data = json_decode($url, true);

                echo $data[0]['confirmed'];
                ?>, 
                <?php 
                echo $data[0]['recovered'];
                ?>, 
                <?php 
                echo $data[0]['deaths'];
                ?>, 
                <?php 
                echo $data[0]['active'];
                ?>
            ],
            fill: false,
            borderColor: 'rgb(255, 255, 255)',
            tension: 0.1
          }
        ]
      },
      options: {
        legend: {
          display: false
        },
        tooltips: {
          callbacks: {
            label: function(tooltipItem) {
            console.log(tooltipItem)
              return tooltipItem.yLabel;
            }
          }
        },
        scales: {
          y: {
            beginAtZero: true
          },
          yAxes: [{
            ticks: {
              callback: function(value) {
                var newValue = value;
                if (value >= 1000) {
                    var suffixes = ["", "rb", "jt", "M","T"];
                    var suffixNum = Math.floor( (""+value).length/3 );
                    var shortValue = '';
                    for (var precision = 2; precision >= 1; precision--) {
                        shortValue = parseFloat( (suffixNum != 0 ? (value / Math.pow(1000,suffixNum) ) : value).toPrecision(precision));
                        var dotLessShortValue = (shortValue + '').replace(/[^a-zA-Z 0-9]+/g,'');
                        if (dotLessShortValue.length <= 2) { break; }
                    }
                    if (shortValue % 1 != 0)  shortValue = shortValue.toFixed(1);
                    newValue = shortValue+suffixes[suffixNum];
                }
                if (!(newValue % 10)) {
                  return newValue;
                }
              }
            }
          }]
        }
      }
    };

    var ctx = document.getElementById("chart-dark").getContext("2d");
    new Chart(ctx, config);
  </script>
</body>

</html>
