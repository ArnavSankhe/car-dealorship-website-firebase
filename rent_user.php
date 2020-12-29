<?php
$name=$_POST["name"];
$phone=$_POST["phone1"];
$email=$_POST["email"];
$brand=$_POST["brand"];
?>

<?php include 'dbconnect.php'; ?>
<?php

$sql = "INSERT INTO RENT (NAME,PHONE,EMAIL,BRAND)
VALUES ('$name','$phone','$email','$brand')";

if (mysqli_query($conn, $sql)) {
    echo "<center> <h2><a href='index.php'> Thank You For renting the car, click to go to homepage </h2> </center></a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>

