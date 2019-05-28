
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

      <div class="container" style=" border: 10px solid #a4764a;">
        <div class="btn-group btn-group-justified">
          <a href="admindash.php" class="btn btn-primary">Add Books</a>
          <a href="adminbs.php" class="btn btn-primary">Books search</a>
          <a href="adminbu.php" class="btn btn-primary">Book update</a>
          <a href="adminvw.php" class="btn btn-primary">View Order</a>
          <a href="index.php" class="btn btn-primary">Logout</a>
      </div>
    </div>

    <div class="container" style="background-color: white;border: 10px solid #a4764a;">
    	<div class="row">
        <div class="col-sm-2" style="padding:20px;"></div>
         <div class="col-sm-8" style="padding:20px;">
             <h1 class="text-center text-warning"><b><u>Add Books</u></b></h1>
             <form action="includes/addbooks.php" style="text-align: left;" method="post">
             
              <div class="form-group">
                <label for="bookid" class='text-warning'>Book Id:</label>
                <input  type="text" class="form-control" id="bookid" name="bookid" >
              </div>
              <div class="form-group">
                <label for="title" class='text-warning'>Title:</label>
                <input type="text" class="form-control" id="title" name="title">
              </div>
              <div class="form-group">
                <label for="author" class='text-warning'>Author Name:</label>
                <input type="text" class="form-control" id="author"name="author">
              </div>
              <div class="form-group">
                <label for="cost" class='text-warning'>Cost:</label>
                <input type="text" class="form-control" id="cost"name="cost">
              </div>
              <div class="form-group">
                <label for="quantity" class='text-warning'>Quantity:</label>
                <input  type="number"  min="1" max="100" class="form-control" id="quantity" name="quantity">
              </div>
              
              <button type="submit" class="btn btn-default" >Add</button>
            </form>
             
           </div>
          
           <div class="col-sm-2" style="padding:20px;"></div>
    		
    		</div>
    	</div>
       <?php
      include("footer.php");
      ?>
     

</body>
</html>