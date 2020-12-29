<?php
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone1"];
$brand=$_POST["brand"];
$cmodel=$_POST["cmodel"];
$year=$_POST["year"];
$cmileage=$_POST["cmileage"];
$excon=$_POST["excon"];
$incon=$_POST["incon"];
$ahistory=$_POST["ahistory"];
$modified=$_POST["modified"];
?>

<?php include 'dbconnect.php'; ?>
<?php

$sql = "INSERT INTO sell (NAME,EMAIL,PHONE,BRAND,MODEL,YEAR,MILEAGE,EXCON,INCON,AHISTORY,MODIFIED)
VALUES ('$name','$email','$phone','$brand','$cmodel','$year','$cmileage','$excon','$incon','$ahistory','$modified')";
if (mysqli_query($conn, $sql)) {
    echo "<center> <h2><a href='index.php'> Thank You For selling the car, click to go to homepage </h2> </center></a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>

