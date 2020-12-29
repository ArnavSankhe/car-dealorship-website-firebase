<?php
session_start();

if(!empty($_SESSION['user_id']))
{
    echo "";
}
else {
echo "";
}
?>

<html>
<head>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<!-- <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-auth.js"></script> -->

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyA2ckAeTAG8ch1nbJMWWHk0l3-p8IB7N1M",
    authDomain: "cars-91a26.firebaseapp.com",
    databaseURL: "https://cars-91a26.firebaseio.com",
    projectId: "cars-91a26",
    storageBucket: "cars-91a26.appspot.com",
    messagingSenderId: "713005989129",
    appId: "1:713005989129:web:b776aa7b25857b4e97e7d8",
    measurementId: "G-Q0JS5Q37JM"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

<script src="form.js"></script>

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
background-image: url("bk3.jpg");
	background-repeat: no-repeat;
	background-size:  100%;
	

}
.signup{
	
	position: absolute;
	right: 30px;
	background-color:white;
	height: 450px; 
	width:450px;
	border:solid 2px;
	border-radius: 20px;
	opacity: 0.8;
	
}
table{
padding:25px;
width: 250px;
}
</style>
</head>
<body>
<div>
	<center>
		<div class='btn' style='float:right; display: inline-block; margin:40px 20px; padding: 10px;'>
		<a href='logout.php' style='color:white;text-decoration: none;'>LOGOUT</a></div>
		
		<h1 style='display: inline-block;' class='generalTitle' > DEALS ON WHEELS </h1>
	</center> 
	
</div>
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
<h1 style="font-size: 30px; text-align:center; color:#bb8847; ">LOGIN</h1>
  
 
        
<table cellpadding = "15">
 


<tr>
<td><input type="email" size="30px" placeholder="EMAIL*" id="email" maxlength="30"/></td>
</tr>
<tr>
<td><input type="password"  size="30px" placeholder="PASSWORD*" id="password" maxlength="30"/></td>
</tr>


<tr>
<td><button onclick="signIn()" id="signIn">SignIn</button></td>
</tr>
<TR><td>Don't have an account?<a href="sign_up.php">Sign up</a></td></TR>

</div> 

<?php include 'dbconnect.php';?>
<?php

if(isset($_POST["email"], $_POST["z"]))
    {

     $email = $_POST["email"];
     $z = $_POST["z"];

      $sql = "SELECT * FROM customer WHERE EMAIL = '".$email."' AND  PASSWORD = '".$z."'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
					echo '<script type="text/javascript">
           window.location = "index.php"
      </script>';
$ID=$row['ID'];

$_SESSION['user_id'] =$ID;
          }
      } else {
          echo "<center><h1><a href='login1.php'> Invalid details, Click here to try again. </a></center></h1>";
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