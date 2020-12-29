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
	.bottom-left {color: aliceblue;
    position: absolute;
    bottom: 8px;
	left: 16px;
	margin-left: 130px;	
	}



	input[type=text] {
    width: 700px;
    padding: 12px 20px;
    margin: 8px 0;
    border: 3px solid #bb8847 ;
 		border-radius: 20px; 
    background-color: #404040;
		color: white;
			
		}
	
	select {
	width: 700px;
padding: 12px 20px;
    margin: 8px 0;
  background-color: #404040;
  border: 3px solid #bb8847 ;
  border-radius: 20px;
 
  font: inherit;
  
	
		color: white;
	}
	.option{   border-radius: 20px; }
	



.textcol{
color:	 #bb8847;

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



<div class="container">
	<center><img src="2.jpg" width=80% ></center>
	<div class="bottom-left" align="left" ><h1>SELL YOUR CAR</h1>
	  WE LOVE CARS. NEW AND OLD. BIG AND SMALL. CONVERTIBLE AND SUV. <BR>
      LET US TAKE CARE OF THE SALES PROCESS. </div>
</div>
<center>
<form method=POST>
<table cellpadding = "5">

<tr>	<td><input type="text" size="30px" placeholder="YOUR NAME*" name="name" echo $row['F_NAME']; required="required"></td></tr>
<tr>	<td><input type="text" size="30px" placeholder="YOUR EMAIL*" name="email" required="required"></td></tr>
<tr>	<td><input type="text" size="30px" placeholder="YOUR PHONE*" name="phone1" required="required"></td></tr>
<tr>	<td>  <select name="brand">
  <option>CAR BRAND*</option>
  <option value="bmw">BMW
  <option value="tesla">TESLA
         </select>
       </td></tr>
	<tr><td><input type="text"  placeholder="CAR MODEL*" name="cmodel" required="required"></td><tr>
	 <tr>  <td>  <input type="text" size="30px" placeholder="YEAR*" name="year" required="required"></td></tr>
	<tr><td>	<input type="text" size="30px" placeholder="MILAGE(KM)*" name="cmileage" required="required"></td></tr>
	<tr>	 <td> <input type="text" size="30px" placeholder="EXTERIOR CONDITION* :      BEST/GOOD" name="excon" required="required">td></tr>
  <tr>       <td>   <input type="text" size="30px" placeholder="INTERIOR CONDITION* :      BEST/GOOD" name="incon" required="required"></td></tr>
<tr>	 <td> <input type="text" size="30px" placeholder="ACCIDENT HISTORY* :      YES/NO" name="ahistory" required="required"></td></tr>
  <tr>     <td>     <input type="text" size="30px" placeholder="MODIFIED/GCC SPECS*:       YES/NO" name="modified" required="required"></td></tr>
          
         
      
<tr>
<td><center><input class="btn" type="submit" name="SELL"></center>
</tr>
</form>
<?php include('dbconnect.php');?>
<?php


if(isset($_POST["name"]))
    {
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone1"];
$brand=$_POST["brand"];
$cmodel=$_POST["cmodel"];
$year=$_POST["year"];
$cmileage=$_POST["cmileage"];
$excon=$_POST["excon"];
$incon=$_POST["incon"];
$ahistory=$_POST["ahistory"];
$modified=$_POST["modified"];


$sql = "INSERT INTO sell (NAME,EMAIL,PHONE,BRAND,MODEL,YEAR,MILEAGE,EXCON,INCON,AHISTORY,MODIFIED)
VALUES ('$name','$email','$phone','$brand','$cmodel','$year','$cmileage','$excon','$incon','$ahistory','$modified')";
if (mysqli_query($conn, $sql)) {
    echo "<center> <h2><a href='index.php'> Thank You For selling the car, click to go to homepage </h2> </center></a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
?>  
</center>
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
