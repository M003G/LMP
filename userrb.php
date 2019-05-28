
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
        <div class="col-sm-2" style="padding:20px;"></div>
         <div class="col-sm-8" style="padding:20px;">
             <h1 class="text-warning text-center"><b><u>Return Book</u></b></h1>
             <?php
                include ('includes/conn.php');
                if(isset($_POST['done']))
                {

                  $username = $_SESSION['username'];
                  
                  $q = "DELETE from issue_book   where username = '$username' ";  
                  
                  $query2 = mysqli_query($con,$q);
                  if ($query2) {
                      echo " <center><h3 class='text-success text-center'>Your book is  successfully return!!</h3></center>";
                      echo " <center><a href='userpo.php' style='text-decoration:none;'><p class='text-info text-center'>Click here for more books</p></a></center>";
        
                  }
                 else{
                  header('location:userrb.php?return=fail'); 
                 }
                  
                }else
                {
                
                }
                 
                 ?>
                 <form method="post" action=''>
                 <table>

                   <?php
              $name1= $_SESSION['username'];

              include ('includes/conn.php');

              $q = "select * from issue_book  where username = '$name1'";   
              $query = mysqli_query($con,$q);
              while($res = mysqli_fetch_array($query))
              {
              ?>
              <table class="table table-dark table-striped table-hover table-bordered">
               <tr class="bg-dark text-white text-center">
                  <th style='text-align:center;'>Student ID</th>
              
                  <th style='text-align:center;'><?php $id= $res['user_id'] ; echo $id; ?></th >
               </tr>
               
               
               <tr class="bg-dark text-white text-center">
                  <th style='text-align:center;'>Book ID</th>
                  <th style='text-align:center;'><?php echo $res['book_id'] ?></th >
               </tr>
              
               
               <tr class="bg-dark text-white text-center">
                  <th style='text-align:center;'>Book Name</th>
                  <th style='text-align:center;'><?php echo $res['book_name'] ?></th >
               </tr>
                
               
               <tr class="bg-dark text-white text-center">
                  <th style='text-align:center;'>Author Name</th>
                  <th style='text-align:center;'><?php echo $res['author_name'] ?></th >
               </tr>
               </table> 
               <center><button type="submit" name ="done" class="btn btn-default">Return</button></center>
            <?php
              }
             ?>
             
              
              
             </table>
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