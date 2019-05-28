
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
        <div class="col-sm-3" style="padding:20px;"> </div>
          <div class="col-sm-6" style="padding:20px;">
          <h1  class="text-warning text-center"><b><u>Order Confirmation</u></b></h1> 
           <?php
            if(isset($_POST['done'])){
                        include ('includes/conn.php');
                        $title = $_POST['title'];
                        $author_name = $_POST['author_name'];
                        $q = "select * from books where title ='$title' and author_name='$author_name '";
                        $query = mysqli_query($con,$q);
                        if (!$query) {
                          echo "<p class='text-danger text-center' style='font-size:20px;'><strong><center>The Book you searched is not avaialable !!!</center></strong></p>";
                        }
                          if (mysqli_num_rows($query)==1){
                           while($res = mysqli_fetch_array($query))
                            {
                             
                            $bookid =$res['book_id'] ;
                            $bookname=$res['title'];
                            $author =$res['author_name'];
                            $cost = $res['cost'];
                          ?>
                           <table class="table table-dark table-striped table-hover table-bordered">
                               <tr class="bg-dark text-white text-center">
                                  <th style='text-align:center;'>Book ID</th>
                              
                                  <th style='text-align:center;'><?php echo $bookid ;?></th >
                               </tr>
                               
                               
                               <tr class="bg-dark text-white text-center">
                                  <th style='text-align:center;'> Title:</th>
                                  <th style='text-align:center;'><?php echo $bookname; ?></th >
                               </tr>
                              
                               
                               <tr class="bg-dark text-white text-center">
                                  <th style='text-align:center;'>Author Name:</th>
                                  <th style='text-align:center;'><?php echo $author;  ?></th >
                               </tr>
                                
                               
                               <tr class="bg-dark text-white text-center">
                                  <th style='text-align:center;'>cost:</th>
                                  <th style='text-align:center;'><?php echo $cost; ?></th >
                               </tr>
                               </table> 
                          <?php
                        }
                              $name1= $_SESSION['username'];

                              include ('includes/conn.php');

                              $q = "select * from alogin  where username = '$name1'";   
                              $query = mysqli_query($con,$q);
                              while($res = mysqli_fetch_array($query))
                              {
                           
                                 $mobile= $res['Mobile_no'];

                              ?>
                              <table class="table table-dark table-striped table-hover table-bordered">
                               <tr class="bg-dark text-white text-center">
                                  <th style='text-align:center;'>Student ID</th>
                              
                                  <th style='text-align:center;'><?php $id= $res['id']; echo $id ;?></th >
                               </tr>
                               
                               
                               <tr class="bg-dark text-white text-center">
                                  <th style='text-align:center;'>Student Name:</th>
                                  <th style='text-align:center;'><?php $user=$res['username'];echo $user; ?></th >
                               </tr>
                              
                               
                               <tr class="bg-dark text-white text-center">
                                  <th style='text-align:center;'>Issue Date:</th>
                                  <th style='text-align:center;'><?php $issue_date=date("d-m-Y"); echo $issue_date;  ?></th >
                               </tr>
                                
                               
                               <tr class="bg-dark text-white text-center">
                                  <th style='text-align:center;'>Expiry Date:</th>
                                  <th style='text-align:center;'><?php $d=strtotime("+14 days");
                                   $expiry_date = date("d-m-Y", $d) ; echo $expiry_date; ?></th >
                               </tr>
                               </table> 

                              <?php
                              }
                             ?>
                              <?php
                               $name1= $_SESSION['username'];
                              include ('includes/conn.php');
                              $issue = date('Y-m-d', strtotime($issue_date));

                              $expiry = date('Y-m-d', strtotime($expiry_date));
                              $q1 = "update alogin set issue_date='$issue' ,expiry_date='$expiry' where username = '$name1'"; 
                              $query1 = mysqli_query($con,$q1);
                              if ($query1) {
                                echo "<center><p class='text-info text-center'><b>Click confirm to place order!!</b></p></center>";
                                
                              }else{
                                echo "<script> alert('data not inserted', '_self')</script>";
                              }
                              ?>
                               <center><a href='order_confirm.php?id=<?php echo $id; ?>&&user=<?php echo $user; ?>&&user_mobile_no=<?php echo $mobile; ?>&&bookname=<?php echo $bookname; ?>&&bookid=<?php echo $bookid; ?>&&author_name=<?php echo $author; ?>&&issue_date=<?php echo $issue; ?>&&expiry_date=<?php echo $expiry; ?>' ><button class="btn btn-default" type="submit" name="done2">Confirm</button></a>
                                <span><a href="userpo.php"><button class="btn btn-default">Cancel</button></a></span>

                            <?php
                            }
                            else{
                          echo "<p class='text-danger text-center' style='font-size:20px;'><strong><center>The Book you searched is not avaialable !!!</center></strong></p>";
                          ?>

                       <center><a href="userpo.php"><button class="btn btn-default">Cancel</button></a></center>
                      <?php
                        }
                       ?>
                      
                       
                    
                       
                     <?php
                  }  
                 else{
                     $num = $_GET['error'];
                     if($num ==  1){
                                    echo "<center><h3 class='text-danger text-center'>You have already issued book.First return book then order again!!</h3></center>";
                                    ?>
                                    <center><a href="userrb.php"><button class="btn btn-default">Click to return Book</button></a></center>

                                    <?php

                                   }
                                   else{
                                    echo " <center><h3 class='text-success text-center'>Your order is  placed!!</h3></center>";
                                    echo " <center><a href='userbs.php' style='text-decoration:none;'><p class='text-info text-center'>Click here to search more books!! </p></a></center>";


                                        }
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