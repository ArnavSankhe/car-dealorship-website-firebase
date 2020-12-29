<?php include('dbconnect.php');?>
<?php


if(isset($_POST["model1"], $_POST["class1"]))
    {

     $model1 = $_POST["model1"];
     $class1 = $_POST["class1"];

      $sql = "SELECT AVAILABILITY FROM cars WHERE MODEL = '".$model1."' AND  CLASS = '".$class1."' AND AVAILABILITY>0";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
					echo "<center><h1><a href='buy.php'> Cars are available, click to buy </a></center></h1>";

          }
      } else {
          echo "<center><h1><a href='index.php'> Invalid details, click to go to home. </a></center></h1>";
      }

}
?>
