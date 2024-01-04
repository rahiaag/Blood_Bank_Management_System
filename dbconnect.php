<?php
$servername="localhost:3308";
$username="root";
$password="";
$dbname="blood management";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
		die("Error while connecting...");

}
?>