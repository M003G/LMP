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
    $success ="";
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
        <div class="col-sm-3" style="padding:20px;"></div>
         <div class="col-sm-6" style="padding:20px;">
          <?php
           if(isset($_POST['done'])){
            ?>
         
             <table class="table table-dark table-striped table-hover table-bordered">
               <tr  class="bg-dark text-white text-center">
                 <th style='text-align:center;'>Book Id</th>
                 <th style='text-align:center;'>Title</th>
                 <th style='text-align:center;'>Author name</th>
                 <th style='text-align:center;'>Cost</th>
                 <th style='text-align:center;'>Quantity</th>
                 <th style='text-align:center;'>Update</th>
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
             <td> <?php echo $res['quantity'] ?> </td>
             <td> <button class="btn btn-primary btn-sm"> <a href="includes/update.php?book_id=<?php echo $res['book_id']; ?>&&title=<?php echo $res['title']; ?>&&author_name=<?php echo $res['author_name']; ?>&&cost=<?php echo $res['cost']; ?>&&quantity=<?php echo $res['quantity']; ?>" class="text-white"><p style="color:white;"> 
              Update</p></a> </button> </td> 
           </tr>
           <?php
         }
         ?>

   </table>
   <center><a href="includes/booksearchlogout2.php" class="text-warning"style="text-decoration:none;"><p style="font-size:20px;"><b>Another book</b></p></a></center>
      <?php
  }  

  
             else { 
              echo '    <h1 class="text-warning"><u><b>Update Book</b></u></h1>
             <form  style="text-align: left; " method="post">
             
              <div class="form-group">
                <label for="book" class="text-warning">Enter Book Id:</label>
                <input type="text" class="form-control" id="book" name="book_id" required="">
              </div>
              
              <button type="submit"  name="done" class="btn btn-default">Update</button>
            </form>';
           
             }
               ?>
           </div>
          <div class="col-sm-3" style="padding:20px;"></div>
        </div>
      </div>

         
       <?php
      include("footer.php");
      ?>
     

</body>
</html>