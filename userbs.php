
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
        <div class="col-sm-8" style="padding:20px;">
           <h1 class="text-warning text-center"><b><u>Books Available</u></b></h1>
             <br/>
               <?php
           if(isset($_POST['done'])){
            ?>
         
             <table class="table table-dark table-striped table-hover table-bordered">
               <tr  class="bg-dark text-white text-center">
                 <th style='text-align:center;'>Book Id</th>
                 <th style='text-align:center;'>Title</th>
                 <th style='text-align:center;'>Author name</th>
                 <th style='text-align:center;'>Cost</th>
                
             </tr>
          <?php
              include ('includes/conn.php');
              $book_id = $_POST['book_id'];
              $q = "select * from books where book_id ='$book_id'";   
              $query = mysqli_query($con,$q);
            while($res = mysqli_fetch_array($query))
            {
           
            ?>   
         
               <tr class="text-center">
                 <td> <?php echo $res['book_id'] ?> </td>
                 <td> <?php echo $res['title'] ?> </td>
                 <td> <?php echo $res['author_name'] ?> </td>
                 <td> <?php echo $res['cost'] ?> </td>
                 
               </tr>
               <?php
             }
             ?>

       </table>
          <?php
  }  
     else{
            ?>
         
             <table class="table table-dark table-striped table-hover table-bordered">
               <tr  class="bg-dark text-white text-center">
                 <th style='text-align:center;'>Book Id</th>
                 <th style='text-align:center;'>Title</th>
                 <th style='text-align:center;'>Author name</th>
                 <th style='text-align:center;'>Cost</th>
                
               </tr>
             <?php
              include ('includes/conn.php');

              $q = "select * from books ";   
              $query = mysqli_query($con,$q);
              while($res = mysqli_fetch_array($query))
              {
           
              ?>   
         
                 <tr class="text-center">
                 <td> <?php echo $res['book_id'] ?> </td>
                 <td> <?php echo $res['title'] ?> </td>
                 <td> <?php echo $res['author_name'] ?> </td>
                 <td> <?php echo $res['cost'] ?> </td>
                 
                 </tr>
              <?php
              }
              ?>
            </table>
            <?php 
            }
            ?>
          </div>
         <div class="col-sm-4 text-center " style="padding:20px; ">
             <h1 class="text-warning text-center"><u><b>Search Book</b></u></h1>
             <form method="post" style="text-align: left; margin-left: px;">
              <br>
              <div class="form-group">
                <label for="bookid">Enter Book Id:</label>
                <input type="text" class="form-control" id="bookid" name="book_id" required="">
              </div>
              
              <button type="submit" name="done" class="btn btn-default">Search</button>
            </form>
             
           </div>
          
        </div>
      </div>
             <?php
      include("footer.php");
      ?>
     

</body>
</html>