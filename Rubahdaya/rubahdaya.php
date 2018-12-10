<?php
    session_start();
    if(!isset($_SESSION["login"]))
    {
        echo $_SESSION["login"];
        header("Location:../Login/login.php");
        exit;
    }

    require 'functions.php';

    if(isset($_POST['submit']))
    {
        //var_dump($_POST);
        //var_dump($_FILES);
        //die();

        if(tambah($_POST)>0)
        {
            echo "
            <script>
                alert('Data Berhasil Disimpan');
                document.location.href='../Home/statusdaya.php';
            </script>

            ";
        }else{
            echo "
            <script>
                alert('Data Gagal Disimpan');
                document.location.href='../Rubahdaya/rubahdaya.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="img/png" href="img/icons/favicon.ico"/>
    <title>Rubah Daya - Layanan PLN </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Data Pemohon Rubah Daya</h2>
                        <form method="POST" class="register-form" id="register-form">
                        <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Id" id="Id" placeholder="Masukkan Id Pelanggan"/>
                            </div>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Nama" id="Nama" placeholder="Masukkan Nama"/>
                            </div>
                            <div class="form-group">
                                <label for="alamat"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="Alamat" id="Alamat" placeholder="Masukkan Alamat" required/>
                            </div>
                            <div class="form-group">
                                <label for="daya1"><i class="zmdi zmdi-tag"></i></label>
                                <input type="text" name="Daya" id="Daya" placeholder="Masukkan Daya" required/>
                            </div>
                            <div class="form-group">
                                <label for="daya2"><i class="zmdi zmdi-tag"></i></label>
                                <input type="text" name="Tambahandaya" id="Tambahandaya" placeholder="Daya Yang Ingin Dirubah" required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="img/register.jpg" alt="register image"></figure
                    </div>
                </div>
            </div>
        </section>


    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>