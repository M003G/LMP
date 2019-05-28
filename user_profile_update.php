<?php

include ('includes/conn.php');

if(isset($_POST['done']))
{
  $id = $_GET['id'];
  $old_image = $_GET['image_source'];
  $name = $_GET['username'];
  if (isset($_FILES['profile']['name'])) {
      

    $fileName    = $_FILES['profile']['name'];
    $fileTmpname = $_FILES['profile']['tmp_name'];
    $fileSize    = $_FILES['profile']['size'];
    $fileError   = $_FILES['profile']['error'];
    $fileType    = $_FILES['profile']['type'];
    
    $fileExt       = explode('.', $fileName);
    $fileActualExt =strtolower(end($fileExt));

    $allowed = array('jpg' , 'jpeg' , 'png' );

    if (in_array($fileActualExt ,$allowed  )) {
        if ($fileError === 0) {
          if ($fileSize < 5242880) {
          
            $fileNameNew = $name.".".$fileActualExt;
    
            $folder    = "uploads/".basename($fileNameNew);
            
            move_uploaded_file($fileTmpname , $folder);

            $q = "UPDATE alogin set image_source='$folder'  where id=$id ";  
            
            $query = mysqli_query($con,$q);
            
            if ($query) {
              echo "<script> alert('data updated successfully!')</script>";
              echo "<script>window.open('userdash.php','_self')</script>";

            }else
            {
             echo "<script> alert(' updation failed!')</script>"; 
              echo "<script>window.open('userdash.php' ,'_self')</script>";

            }
           
          }else{

             echo "<script> alert('File is greater then 5 mb!!! Please upload file less then 5 mb')</script>"; 
              echo "<script>window.open('userdash.php' ,'_self')</script>";

          }
        }else{

            echo "<script> alert('error in uploading a file')</script>"; 
              echo "<script>window.open('userdash.php' ,'_self')</script>";

        }
    }
  }
    
 else{
    $filename=$old_image;

  $
  $q = "UPDATE alogin set image_source='$filename'  where id=$id ";  
  
  $query = mysqli_query($con,$q);
  header("location:userdash.php?failed to update");
  }
 
}else if(isset($_POST['done2'])){
  header("location:userdash.php?profile_update=cancel");
}
?>

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
             <h1 class="text-center text-warning"><b><u>Update</u></b></h1><br>
             <?php 
             $id = $_GET['id'];
             $image =$_GET['image_source'];
             ?>
             <table class="table table-dark table-striped table-hover table-bordered">
               <tr class="bg-dark text-white text-center">
                  <th style='text-align:center;'class="text-center text-warning">Student ID</th>
                  <th style='text-align:center;'class="text-center text-warning"><?php echo $id ; ?></th >
               </tr>
               </table>
              
             <?php
             
              echo "<img src='".$image."'  style='height:200px;width:200px;border:5px solid #a4764a;border-radius:10px;'/>";
            
              ?>           
             <form style="text-align: left;" method="POST" enctype="multipart/form-data">
              
              
             <div class="form-group">
                <label for="image" class="text-center text-warning">  Choose New Profile Image:</label>
                <input type="file" class="form-control" id="image" name="profile"  value="<?php echo $image;?>">
              </div>
              <button type="submit" name="done" class="btn btn-default" >Update</button>
             <span><button type="submit" name="done2" class="btn btn-default" >Cancel</button></span>
            </form><br>
             
              
           </div>
           <div class="col-sm-2" style="padding:20px;"></div>
        
        </div>
      </div>


</body>
</html>