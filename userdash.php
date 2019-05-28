
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

        <div class="container" style="background-color:white; border: 10px solid #a4764a; padding:20px;">
          <div class="row">
            <div class="col-sm-2 " style='padding:20PX;'></div>
            <div class="col-sm-8 table-responsive">
              <br><br>
              
                
              <?php
              if(isset($_SESSION['username'])){
                $name=$_SESSION['username'];
                include ('includes/conn.php');

                $q = "select * from alogin where username = '$name' ";   
                $query = mysqli_query($con,$q);
                while($res = mysqli_fetch_array($query))
              {
                $profile = $res['image_source'];
               
               echo "<center><img src='$profile'  style='height:200px;width:200px;border:5px solid #a4764a;border-radius:10px;'/></center><br>"; 
             ?>
               <center><a href='user_profile_update.php?id=<?php echo $res['id']; ?>&&image_source=<?php echo $res['image_source']; ?>&&username=<?php echo $res['username']; ?>' class='text-white'><button class='btn btn-primary btn-sm'>Change Profile Picture</button> </a> </center><br> 
              <?php
                }
              ?> 
            
               <center>
               <table class="table table-success table-striped table-hover table-bordered ">
               <tr  class="bg-dark text-white text-center success">
                 <th style='text-align:center;'>Student_ID</th>
                 <th style='text-align:center;'>Name</th>
                 <th style='text-align:center;'>Mobile_no</th>
                 <th style='text-align:center;'>E-mail</th>
                 <th style='text-align:center;'>College</th>
                 <th style='text-align:center;'>Edit</th>
                
               </tr>
             <?php
              include ('includes/conn.php');

              $q = "select id ,username,Mobile_no,Email,college from alogin  where username = '$name'";   
              $query = mysqli_query($con,$q);
              while($res = mysqli_fetch_array($query))
              {
           
              ?>   
         
                 <tr class="text-center">
                 <td> <?php echo $res['id'] ?> </td>
                 <td> <?php echo $res['username'] ?> </td>
                 <td> <?php echo $res['Mobile_no'] ?> </td>
                 <td> <?php echo $res['Email'] ?> </td>
                 <td> <?php echo $res['college'] ?> </td>
                 <td> <a href="includes/user_update.php?id=<?php echo $res['id']; ?>&&username=<?php echo $res['username']; ?>&&Mobile_no=<?php echo $res['Mobile_no']; ?>&&Email=<?php echo $res['Email']; ?>&&college=<?php echo $res['college']; ?>" class="text-white"><button class="btn btn-primary btn-sm">Update</button></a> </td> 
                 
                 </tr>
              <?php
              }
            }
              ?>
            </table>
          </center>
          </div>
          <div class="col-sm-2" style='padding:20PX;'></div>
        </div>
      </div>  
           

             <?php
      include("footer.php");
      ?>
     

</body>
</html>