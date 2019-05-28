
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
      include("main.php");
      ?>


<div class="container" style="background-color: white;border: 10px solid #a4764a;">
      <div class="row">
        <div class="col-sm-4" style="padding:20px;"></div>
          
         <div class="col-sm-4" style="padding:20px;">
             <h1  class="text-warning text-center"><b><u>Place order</u></b></h1>
             <form method="post" action="order_confirmation.php" style="text-align: left; margin-left: px;">
             <br>
              <div class="form-group">
                <label for="title">Enter Book Name:</label>
                <input type="text" class="form-control" id="title" name="title" required="">
              </div>
              <div class="form-group">
                <label for="author_name">Enter Author Name:</label>
                <input type="text" class="form-control" id="author_name" name="author_name" required="">
              </div>
              
              <button type="submit" name="done" class="btn btn-default">Place Order</button>
            </form>
             
           </div>
        <div class="col-sm-4" style="padding:20px;"></div>
        </div> 
       </div>    
        
      <?php
      include("footer.php");
      ?>
     

</body>
</html>