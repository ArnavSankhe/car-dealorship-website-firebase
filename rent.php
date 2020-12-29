<?php
session_start();

if(!empty($_SESSION['user_id']))
{
    echo "
	<center>
		<div class='btn' style='float:right; display: inline-block; margin:40px 20px; padding: 10px;'>
		<a href='logout.php' style='color:white;text-decoration: none;'>LOGOUT</a></div>
		
		<h1 style='display: inline-block;' class='generalTitle' > DEALS ON WHEELS </h1>
	</center> 
	
</div>";
}
else {
echo "<div>
	<center>
		<div class='btn' style='float:right; display: inline-block; margin:40px 20px; padding: 10px;'>
		<a href='login1.php' style='color:white;text-decoration: none;'>LOGIN</a></div>
		
		<h1 style='display: inline-block;' class='generalTitle' > DEALS ON WHEELS </h1>
		</center> 
	
</div>";
}
?>
<html>
<head>
<link rel="stylesheet" href="project.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
form {
	padding: 20px;
	position: absolute;
	top:40px;
   
}
.btn {

    display: inline-block;
    position: relative;
    padding: 10px 30px;
    text-decoration: none;
    font-size: 1.1em;
	 text-transform: uppercase;
	 color:white;
	 border: 2.97px solid #bb8847;
	 border-radius: 10px;	
    

}

.btn:hover{
background-color: #bb8847;
transition: 0.6s;
}
body{
background-image: url("bk3.jpg");
	background-repeat: no-repeat;
	background-size:  100%;

}
.signup{
	
	position: absolute;
	right: 30px;
	background-color:white;
	height: 470px;
	width:450px;
	border:solid 2px;
	border-radius: 20px;
	opacity: 0.8;
	
}
table{
padding:30px;
width: 280px;
}

	
	
	select {width: 70%;
  background-color: white;
  border-radius: 2px;
  font: inherit;
  }

</style>
</head>
<body>
<div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   
 <a href="index.php">HOME</a> 
  <a href="brands.php" >BUY</a>
  <a href="sell.php">SELL</a>
  <a href="rent.php">RENT</a>
  <a href="#">REPAIR</a>
  <a href="about.php">ABOUT</a>
</div>
<span style="top:52px" onclick="openNav()">&#9776; Menu</span>

<div  class="signup">
<h1 style="font-size: 20px; text-align:center; color:#bb8847; ">RENT A CAR</h1>
<form method="POST">

  
 
        
<table cellpadding = "15">
 


<tr>
<td><input type="text" size="30px" placeholder="NAME*" required="required" name="name" maxlength="30"/></td>
</tr>

<tr>
<td><input type="text" size="30px" placeholder="PHONE*" required="required"  name="phone1" maxlength="10"/></td>
</tr>

<tr>
<td><input type="text"  size="30px" placeholder="EMAIL*" required="required" name="email" maxlength="30"/></td>
</tr>
<tr>
<td><select name="brand"style="width: 340px; ">
  <option>CAR BRAND*
  <option value="tesla">TESLA
  <option value="astonmartin">ASTON MARTIN
 <option value="bmw">BMW
  <option value="jeep">JEEP
   <option value="infinity">INFINITY
          </select></td>

<tr>
<td><input class="btn" type=submit name="SHOW AVAILABILTIY"></td>
</tr>

</form> 
</div>
<?php include('dbconnect.php');?>
<?php


if(isset($_POST["name"]))
    {

     $name=$_POST["name"];
$phone=$_POST["phone1"];
$email=$_POST["email"];
$brand=$_POST["brand"];


$sql = "INSERT INTO RENT (NAME,PHONE,EMAIL,BRAND)
VALUES ('$name','$phone','$email','$brand')";

if (mysqli_query($conn, $sql)) {
    echo "<center> <h2><a href='index.php'> Thank You For renting the car, click to go to homepage </h2> </center></a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
?>  
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>

</html>