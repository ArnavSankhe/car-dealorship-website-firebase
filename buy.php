<?php include 'dbconnect.php';?>
<?php
session_start();

if(!empty($_SESSION['user_id']))
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
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

	}

}
}

echo "abc";
?>