<?php include('dbconnect.php');?>
<?php


if(isset($_POST["email"], $_POST["z"]))
    {

     $email = $_POST["email"];
     $z = $_POST["z"];

      $sql = "SELECT EMAIL,PASSWORD FROM customer WHERE EMAIL = '".$email."' AND  PASSWORD = '".$z."'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
					echo "<center><h1><a href='index.php'> Welcome, Click here to browse our website. </a></center></h1>";

          }
      } else {
          echo "<center><h1><a href='login1.html'> Invalid details, Click here to try again. </a></center></h1>";
      }

}
?>
