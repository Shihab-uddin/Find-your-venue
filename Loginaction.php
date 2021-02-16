<?php
session_start();
$con= mysqli_connect('localhost','root');

mysqli_select_db($con,'venue');
$name = $_POST['username'];
$pass = $_POST['password'];

$q = "SELECT * From user where user_name = '$name' && pass ='$pass'  ";
$result=mysqli_query($con,$q);
$num = mysqli_num_rows($result);
$rows=mysqli_fetch_assoc($result);

if($num == 1){
	$_SESSION["loggedIn"] = true;
	$_SESSION['userName'] = $name;
	$_SESSION['userid'] = $rows['user_id'];
	header('home.html');
	
}
else{
	  echo "log in unnsuccess";
	}
?>