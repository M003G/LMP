<?php

session_start();

$con = mysqli_connect('localhost','root','');

if($con)
{
	echo "connection successfull";
}
else
{
    echo "no connection";	
}

mysqli_select_db($con,'sproject');

	$name      = $_POST['uname'];
	$pass      = $_POST['upass'];
	$number    = $_POST['umnum'];
	$col       = $_POST['ucollege'];
	$email     = $_POST['uemail'];
   //getting and checking image!!!
    $fileName    = $_FILES['image']['name'];
    $fileTmpname = $_FILES['image']['tmp_name'];
    $fileSize    = $_FILES['image']['size'];
    $fileError   = $_FILES['image']['error'];
    $fileType    = $_FILES['image']['type'];

    $fileExt       = explode('.', $fileName);
    $fileActualExt =strtolower(end($fileExt));

    $allowed = array('jpg' , 'jpeg' , 'png' );

    if (in_array($fileActualExt ,$allowed  )) {
        if ($fileError === 0) {
          if ($fileSize < 5242880) {
          
            $fileNameNew = $name.".".$fileActualExt;
    
            $folder    = "uploads/".basename($fileNameNew);
            
            move_uploaded_file($fileTmpname , $folder);

			$q = "select * from alogin where username = '$name' 
			 or  Email ='$email' ";

			$result1 = mysqli_query($con,$q);

			$num1 = mysqli_num_rows($result1);

			if($num1 == 1)
			{
				
        echo "<script>window.alert('Username or Email id  already taken')</script>";
        echo "<script>window.open('user_signup.php','_self')</script>";
         




			}
			else
			{
				$qy = "insert into alogin (username, password, mobile_no, Email, college ,image_source) values ('$name','$pass', '$number' , '$email', '$col' , '$folder')";
				mysqli_query($con,$qy);
        echo "<script> alert('You are registered successfully')</script>";
				header('location:user.php?signup=success');
			}


            
           
           
          }else{

             echo "<script> alert('File is greater then 5 mb!!! Please upload file less then 5 mb')</script>"; 
              echo "<script>window.open('user_signup.php','_self')</script>";

          }
        }else{

            echo "<script> alert('error in uploading a file')</script>"; 
              echo "<script>window.open('user_signup.php','_self')</script>";

        }
    }
   
  
 

 
?>