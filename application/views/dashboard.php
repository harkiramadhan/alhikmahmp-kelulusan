<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>SDIT AL HIKMAH - Informasi Kelulusan Siswa</title>
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url('/')  ?>assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?= base_url('/')  ?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url('/')  ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= base_url('/')  ?>assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-warning border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><strong><?= $this->session->userdata('nama') ?></strong></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <div class="dropdown-divider"></div>
                <a href="<?= site_url('login/logout') ?>" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-warning pb-6 pt-6">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row justify-content-center">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Nama</h5>
                      <span class="h2 font-weight-bold mb-0"><strong><?= $siswa->nama ?></strong> <br> <small><?= ($siswa->jenkel == 'L') ? 'Laki - Laki' : 'Perempuan' ?></small></span>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">NISN / NIPD</h5>
                      <span class="h2 font-weight-bold mb-0"><strong><?= $siswa->nisn ?></strong><br> <small><?= $siswa->nipd ?></small></span>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Tempat Tanggal Lahir</h5>
                      <span class="h2 font-weight-bold mb-0"><small><?= $siswa->tempat_lahir ?>, </small><strong><?= "<br>".date('d F Y', strtotime($siswa->tanggal_lahir)) ?></strong></span>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                  
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
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h4 class="mb-0"><strong>Data Kelulusan</strong></h4>
                </div>
                <div class="col text-right">
                  <a href="<?= site_url('dashboard/export/' . $siswa->id) ?>" class="btn btn-sm btn-primary"><i class="fas fa-print"></i>&nbsp;&nbsp;Cetak Laporan Kelulusan</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nama</th>
                    <th scope="col" class="text-center">Jenis Kelamin</th>
                    <th scope="col" class="text-center">NIPD</th>
                    <th scope="col" class="text-center">NISN</th>
                    <th scope="col" class="text-center">No Ujian</th>
                    <th scope="col">Tempat Tanngal Lahir</th>
                    <th scope="col">Nama Orang Tua</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><strong><?= $siswa->nama ?></strong></td>
                    <td class="text-center"><?= ($siswa->jenkel == 'P') ? 'Perempuan' : 'Laki - Laki' ?></td>
                    <td class="text-center"><?= $siswa->nipd ?></td>
                    <td class="text-center"><?= $siswa->nisn ?></td>
                    <td class="text-center"><?= $siswa->noujian ?></td>
                    <td><?= $siswa->tempat_lahir.", ".date('d F Y', strtotime($siswa->tanggal_lahir)) ?></td>
                    <td><strong><?= $siswa->nama_ortu ?></strong></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-10 mt-2">
          <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6">
                <div class="copyright text-center  text-lg-left  text-default">
                  <strong>&copy; <?= date('Y') ?> SDIT AL HIKMAH</strong>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= base_url('/')  ?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url('/')  ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('/')  ?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= base_url('/')  ?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url('/')  ?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?= base_url('/')  ?>assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?= base_url('/')  ?>assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="<?= base_url('/')  ?>assets/js/argon.js?v=1.2.0"></script>
</body>

</html>