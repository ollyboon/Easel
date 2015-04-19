<!--include session, connect to database, redirect function and header which includes navbar.-->
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
        <link href="css/mainstyle.css" rel="stylesheet">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        

<div class="video-container">
<video autoplay loop muted class="fillWidth">
  <source src="images/sea.mp4" type="video/mp4">
  <source src="images/sea.webm" type="video/webm">
  </video>
</div>
<div class="titlelogo">
<img src="images/easel.png" alt="" />
</div>

<!-- registration form-->
<div class="register-box register">
    <form action="../includes/register.php" method="post">
        <p>Username:</p> <input type="text" name="username" value=""><br>
        <p>Password:</p> <input type="password" name="password1" value=""><br>
        <p>Confirm Password:</p> <input type="password" name="password2" value=""><br>
        <button type="submit" name="register" value="register" class="btn btn-info">Register</button>
    </form>
    <a href="main.php"><img class="enter-btn" src="images/enter.png"/></a>
</div>
<!--include footer--> 
<?php include_once("../includes/templates/footer.php"); ?>        