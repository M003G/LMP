<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/jquery.bannerSlider.css">
    <link rel="stylesheet"  href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Eater" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Poppins|Work+Sans" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="96x96" href="image/favicon-96x96.png">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script rel="JavaScript" src="js/bootstrap.min.js" ></script>

	<title>My Library</title>
</head>
<body class="color">
    <br> <br>
	  <?php
      include("header.php");
      ?>
   <div class="container" style="background-color: white; border: 10px solid #a4764a; padding:20px;">
      <div class="row">
        <div class="col-sm-6">
          <br><br>
           <img src="https://new-img.patrika.com/upload/2017/11/21/online_library_2020140_835x547-m.jpg" style="height:240px; width:400px;margin-left: 50px;">
           </div>
           <div class="col-sm-6">
             <form action="avalidation.php" method="post"style="text-align: left; margin-left:150px;">
              <h2 class="text-warning"><b><u>Admin Login</u></b></h2><br>
              
              <label class="text-warning" id='user'>Username:</label>
              <input type="text" name="aname"id='user' class='form-control' required="">
               <label class="text-warning" id='user'>Password:</label>
              <input type="password" name="apass"id='user' class='form-control' required="">
              <br><input type="submit" class="btn btn-info" value="Login">
            </form> 
               
             
           </div>
        </div>
      </div>
    
     <?php
      include("footer.php");
      ?>

</body>
</html>