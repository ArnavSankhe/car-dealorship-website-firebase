<?php
session_start();

// if(!empty($_SESSION['user_id']))
// {
    // echo "
	// <center>
		// <div class='btn' style='float:right; display: inline-block; margin:40px 20px; padding: 10px;'>
		// <a href='logout.php' style='color:white;text-decoration: none;'>LOGOUT</a></div>
		
		// <h1 style='display: inline-block;' class='generalTitle' > DEALS ON WHEELS </h1>
	// </center> 
	
// </div>";
// }
// else {
// echo "<div>
	// <center>
		// <div class='btn' style='float:right; display: inline-block; margin:40px 20px; padding: 10px;'>
		// <a href='login1.php' style='color:white;text-decoration: none;'>LOGIN</a></div>
		
		// <h1 style='display: inline-block;' class='generalTitle' > DEALS ON WHEELS </h1>
		// </center> 
	
// </div>";
// }
?>

<html>
<head>
	<script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-app.js"></script>

	<script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.13.2/firebase.js"></script>
	<script src="form.js"></script>

	<script>
			storageRef.child('/car1.jpg').getDownloadURL().then(function(url) {
				// `url` is the download URL for 'images/stars.jpg'

				// This can be downloaded directly:
				var xhr = new XMLHttpRequest();
				xhr.responseType = 'blob';
				xhr.onload = function(event) {
				var blob = xhr.response;
				};
				xhr.open('GET', url);
				xhr.send();

				// Or inserted into an <img> element:
				var img = document.getElementById('car1');
				img.src = url;
			}).catch(function(error) {
			// Handle any errors
			});
	</script>
	<script>
			storageRef.child('/car2.jpg').getDownloadURL().then(function(url) {
				// `url` is the download URL for 'images/stars.jpg'

				// This can be downloaded directly:
				var xhr = new XMLHttpRequest();
				xhr.responseType = 'blob';
				xhr.onload = function(event) {
				var blob = xhr.response;
				};
				xhr.open('GET', url);
				xhr.send();

				// Or inserted into an <img> element:
				var img = document.getElementById('car2');
				img.src = url;
			}).catch(function(error) {
			// Handle any errors
			});
	</script>
	<script>
			storageRef.child('/car3.jpg').getDownloadURL().then(function(url) {
				// `url` is the download URL for 'images/stars.jpg'

				// This can be downloaded directly:
				var xhr = new XMLHttpRequest();
				xhr.responseType = 'blob';
				xhr.onload = function(event) {
				var blob = xhr.response;
				};
				xhr.open('GET', url);
				xhr.send();

				// Or inserted into an <img> element:
				var img = document.getElementById('car3');
				img.src = url;
			}).catch(function(error) {
			// Handle any errors
			});
	</script>
	
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

img{
 border-radius: 20px;
}
.aboutBlock{
width: 100%;
}

.infoBlock{
position :inherit;
margin: 20px;
color: #bb8847;
}



.pos{
		position: absolute;
		width: 500px;
		height: auto;
	
}
.mySlides {
			display: none;
}
img {
vertical-align: middle;}


.slideshow-container {
  width: 800px;
  height:500px;
  position: relative;
  left:200px;
  margin: 40px;
}


 .next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  
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
.login{
display: none;
width: auto;
height: auto;
position: absolute;
float: left;
}

.btn:click .login {
display: block;
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
<span style="top:52px; left: 20px;" onclick="openNav()">&#9776; Menu</span>

<div   class="slideshow-container">
<div class="mySlides fade">
	<!-- <script>
			storageRef.child('car1.jpg').getDownloadURL().then(function(url) {
				// `url` is the download URL for 'images/stars.jpg'

				// This can be downloaded directly:
				var xhr = new XMLHttpRequest();
				xhr.responseType = 'blob';
				xhr.onload = function(event) {
				var blob = xhr.response;
				};
				xhr.open('GET', url);
				xhr.send();

				// Or inserted into an <img> element:
				var img = document.getElementById('myimg');
				img.src = url;
			}).catch(function(error) {
			// Handle any errors
			});
	</script> -->
	<img id="car1" style="width:100%">
	
</div>

<div class="mySlides fade">
   <img id="car2" style="width:100%">
</div>

<div class="mySlides fade">
  <img id="car3" style="width:100%">
</div>


<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div class="aboutBlock" style="text-align: center;">
<hr style="color:#bb8847 ; ">
<h2 class="generalTitle">ABOUT DEALS ON WHEELS</h2>
<hr style="color:#bb8847 ; ">
<div class="infoBlock">
<p><strong>Deals on Wheels is one of the leading pre owned super car dealerships in the world and the most respected in the UAE with an inventory of over 200 of the most prestigious vehicles.</strong></p>
<p>Our reputation as an established, specialized and reliable dealership allows us to offer our clients a higher level of service 
at competitive prices. We believe in giving our clients a hassle free experience, from start to finish, and ensure that they leave our
 dealership with the car of their dreams. Our professional sales team is always available to make sure that your dream pre-owned car
  is offered to you, and are committed to ensure that you receive the best car at the right price.</p>
  <a class="btn" href="getintouch.html">Get In Touch</a>
<hr style="color:#bb8847 ;  ">	
</div>
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
