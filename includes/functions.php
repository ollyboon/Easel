<?php 
//defining new "RedirectTo" custom function.
    function redirectTo($newLocation) {
        header("Location: " . $newLocation); 
        exit; 
    }
?>