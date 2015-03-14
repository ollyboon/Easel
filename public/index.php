<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>


<div class="nav-bar">
    <img class="logo" src="images/nav.png">
</div>

<div class="login-box">
    <form action="login.php"  method="post">
        <p>Username</p> <input type="text" name="username" value="" /><br />
        <p>Password</p> <input type="password" name="password" value="" /><br />
        <input type="submit" name="login" value="Login" /> 
    </form>
</div>
 
<?php include_once("../includes/templates/footer.php"); ?>        