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
             <h1 class="text-warning"><b><u>View Order</u></b></h1><br>
           <table class="table table-dark table-striped table-hover table-bordered">
               <tr  class="bg-dark text-white text-center">
                 <th style='text-align:center;'>User ID</th>
                 <th style='text-align:center;'>User name</th>
                 <th style='text-align:center;'>Book ID</th>
                 <th style='text-align:center;'>Book Name</th>
                 <th style='text-align:center;'>Author Name</th>
                 <th style='text-align:center;'>Issue Date</th>
                 <th style='text-align:center;'>Expiry Date</th>
                
               </tr>
            <?php
             if (isset($_POST['done'])) {
               include ('includes/conn.php');
               $book_name= $_POST['book_name'];
               $author_name= $_POST['author_name'];
              $q = "SELECT * from issue_book where book_name = '$book_name' or author_name = '$author_name'";   
              $query = mysqli_query($con,$q);
              while($res = mysqli_fetch_array($query))
              {
           
              ?>   
         
                 <tr class="text-center">
                 <td> <?php echo $res['user_id'] ?> </td>
                 <td> <?php echo $res['username'] ?> </td>
                 <td> <?php echo $res['book_id'] ?> </td>
                 <td> <?php echo $res['book_name'] ?> </td>
                 <td> <?php echo $res['author_name'] ?> </td>
                 <td> <?php echo $res['issue_date'] ?> </td>
                 <td> <?php echo $res['expiry_date'] ?> </td>
                 
                 </tr>
              <?php
              }
            
              
             }else{
              include ('includes/conn.php');

              $q = "select * from issue_book";   
              $query = mysqli_query($con,$q);
              while($res = mysqli_fetch_array($query))
              {
           
              ?>   
         
                 <tr class="text-center">
                 <td> <?php echo $res['user_id'] ?> </td>
                 <td> <?php echo $res['username'] ?> </td>
                 <td> <?php echo $res['book_id'] ?> </td>
                 <td> <?php echo $res['book_name'] ?> </td>
                 <td> <?php echo $res['author_name'] ?> </td>
                 <td> <?php echo $res['issue_date'] ?> </td>
                 <td> <?php echo $res['expiry_date'] ?> </td>
                 
                 </tr>
              <?php
              }
             }
              ?>
            </table>
          
             <form action="" style="text-align: left;" method="POST">
             
              
              <div class="form-group">
                <label for="title">Book name:</label>
                <input type="text" class="form-control" id="title" name='book_name'>
              </div>
              <div class="form-group">
                <label for="author">Author Name:</label>
                <input type="text" class="form-control" id="author" name="author_name">
              </div>
             
              
              <button type="submit" class="btn btn-default" name="done">Search</button>
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