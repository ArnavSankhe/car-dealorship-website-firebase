<?php
session_start();

if(!empty($_SESSION['user_id']))
{
    echo "<div class='back'>
	<center>
		<div class='btn' style='float:right; display: inline-block; margin:40px 20px; padding: 10px;'>
		<a href='logout.php' style='color:white;text-decoration: none;'>LOGOUT</a></div>
		
		<h1 style='display: inline-block;' class='generalTitle' > DEALS ON WHEELS </h1>
	</center> 
	
</div>";
}
else {
echo "<div class='back'>
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

.btn{

    display: inline-block;
    position: relative;
    padding: 10px 30px;
    text-decoration: none;
    font-size: 1.1em;
	 text-transform: uppercase;
	 color:black;
	 border: 2.97px solid #bb8847;
	 border-radius: 10px;	
    

}


.btn:hover{
background-color: #bb8847;
transition: 0.6s;
}
.back{

height:100%;	
background: url("tesla1.jpg");
background-repeat: no-repeat;
border:solid 3px #bb8847;
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
<span style="top:52px; left: 20px;" onclick="openNav()">&#9776; Menu</span>

</div>
<div style="background-color: white;" class="carinfo">
<form method=POST >
<table cellpadding = "15">
 
<tr>
<td>
<select name="model1" style=" width: 300px;" id=''>
<option>Select Model</option>
<option value="S">Model S</option>
<option value="X75">Model X 75D</option>
<option value="XP100">Model X P100D</option>
<option value="SP90">S -P 90D</option>

</select>
</td>
<td>	<center><input class="btn" type="submit" name="FIND"></center></td>
</tr>
</form> 
</div>  
<?php include('dbconnect.php');?>
<?php


if(isset($_POST["model1"]))
    {

     $model1 = $_POST["model1"];

      $sql = "SELECT * FROM cars WHERE MODEL = '".$model1."' AND AVAILABILITY>0";
      $result = $conn->query($sql);
	  while($row = $result->fetch_assoc())
	  {
      if ($row['MODEL']=='S') {
					echo '<script type="text/javascript">
           window.location = "models.php"
      </script>';
      }
	  if ($row['MODEL']=='SP90') {
					echo '<script type="text/javascript">
           window.location = "sp90d.php"
      </script>';
      }
	  
	  else {
          echo "<center><h1>Cars not available, try again. </center></h1>";
      }

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