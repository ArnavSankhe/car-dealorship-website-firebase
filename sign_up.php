


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
<form method=POST>

  
 
        
<table cellpadding = "15">
 
<tr>
<td><input type="text" size="30px" placeholder="FIRST NAME*" name="fname" required="required" maxlength="30"/></td>
</tr>
<tr>
<tr>
<td><input type="text" size="30px" placeholder="LAST NAME*" name="lname" required="required" maxlength="30"/></td>
</tr>
<tr>

<tr>
<td><input type="text" size="30px" placeholder="EMAIL*" name="email" required="required" maxlength="30"/></td>
</tr>
<tr>
<td><input type="password"  size="30px" placeholder="PASSWORD*" name="z" required="required" maxlength="30"/></td>
</tr>


<tr>
<td><input class="btn" type="submit" name="LOGIN">
</tr>

</form>

</div> 
<?php include('dbconnect.php');?>
<?php


if(isset($_POST["fname"]))
    {

     $fname=$_POST["fname"];
	 $lname=$_POST["lname"];
	 $email=$_POST["email"];
	 $z=$_POST["z"];

      $sql = "INSERT INTO customer (F_NAME,L_NAME,EMAIL,PASSWORD)
VALUES ('$fname','$lname','$email','$z')";

if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">
           window.location = "login1.php"
      </script>';
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