<?php
    session_start();
    if(!isset($_SESSION["login"]))
    {
        echo $_SESSION["login"];
        header("Location:../Login/login.php");
        exit;
    }
    
    require 'functions.php';
    $pelanggan=query("SELECT * FROM pelanggan");
   
    if(isset($_POST["cari"]))
    {
        $pelanggan=cari($_POST["keyword"]);
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
    <title>Status Daya - Layanan PLN</title>

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

     <h1><center>Daftar Pemohon Ubah Daya</h1>
     <center>
        <form action="" method="post">
            <input type="text" name="keyword" size"40" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
            <button type="submit" name=cari>cari</button>
        </form>
    
    </center>
        <br>
        <div class="container">      
        <table class="table table-grey">
        <thead>
        <tr>
            <th>Id Pelanggan</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Daya</th>
            <th>Daya Tambahan</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($pelanggan as $row):?>
        <tr>
            <td><?= $row["Id"]; ?></td>
            <td><?= $row["Nama"]; ?></td>
            <td><?= $row["Alamat"]; ?></td>
            <td><?= $row["Daya"]; ?></td>
            <td><?= $row["Tambahandaya"]; ?></td>
            <td>
                <a href="edit.php?Id=<?php echo $row["Id"]; ?>">Edit</a>
                <a href="hapus.php?Id=<?php echo $row["Id"]; ?>"onclick="return confirm('Apakah data ini akan dihapus')">Hapus</a>
            </td>
        </tr>
        <?php endforeach;?>
        </table>

  
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
