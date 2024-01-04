<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
include 'dbconnect.php';

$qry="delete from request_blood where id=$id";
$result=mysqli_query($conn,$qry);
if($result){
	echo "Sucessfully Deleted";
	header('location:view_request.php');
}
else{
	echo "Error..";
}
}

?>