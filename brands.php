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
<script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-app.js"></script>

	<script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.13.2/firebase.js"></script>
	<script src="form.js"></script>

	<script>
			storageRef.child('/logo1.png').getDownloadURL().then(function(url) {
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
				var img = document.getElementById('logo1');
				img.src = url;
			}).catch(function(error) {
			// Handle any errors
			});
	</script>
	
	<script>
			storageRef.child('/logo2.jpg').getDownloadURL().then(function(url) {
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
				var img = document.getElementById('logo2');
				img.src = url;
			}).catch(function(error) {
			// Handle any errors
			});
	</script>
	
	<script>
			storageRef.child('/logo4.png').getDownloadURL().then(function(url) {
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
				var img = document.getElementById('logo4');
				img.src = url;
			}).catch(function(error) {
			// Handle any errors
			});
	</script>
	
	<script>
			storageRef.child('/logo5.png').getDownloadURL().then(function(url) {
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
				var img = document.getElementById('logo5');
				img.src = url;
			}).catch(function(error) {
			// Handle any errors
			});
	</script>
	
	<script>
			storageRef.child('/logo6.png').getDownloadURL().then(function(url) {
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
				var img = document.getElementById('logo6');
				img.src = url;
			}).catch(function(error) {
			// Handle any errors
			});
	</script>
	
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

<link rel="stylesheet" href="project.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<style >
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

.box{
 position: inherit;
 display: inline-block;
 height:120px; 
 width:120px; 
 overflow:hidden; 
 margin: 65px;
 border: solid 2px;
 align-content: center;
 border-radius: 10px;
 
 
}


</style>
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
<span style="top:52px" onclick="openNav()">&#9776; MENU </span>

<span class="box" >
<a href="tesla.php" ><img id="logo1"  alt="" ></a>
</span>
<span class="box">
<a href="jeep.php" ><img id="logo2" alt=""></a>
</span>
<span class="box" style="background: white;">
<a href="infinity.php" ><img id="logo4"></a>
</span>
<span class="box" >
<a href="bmw.php" ><img id="logo5"></a>
</span>
<span class="box" style="background: transparent;" >
<a href="aston.php" ><img id="logo6"></a>
</span>




</body>
</html> 