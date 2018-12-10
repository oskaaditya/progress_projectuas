<?php
    session_start();
    if(!isset($_SESSION["login"]))
    {
        echo $_SESSION["login"];
        header("Location:../Login/login.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="img/png" href="img/icons/favicon.ico"/>
    <title>Home - Layanan PLN</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../Home/home.php">PT. PLN (PERSERO)</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../Home/home.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Home/logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">SELAMAT DATANG PADA LAYANAN ONLINE KAMI</h1>
        <p class="lead">Bagian ini memberi semua informasi terkini untuk membantu Anda melakukan transaksi listrik PLN dengan lebih efisien. Anda dapat memilih untuk pasang listrik baru, melakukan perubahan daya, dan melakukan sambungan listrik sementara maupun pengaduan gangguan dan layanan listrik lainnya. Melakukan transaksi listrik PLN tidak pernah semudah ini dengan segala sesuatu di bawah satu atap.</p>
      </header>

      <!-- Page Features -->
      <div class="row text-center">
        

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="../Home/img/rubahdaya.jpg" alt="" height="200">
            <div class="card-body">
              <h4 class="card-title">Perubahan Daya</h4>
              <p class="card-text">Layanan permohonan perubahan daya dan migrasi listrik secara online yang cepat, mudah, nyaman, dan aman serta dapat dimonitor prosesnya culpa natus architecto.</p>
            </div>
            <div class="card-footer">
              <a href="../Rubahdaya/rubahdaya.php" class="btn btn-primary">Ubah Daya</a>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="../Home/img/status.jpg" alt="" height="200">
            <div class="card-body">
              <h4 class="card-title">Status Perubahan Daya</h4>
              <p class="card-text">Layanan untuk mengecek data perubahan daya.</p>
            </div>
            <div class="card-footer">
              <a href="../Home/statusdaya.php" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
            <img class="card-img-top" src="../Home/img/listrikpintar.jpg" alt="" height="200">
            <div class="card-body">
              <h4 class="card-title">Listrik Pintar</h4>
              <p class="card-text">Solusi isi ulang dari PLN! Inilah inovasi terkini dari layanan PLN yang lebih menjanjikan kemudahan, kebebasan dan kenyamanan bagi pelanggan.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
            <img class="card-img-top" src="../Home/img/tentangkami.jpg" alt="" height="200">
            <div class="card-body">
              <h4 class="card-title">Tentang Kami</h4>
              <p class="card-text">Profil PT.PLN (PERSERO).</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
  
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
