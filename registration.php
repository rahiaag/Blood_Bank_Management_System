<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {font-family: Arial, Helvetica, sans-serif; 
	 }
* {
	box-sizing: border-box;
	
}
ul li{
    color: #EF4422;
    font-size: 30px;
    font-weight: bold;
    list-style: none;
    display: block;
    text-decoration: none;

}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
     background-color: #F3EFEE;

}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #670067;
}
.line1{
    width: 100%;
     border-top:  2px solid #D4C8C5;
}

.container {
    padding: 20px;
	display: block;
    margin-left: 50px;
    margin-right: auto;
	margin-top:60px;
    width: 60%;
	
	
}
</style>
</head>
<body>

<?php
if(isset($_GET['id']))
   $id=$_GET['id']; 

include 'dbconnect.php';
$qry="select * from user where id=$id";
$result=mysqli_query($conn,$qry);
while($row=mysqli_fetch_array($result))
?>

<div class="logo">
</div>
<div class="text">
    <ul>
        <li>REGISTRATION FORM</li><br><br>
        <a>Fill in the form below</a>
    </ul>
</div>
<p class="line1"></p>
<div class="container">
  <form action="insert.php" method="post">
    <label >First Name</label>
    <input type="text"  name="fname" placeholder="Your name.." required>

    <label >Last Name</label>
    <input type="text"  name="lname" placeholder="Your last name.." required>

    <label >Address</label>
    <input type="text"  name="address" placeholder="Your current address.." required>

     <label >Contact</label>
    <input type="text"  name="contact" placeholder="Your mobile number.." required>

     <label >Gender</label><select name="gender">
        <option value="volvo">Select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>

     <label>Blood Group</label>
    <select name="blood">
        <option value="volvo">Select</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
    </select>
    <input type="submit" value="Submit">
  </form>
  
  
</div>

</body>
</html>