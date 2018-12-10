<?php
    session_start();

    if(isset($_COOKIE["Id"]) && isset($_COOKIE["username"]))
    {
        $Id = $_COOKIE["Id"];
        $key= $_COOKIE["key"];

        $result = mysqli_query($conn,"SELECT username FROM user WHERE Id=$Id");
        $row=mysqli_fetch_assoc($result);

        if($key === hash("sha256",$row["username"]))
        {
            $_SESSION["login"]=true;
        }
    }
    require 'functions.php';

    if(isset($_POST["login"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");
        
        if(mysqli_num_rows($result)===1)
        {
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password,$row["password"]))
            {
                $_SESSION["login"]=true;

                if(isset($_POST["remember"]))
                {
                    setcookie("Id",$row["Id"],time()+60);
                    setcookie("key",hash(sha256,$row["username"]),time()+60);
                }

                header("Location:../Home/home.php");
                exit;
            }
        }
        $error=true;
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="img/png" href="images/icons/favicon.ico"/>
    <title>Log In - Layanan PLN</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/login.jpg" alt="logins image"></figure>
                        <a href="../Login/registrasi.php" class="signup-image-link">Buat Akun</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <?php if(isset($error)):?>
                            <p style="color:red;font-style=bold">
                            Username dan Password Salah</p>
                        <?php endif?>
                        <form method="POST" class="login-form" id="login-form">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username" required/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="login" class="form-submit" value="Log in"/>
                            </div>
                        </form>
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