<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>

 <!--Upload form toggle view-->       
        <script type="text/javascript">
            $("document").ready(function () {
            $('.logo').click(function () {
            $(".uploadform").toggleClass("view");
            });
        });
        </script>
        
   <!--Main page container block-->     
        <div class="pagecontainer container col-md-12">
        	<?php echo message(); ?>
        	<div class="row" id="pictures"></div>
        		<div class="col"></div>
    <!-- Main info panel-->
    <div class="info">
    <p>Welcome to Easel, a website where artists from everywhere can share and view each others work with a simple and easy interface.</p>
    </div>
        
 <!--Include php from image gallery-->   
        	<?php include_once("../public/imgdisplay.php"); ?>
 <!--end page container-->
 <!--footer include-->       
        <?php include_once("/home/oboon/public_html/Easel/includes/templates/footer.php"); ?>