<?php
include 'databaseconnection.php';
$email=$_SESSION["user"];
$sql="Select * from cart where email='".$email."'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

?>