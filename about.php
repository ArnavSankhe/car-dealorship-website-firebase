  <html>
<head>
<link rel="stylesheet" href="project.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{

}

.about{
position: relative;
border:3px solid #bb8847;
border-radius: 20px;
text-align: center;
padding: 5px;
}
.des{
margin-top: 10px;
border:3px solid #bb8847;
border-radius: 20px;
height: 800px;
background-color: black;
padding-top: 50px;
padding-right: 50px;
padding-left: 100px;
background-image: url(bk3.jpg);


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
<span style="top:52px; left: 20px;" onclick="openNav()">&#9776; </span>
<div>
	<center>
		
		
		<h1 style="display: inline-block;" class="generalTitle" > DEALS ON WHEELS </h1>
		<hr style="color:#bb8847 ; ">
	</center> 
	
</div>
<div class="about">
<h1 style="color: #bb8847; ">ABOUT US</h1>
</div>
<div class="des" >
<h1 style="color:#bb8847 ; font-size: 20px; ">The Market Leader in Pre-owned <br> Luxury and Sports Cars</h1>
<p style="color:#bb8847 ; font-size: 20px;  float: left;">Deals on Wheels was established in 2008 and it is the fastest growing car dealership in the world.
<br>
<br>
We have a reputation of making it our business to understand the individual needs of our clients and ensure that we offer them 
something that will align with their budget. We understand that some of our clients are new market entrants seeking an affordable 
luxury vehicle. We serve their individual needs by creating customized financial packages to ensure that their dream of owning a luxury car
 is a reality, and they leave Deals on Wheels satisfied with our service. Our belief is the buying and selling experience should be free of
  stress and overall an enjoyable experience. Our sales team is well versed in all the brands we sell and effective in communicating the 
  features and benefits of each of the cars we sell.
  <br>
  <br>
  Our extensive collection of exclusive luxury cars cannot be found anywhere else in the world, with brands such as Bentley, 
  Rolls Royce, and Maybach. Our Supercars collection include cars from Koenigsegg,  Bugatti, McLaren, Lamborghini, to name a few and we
   also have amazing performance cars from brands such as Ferrari, Aston Martin, Porche, Maserati, among others.  We also cater to the
    SUV and entry-level sports cars market, with cars such as Bentley Bentayga, Range Rover, and Mercedes AMG as well as Jaguar, Infiniti,
     Mercedes, BMW, and Audi.  All this makes for a unique buying experience for our customers, allowing them the ability to choose from a 
     variety of brands at competitive prices. 
     <br><br>
     We welcome part exchanges and offer competitive prices to ensure our clients don’t have to invest their own time and money 
     in marketing their car to potential buyers. Our reputation is demonstrated in our excellence in serving the needs of each of our 
     customers before, during and after the sale. Many of our clients are existing customers who simply keep returning to deals on wheels
      to enhance their lifestyle.
      <br>
      <br>
      
    <center><a class="btn" href="getintouch.php">Get In Touch</a></center>
 </p>
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
