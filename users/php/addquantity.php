<?php
	session_start();
	$email=$_SESSION["user"];
	include 'databaseconnection.php';
	$pid=$_GET["Pid"];
	
	$sql="Select Email,Pid,Quantity,Name,Perday,Image,Maxquantity from cart where Pid=".$pid." and Email='".$email."'";
	echo $sql;
	$result=mysqli_query($conn,$sql);
	if($result){
		if(mysqli_num_rows($result)>0){
			echo "if";
		while($row=mysqli_fetch_assoc($result)){
			echo "while";
			if($row["Quantity"]<$row["Maxquantity"]){
				echo "if";
				echo $row["Quantity"];
				$quantity=$row["Quantity"];
				$quantity++;
				$sql1="Update cart set Quantity=".$quantity." where Pid=".$pid."";
				$result=mysqli_query($conn,$sql1);
				header('location:showcart.php');

			}else{
								header('location:showcart.php');

				echo "else";
			}
		}
	}
	}else{
		echo "else";
		echo mysqli_error($conn);
	}
	

?>