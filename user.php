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
    <div class="container" style="background-color: white; border: 10px solid #a4764a; padding:20px;">
    	<div class="row">
    		<div class="col-sm-6">
    			<br><br>
    		   <img src="https://new-img.patrika.com/upload/2017/11/21/online_library_2020140_835x547-m.jpg" style="height:240px; width:400px; margin-left: 50px;">
           </div>
           <div class="col-sm-6">
             <form action="user_validation.php" method="post"style="text-align: left; margin-left:150px;"name ="RegForm" onsubmit='return validateForm()'>
              <h2 class="text-warning "><b><u>User Login</u></b></h2><br>
              
              <label class="text-warning" id='user'>Username:</label>
              <input type="text" name="uname"id='user' class='form-control'>
              <label class="text-warning" id='user'>Password:</label>
              <input type="password" name="upass"id='user' class='form-control'>
              <br><p class="text-basic">Not a Member Yet?</p>
              <a href="user_signup.php" class="text-info" style="font-size:15px;text-decoration:none;">Sign Up here</a>
              <br>  <br><input type="submit" class="btn btn-info" value="Login">
            </form> 
               
             
           </div>
    		</div>
    	</div>
       <script>
   
   function validateForm()                 
{ 
       
  var username = document.forms["RegForm"]["uname"]; 
 
  var password = document.forms["RegForm"]["upass"]; 
 
  if (username.value == "")          
  { 
    window.alert("Please enter your username"); 
    password.focus(); 
    return false; 
  } 
 if (!isNaN(username.value))                
  { 
    window.alert("Last name contains character only"); 
    username.focus(); 
    return false; 
  } 
 
  
  if (password.value == "")          
  { 
    window.alert("Please enter your password"); 
    password.focus(); 
    return false; 
  } 
 
  var passw=  /^[A-Za-z]\w{7,15}$/;
  if(!password.value.match(passw)) 
    { 
    alert('password must between 7 to 15 characters which contain only characters, numeric digits, underscore and first character must be a letter')
    return false;
    }
   
  
   
  

  return true;
}

</script>
    
     <?php
      include("footer.php");
      ?>

</body>
</html>