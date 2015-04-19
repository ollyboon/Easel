<?php
//include session, connect to database and page redirect function. 
    require_once("../includes/session.php");
    require_once("../includes/connect.php");
    require_once("../includes/functions.php");

//If login boxes are filled with username and password...
    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
  
//check database(table called 'Usersignup') for existing username and password combination. Limit to 1 ID only.      	
        $query = "SELECT * FROM Usersignup WHERE USERNAME='{$username}' AND PASSWORD='{$password}' LIMIT 1";
//Send back result of query
        $result = mysqli_query($connection, $query);
//$Result = $User
        if($user = mysqli_fetch_assoc($result)) {
 //If username and password combination exists, begin session and echo welcome message with personalised $User appended to string.   
            $_SESSION["message"] = "Success, welcome back {$user["USERNAME"]}";
            $_SESSION["username"] = $user["USERNAME"];
            $_SESSION["user_id"] = $user["ID"];
//redirect back to main page once login is complete          
			redirectTo("main.php");
//else redirect to main and echo wrong username and password string.			
        } else {
            $_SESSION["message"] = "Wrong username/password";
            redirectTo("main.php");
 
        }

    }
	



?>