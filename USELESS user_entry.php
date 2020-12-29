<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$z=$_POST["z"];
?>

<?php include 'dbconnect.php'; ?>
<?php

$sql = "INSERT INTO customer (F_NAME,L_NAME,EMAIL,PASSWORD)
VALUES ('$fname','$lname','$email','$z')";

if (mysqli_query($conn, $sql)) {
    echo "<center> <h2><a href='login1.html'> Thank You For Registering, Click Here To Login. </h2> </center></a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>

