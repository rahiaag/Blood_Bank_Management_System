<?php
session_start(); 
include 'dbconnect.php';
$username=$_POST['uname'];
$password=$_POST['psw'];

$qry="select * from admin where uname='$username' && pass='$password' "; 
$result=mysqli_query($conn,$qry);
$count=mysqli_num_rows($result);
if($count>0){
	echo "Successfully logged in";
	$_SESSION['key']=$username; 
	header('location:add_blood_info.html'); 
}else{
	echo "Username/Password didnt match";
}

?>