<?php

session_start();

?>

<!DOCTYPE html>
<html>
<style type="text/css">
   #content{
    width: 100%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
   }
   form{
    width: 50%;
    margin: 20px auto;
   }
   form div{
    margin-top: 5px;
   }
   #img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
   }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
   img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
   }
</style>
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
    <div class="container" style="background-color: white;border: 10px solid #a4764a; padding: 30px;">
    	<div class="row" >
            <div class="col-sm-2">
              
            </div> 	
           <div class="col-sm-8" >
             <div id="content">
            
             <form action="user_registration.php" method="post" enctype="multipart/form-data" style="text-align: left;" name="jForm" onsubmit="return validateForm()">

             
              <div class="form-group">
                <label for="uname">Username:</label>
                <input type="text" class="form-control" id="uname" name="uname"  >
              </div>
             
              <div class="form-group">
                <label for="uemail">E-mail:</label>
                <input type="email" class="form-control" id="uemail" name="uemail" >
              </div>

              <div class="form-group">
                <label for="umnum">Mobile No.:</label>
                <input  type="number"  min="1000000000" max='9999999999' class="form-control" id="umnum" name="umnum" >
              </div>
             

              <div class="form-group">
                <label for="ucollege">College/University:</label>
                <input type="text" class="form-control" id="ucollege" name="ucollege" >
              </div>
              <div class="form-group">
                <label for="image">Profile Image:</label>
                <input type="file" class="form-control" id="image" name="image" >
              </div>
               <div class="form-group">
                <label for="upass">Password:</label>
                <input type="Password" class="form-control" id="upass" name="upass" REQUIRED="">
              </div>
              <div class="form-group">
                <label for="cpass"> Confirm Password:</label>
                <input type="Password" class="form-control" id="upass" name="cpass" required="" >
              </div>
              
              <input type="submit" class="btn btn-info" value="Signup"><br>
              <br><p>Already have an Account?</p>
              <span><a href="user.php" class="text-info" style="font-size:15px;text-decoration:none;">Login here!!</a></span>
             </form> 
           
           </div>
           
         </div>
         
           <div class="col-sm-2"></div> 
    		
    	</div>
    </div>
     <?php
      include("footer.php");
      ?>
      <script>
   
   function validateForm()                 
{ 
  var name = document.forms["jForm"]["uname"];  
   
  var email = document.forms["jForm"]["uemail"]; 
  
  var phone = document.forms["jForm"]["umnum"]; 
  
  var password = document.forms["jForm"]["upass"]; 
  var cpassword = document.forms["jForm"]["cpass"]; 

 
   if (name.value == "")                
  { 
    window.alert("Please enter your  username."); 
    name.focus(); 
    return false; 
  } 

   if (!isNaN(name.value))                
  { 
    window.alert("username contains character only"); 
    name.focus(); 
    return false; 
  } 
 
  
  if (email.value == "")                 
  { 
    window.alert("Please enter a valid e-mail address."); 
    email.focus(); 
    return false; 
  } 

  if (email.value.indexOf("@gmail", 0) < 0)         
  { 
    window.alert("Please enter a valid e-mail address."); 
    email.focus(); 
    return false; 
  } 

  if (email.value.indexOf(".", 0) < 0)         
  { 
    window.alert("Please enter a valid e-mail address."); 
    email.focus(); 
    return false; 
  } 
 

  if (phone.value == "")             
  { 
    window.alert("Please enter your telephone number."); 
    phone.focus(); 
    return false; 
  } 
  

  return alert("Registration succesfull");
}

</script>
     

</body>
</html>