<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "aansari");
    define("DB_PASS", "aV/s24HKuTc=");
    define("DB_NAME", "aansari");

    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno()) {
        die("Database connection failed: " . 
        mysqli_connect_error() . 
        " (" . mysqli_connect_errno() . ")"
        );
    }
?>