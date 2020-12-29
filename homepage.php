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
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


.btn {

    display: inline-block;
    position: relative;
    padding: 10px 30px;
    text-decoration: none;
    font-size: 1.1em;
	 text-transform: uppercase;
	 color: #000;
	 border: 2.97px solid #bb8847;
	 border-radius: 10px;	
    

}
.btn:hover{
background-color: #bb8847;
transition: 0.6s;

}
a {
    background-color: transparent;
}
img{
 border-radius: 20px;
}
.aboutBlock{
width: 100%;
}
.generalTitle {

    color: #bb8847;
    margin: 1.5em auto;
    font-weight: 300;

}
.infoBlock{
position :inherit;
margin: 20px;
}
body {

    font-family: "Lato", sans-serif;
    margin: 10px;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  	
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #bb8847;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
.pos{
		position: absolute;
		width: 500px;
		height: auto;
	
}
span{
    float: left;
    font-size:30px;
    cursor:pointer;
    position: fixed;
	color: #bb8847;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}





.mySlides {
			display: none;
}
img {vertical-align: middle;}


.slideshow-container {
  width: auto;
  height: auto;
  position: relative;
  margin: 40px;
}


 .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: black;
  transition: 0.6s;
  border-radius: 10px;
  right: 0;
}

 .next:hover {
  background-color:  #bb8847;
}



.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
   .next,.text {font-size: 11px}
}
</style>
</head>
<body>
<div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
  <a href="#">Buy</a>
  <a href="#">Sell</a>
    <a href="#">Rent</a>
</div>
<span  onclick="openNav()">&#9776; Menu</span>
<center><h1 class="generalTitle" > DEALS ON WHEELS </h1><center> 
<div class="slideshow-container">
<div class="mySlides fade">
	<img src="car1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
   <img src="car2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="car3.jpg" style="width:100%">
</div>


<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div class="aboutBlock">
<hr>
<h2 class="generalTitle">ABOUT DEALS ON WHEELS</h2>
<hr>
</div>
<div class="infoBlock">
<p><strong>Deals on Wheels is one of the leading pre owned super car dealerships in the world and the most respected in the UAE with an inventory of over 200 of the most prestigious vehicles.</strong></p>
<p>Our reputation as an established, specialized and reliable dealership allows us to offer our clients a higher level of service 
at competitive prices. We believe in giving our clients a hassle free experience, from start to finish, and ensure that they leave our
 dealership with the car of their dreams. Our professional sales team is always available to make sure that your dream pre-owned car
  is offered to you, and are committed to ensure that you receive the best car at the right price.</p>
  <a class="btn" href="#">Get In Touch</a>
</div>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
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
  
  if (n > slides.length) 
  {slideIndex = 1}    
  if (n < 1) 
  {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
 
  slides[slideIndex-1].style.display = "block";  
  
}
</script>

</body>
</html> 
