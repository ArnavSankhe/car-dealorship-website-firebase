<?php
session_start();

if(!empty($_SESSION['user_id']))
{
}
else {
header("location:login1.php");
}
?>