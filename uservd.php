
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
        <div class="col-sm-2" style="padding:20px;"></div>
         <div class="col-sm-8" style="padding:20px;">
             <h1 class="text-warning text-center" ><b><u>Fine Details</u></b></h1>
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
                  <th style='text-align:center;'><?php echo $res['user_id'] ?></th >
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

            <?php
              }
             ?>
              <center><button type="submit" name ="done" class="btn btn-default">Search</button></center></br>
             </table>
            </form> 

           
            
             <?php
                include ('includes/conn.php');
                if(isset($_POST['done']))
                {
                $name1= $_SESSION['username'];

                  include ('includes/conn.php');

                  $q = "select * from issue_book  where username = '$name1'";   
                  $query = mysqli_query($con,$q);
                  while($res = mysqli_fetch_array($query))
                  {
                  ?>
                  <table class="table table-dark table-striped table-hover table-bordered">
                   <tr class="bg-dark text-white text-center">
                      <th style='text-align:center;'>Issue Date</th>
                      <th style='text-align:center;'><?php $issue = date('d-m-Y', strtotime($res['issue_date']));
                       echo $issue; ?></th >

                   </tr>
                   
                   
                   <tr class="bg-dark text-white text-center">
                      <th style='text-align:center;'>Expiry Date</th>
                      <th style='text-align:center;'><?php $expiry = date('d-m-Y', strtotime($res['expiry_date'] ));
                      echo  $expiry ;?></th >
                   </tr>
                  </table> 
            
            <?php
              }
             ?>
              <center><a href="#" class='hover'  id="<?php echo  $name1 ;?>" style="text-decoration: none;color:black;"><button   class="btn btn-default ">Fine Details</button></a></center>
             
                <?php
                }else{
                  
                }
                ?>

         
             
           </div>
        <div class="col-sm-2" style="padding:20px;"></div>
        </div>
      </div>
      <?php
      include("footer.php");
      ?>
     <script >
       $(document).ready(function(){
        $('.hover').popover({
          title:fetchData,
          html:true,
          placement:'bottom'

        });
        function fetchData(){
          var fetch_data='';
          var element = $(this);
          var id=element.attr('id');
          $.ajax({
            url:"fine.php",
            method:"POST",
            async:false,
            data:{id:id},
            success:function(data){
              fetch_data = data;
            }

          });
          return fetch_data;
        }
       });     



     </script>
</body>
</html>