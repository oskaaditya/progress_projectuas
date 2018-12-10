<?php
    session_start();
    session_destroy();
    session_unset();

    setcookie("Id","",time()-3600);
    setcookie("key","",time()-3600);

    header("location:../Index/index.php");
    exit;
?>