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
	position: CENTER;
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
background-image: url("bk2.jpg");
	background-repeat: no-repeat;
	background-size:  100%;
	

}
.signup{
	
	position: absolute;
	right: 30px;
	background-color:white;
	height: 500px; 
	width:450px;
	border:solid 2px;
	border-radius: 20px;
	opacity: 0.8;
	
}
table{
padding:25px;

width: 230px;
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
<h1 style="font-size: 30px; text-align:center; color:#bb8847; ">Sign up</h1>
<h4 style="font-size: 15px; text-align:center; color:#bb8847; ">takes less than 30 seconds</h4>
<form>

  
 
        
<table cellpadding = "15">
 
<tr>
<td><input type="text" size="30px" placeholder="FIRST NAME*" maxlength="30"/></td>
</tr>
<tr>
<tr>
<td><input type="text" size="30px" placeholder="LAST NAME*" maxlength="30"/></td>
</tr>
<tr>

<tr>
<td><input type="text" size="30px" placeholder="EMAIL*" maxlength="30"/></td>
</tr>
<tr>
<td><input type="text"  size="30px" placeholder="PASSWORD*" maxlength="30"/></td>
</tr>


<tr>
<td><a href="#" class="btn" style="width: 280px; text-align: center;color: black;">SIGN UP</a>
</tr>

</form> 
</div> 
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