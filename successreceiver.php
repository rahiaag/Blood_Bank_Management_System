<html>
	<style>

button {
			background-color: #13A818;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
			font-size: 20px; 
		}

	
		button:hover {
			background-color:#06930B; 
			font-family: Helvetica;

		}
.cancelbtn {
			width: auto;
			padding: 10px 18px;
			border-radius: 10px;
			background-color: #f44336;
		}

		.container {
			padding: 16px;
		}

		</style>
<?php
session_start();
include 'dbconnect.php';
$username=$_POST['uname'];
$password=$_POST['psw'];

$qry="select * from user where u_name='$username' && u_pass='$password' "; 
$result=mysqli_query($conn,$qry);
$count=mysqli_num_rows($result);
if($count>0){
	echo "Successfully logged in";
	$_SESSION['key']=$username; 
	header('location:receiverhome.html'); 
}else{
	echo "Username/Password didnt match";
}

?>
<div class="container" >
			<a href="loginreceiver.php"><button type="button" class="cancelbtn" >Go Back</button></a>
			
		  </div>
</html>