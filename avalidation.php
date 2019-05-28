
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

$name = $_POST['aname'];
$pass = $_POST['apass'];

$q = "select * from adlogin where 
username = '$name' && password = '$pass' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['username'] = $name;
	header('location:admindash.php');
}
else
{
	echo " &nbsp &nbsp wrong combination of username and password";
}
 
?>