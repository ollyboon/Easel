<?php
//call redirect function 
 require_once("../includes/functions.php");
 //specify upload directory as target
$target_dir = "uploads/";
//select target directory and file
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//allow only 1 item
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
    //if filename is valid echo success string
        $_SESSION["message"] = "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    //else echo unsuccessful string and do not upload file    
    } else {
        $_SESSION["message"] = "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists, if it does do not upload
if (file_exists($target_file)) {
    $_SESSION["message"] = "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size, limit to specified number. if it exceeds do not upload and echo unsuccessful string.
if ($_FILES["fileToUpload"]["size"] > 6000000) {
    $_SESSION["message"] = "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats. Check for specified format. If not a specified format do not upload and post unsuccessful string. 
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $_SESSION["message"] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// $uploadOK 0 means it could not upload the file. Echo unsuccessful string. 
if ($uploadOk == 0) {
    $_SESSION["message"] = "Sorry, your file was not uploaded.";
//redirect to main if upload was unsuccessful.
    redirectTo("main.php");
// if everything is ok, try to upload file
//Get target file from "Filetoupload" and move target directory with $_FILES name not temporary name, and echo success string.
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $_SESSION["message"] = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
//Redirect once upload is complete.        
        redirectTo("main.php");
//If upload wad unsuccessful echo error.         
    } else {
        $_SESSION["message"] = "Sorry, there was an error uploading your file.";
    }
    
    
}
?>