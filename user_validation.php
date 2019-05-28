
<?php

session_start();

$con1 = mysqli_connect('localhost','root','');

if($con1)
{
	echo "connection successfull";
}
else
{
    echo "no connection";	
}

mysqli_select_db($con1,'sproject');

$name1 = $_POST['uname'];
$pass1 = $_POST['upass'];

$q = "select * from alogin where 
username = '$name1' && password = '$pass1' ";

$result1 = mysqli_query($con1,$q);

$num1 = mysqli_num_rows($result1);

if($num1 == 1)
{
	$_SESSION['username'] = $name1;
	header('location:userdash.php');
}
else
{
	echo " &nbsp &nbsp wrong combination of username and password";

}

 
?><br>
<a href="index.php">try again</a>