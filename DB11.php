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
img {
  vertical-align: middle;
  border: 2px soild #bb8847;
  border-radius: 20px;
}

.container {
  position: relative;
  border: 3px solid #bb8847;
  border-radius: 20px;
  width: 100%;

}
.mySlides {
	margin-top: 25px; 	
 	width: 400px;
  height: 300px;
  padding-left: 450px;

  overflow: hidden;
 

  
}

.cursor {
  cursor: pointer;
}



.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 20px;
  user-select: none;
  -webkit-user-select: none;
}

.next {
  top:180px;
  right:400px;
  border :3px solid  #bb8847;
}



.next:hover {
  background-color: #bb8847;
  
}



.row:after {
  content: "";
  display: table;
  clear: both;
}


.column {
  float: left;
  width: 16.66%;
padding: 22px;
}


.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.btn {
		outline: none;
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
.model{
width: 100%;
height: 100px;
background-color: #212121;
border-radius: 20px;
border:3px solid #bb8847;
text-align: center;
margin-bottom: 10px;

}
.specification{
width:100%;
height: 600px;
margin-top: 10px;
background-color: black;
border:3px solid  #bb8847;
border-radius:20px; 
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
<span style="top:52px; left: 20px; z-index: 1;" onclick="openNav()">&#9776;</span>

<div class="model">
<h2 style="margin-right: 120px; " class="generalTitle">
2017 Aston Martin - DB11
</h2>
</div>


<div class="container">
  <div class="mySlides">
    
    <img src="as1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
   
    <img src="as2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
  
    <img src="as3.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    
    <img src="as4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    
    <img src="as5.jpg" style="width:100%">
  </div>
    

    
  <a class="prev" onclick="plusSlides(-1)">&#10095;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="as1.jpg" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="as2.jpg" style="width:100%" onclick="currentSlide(2)">
    </div>
    <div class="column">
      <img class="demo cursor" src="as3.jpg" style="width:100%" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="as4.jpg" style="width:100%" onclick="currentSlide(4)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="as5.jpg" style="width:100%" onclick="currentSlide(5)" >
    </div>    
 
  </div>
</div>
<div class="specification">
<div style="text-align: center;">
<h2 style="margin-right: 120px;" class="generalTitle">SPECIFICATION </h2>
</div>
<center>
<table cellspacing="10" cellpadding="" style="font-weight: bold;color:#bb8847;text-transform: uppercase;font-size: 20px; border:3px solid  #bb8847; background-color: #212121; width: 70%; border-radius: 20px; ">
<tr ><td style="float: left;">YEAR</td><td style="float:right;">2017</td></tr>
<tr ><td style="float: left;">CLASS</td><td style="float:right;">Coupe</td></tr>
<tr ><td style="float: left;">HORSE POWER</td><td style="float:right;">600</td></tr>
<tr ><td style="float: left;">ENGINE size</td><td style="float:right;">5.2L Turbo Charge V12</td></tr>
<tr ><td style="float: left;">Color</td><td style="float:right;">white</td></tr>
<tr ><td style="float: left;">Fuel</td><td style="float:right;">Gasoline</td></tr>
<tr ><td style="float: left;">Gear Box</td><td style="float:right;">Automatic</td></tr>
<tr ><td style="float: left;">Doors</td><td style="float:right;">2</td></tr>
<tr ><td style="float: left;">Seats</td><td style="float:right;">4</td></tr>
<tr ><td style="float: left;"> Cylinders</td><td style="float:right;">12<td></tr>
<tr ><td style="float: left;">specs</td><td style="float:right;">GCC</td></tr>
</table>
</center>
<center>
<form method=POST>
<input type='hidden' name='BRAND' value='ASTONMARTIN'>
<input type='hidden' name='MODEL' value='DB11'>
<input type='submit' name='submit' value='buy' style="margin: 20px; width: 200px; " class="btn" >
<?php include 'dbconnect.php'?>
<?php
if(isset($_POST['submit']))
{
$se=$_SESSION['user_id'];
$brand=$_POST['BRAND'];
$model=$_POST['MODEL']	;
$sql = "SELECT F_NAME,EMAIL from customer where PASSWORD='1234'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$name=$row['F_NAME'];
		$email=$row['EMAIL'];
	}
$sql = "INSERT INTO buy(NAME,EMAIL,BRAND,MODEL) VALUES ('$name','$email','$brand','$model')";
if (mysqli_query($conn, $sql)) {
	echo "<center> <h2><a href='index.php'> Thank You For selling the car, click to go to homepage </h2> </center></a>";
	
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

	}

}
}

?>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
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
