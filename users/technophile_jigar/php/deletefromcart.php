<?php
session_start();
	$email=$_SESSION["user"];
	include 'databaseconnection.php';
	$pid=$_GET["Pid"];
	
	$sql="Delete from cart where Pid=".$pid." and Email='".$email."'";
	echo $sql;
	$result=mysqli_query($conn,$sql);
	if($result){
	header('location:showcart.php');	
	
	}
	

?>