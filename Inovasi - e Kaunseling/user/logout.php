<?php
//mulakan sesi login
    session_start();

    $_SESSION = array();
//tamatkan sesi login
    session_destroy();
//lencongkan ke login.php
    header('location:landingpage.php');
?>

 