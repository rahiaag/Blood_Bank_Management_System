<?php

	if(isset($_POST['fname'])){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$address=$_POST['address'];
		$contact=$_POST['contact'];
		$gender=$_POST['gender'];
		$blood=$_POST['blood'];

		$servername="localhost:3308";
		$username="root";
		$password="";
		$dbname="blood management";

		$conn=mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn){
		die("Error while connecting...");
	}
	
	$qry="insert into available_blood(fname,lname,address,contact,gender,blood_group) values ('$fname','$lname','$address','$contact','$gender','$blood')";
	$result=mysqli_query($conn,$qry);

	if($result){
		echo"Thanks for registering";
	}
	else{
		echo"Error while inserting data";

	
	}

	}
	else{
		echo"Go back to registration page";
	}
?>