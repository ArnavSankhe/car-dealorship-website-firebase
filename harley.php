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
.back{
border:solid 3px #bb8847;
background: url("har1.jpg");
height:100%;	
background-repeat: no-repeat;
border-radius: 20px;
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
<span style="top:52px ; left: 20px;"  onclick="openNav()">&#9776; Menu</span>

</div>
<div style="background-color: white;" class="carinfo">
<form>
<table cellpadding = "15">
 
<tr>
<td>

<select style=" width: 300px;" id=''>
<option value="-1">Select Model</option>
<option value="">Model S</option>
<option value="">Model X 75D</option>
<option value="">Model X P100D</option>
<option value="">S -P 90D</option>

</select>
</td>
<td>

<select style=" width: 300px;" id=''>
<option value="-1">Select Class</option>
<option value="">Convertible</option>
<option value="">Coupe</option>
<option value="">Crossover</option>
<option value="">Hatchback</option>
<option value="">Other</option>

</select>
</td>
<td>

<select style=" width: 300px;" id=''>
<option value="-1">Price Range</option>
<option value="">Model S</option>
<option value="">Model X 75D</option>
<option value="">Model X P100D</option>
<option value="">S -P 90D</option>

</select>
</td>
<td>	<div class="btn" style="height: 20px; width: 200px ; color: black;"><center>FIND</center></div></td>
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