<!doctype html>
<html>
    <head>
        <title>Easel</title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mainstyle.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.1.css" />
    </head>
    <body> 
    
           
    		
    
      <nav class="navbar nav navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>        
                <a href="main.php"><img class="logo" src="/home/oboon/public_html/Easel/public/uploads/Easel.png"/></a>
                <a href="about.php"><button "type="button" class="btn btn-info" value="About" name="about">About</button></a>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
              <!-- if not logged in display sign in form in nav bar-->
              <?php if(!isset($_SESSION["username"])) { ?>
                <form  action="login.php" class="navbar-form navbar-right" method="post">
                  <div class="form-group">
                    <input type="text" name="username" placeholder="username" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" placeholder="password" class="form-control">
                  </div>
                  <button type="submit" name="login" value="login" class="btn btn-info">Sign in</button>
                </form>
                <!-- Else if logged in display logout button in navbar-->
                <?php } else { ?>
                    <div class="form-group">
                    <form method="post" action="logout">
                	<button type="submit" value="logout" name="logout" class="btn btn-info logout">Logout</button>
                	</form>
                	</div>
                	<!--Form for image Upload-->       
                	       <div class="uploadform , view" id="UploadForm">
                	           <form action="upload.php" method="post" enctype="multipart/form-data">
                	               <p>Select image to upload:</p>
                	               <input type="file" name="fileToUpload" value="Browse" id="fileToUpload">
                	               <br>
                	               <input type="submit" value="Upload" name="submit">
                	           </form>
                	       </div>
                <?php } ?>
              </div><!--/.navbar-collapse -->
            </div>
          </nav>  	        	
        	
        
 </nav>