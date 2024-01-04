<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
include 'dbconnect.php';

$qry="delete from available_blood where id=$id";
$result=mysqli_query($conn,$qry);
if($result){
	echo "Sucessfully Deleted";
	header('location:Available_Blood_Sample.php');
}
else{
	echo "Error..";
}
}

?>