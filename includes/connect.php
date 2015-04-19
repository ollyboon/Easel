<?php
//various database passwords and usernames for hosting
    define("DB_SERVER", "localhost");
    define("DB_USER", "oboon");
    define("DB_PASS", "eJOJ2YSCILY=");
    define("DB_NAME", "oboon");
//attempt connection to database
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
//if connection fails echo fail string.
    if(mysqli_connect_errno()) {
        die("Database connection failed: " . 
        mysqli_connect_error() . 
        " (" . mysqli_connect_errno() . ")"
        );
    }
?>