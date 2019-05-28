
<?php

session_start();

?><!DOCTYPE html>

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
<script rel="JavaScript" src="js/bootstrap.min.js" ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>My Library</title>
</head>
<body class="color">
    <br> <br>
	   <?php
      include("header.php");
      ?>
    <div class="container" style="background-color: white;border: 10px solid #a4764a; padding:30px;">
    	<div class="row">
    		<div class="col-sm-6">
    			
    			<a href="admin.php"><img src="image/admin.gif" style="height:180px;width:180px; border:5px solid #a4764a; border-radius: 25px; padding:20px;display:block; margin-left:auto; margin-right: auto;"></a>
        </div>
            <div class="col-sm-6">
    			<a href="user.php"><img src="image/user.gif"style="height:180px;width:180px; border:5px solid #a4764a; border-radius: 25px; padding:20px;display:block; margin-left:auto; margin-right: auto;"></a>
    			</div>
    		</div>
    	</div>
    <?php
      include("footer.php");
      ?>

</body>
</html>