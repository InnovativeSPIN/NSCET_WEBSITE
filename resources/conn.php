<?php
    session_start();

    $colle_Name ="NSCET";
    
    // $db_host = "localhost";
    // $db_user = "root";
    // $db_pass = "";
    // $db_name = "nscet_web";

    $db_host = "localhost";
    $db_user = "nscet_web";
    $db_pass = "Vd#Dn)~Dz)hdN5H";
    $db_name = "nscet_web";

    $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    if(mysqli_connect_error())
    {
        header('location:404.php');
    }
    mysqli_set_charset($conn, "utf8mb4");

    date_default_timezone_set('Asia/Calcutta');
    function siteURL() 
    {
        $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $domainName = $_SERVER['HTTP_HOST'];
        return $protocol . $domainName . ":8080/adminLTE/";
    }
    define("SITE_URL", siteURL());
?>