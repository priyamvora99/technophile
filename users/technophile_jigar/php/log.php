<?php
	session_start();
	include 'databaseconnection.php';
	$email=$_POST["useremail"];
	$password=$_POST["userpassword"];
	$sql="Select * from login where email='".$email."'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		$row=mysqli_fetch_assoc($result);
		if($row["email"]==$email){
			if($row["password"]==md5($password)){

				$_SESSION["user"]=$email;

				header('Location:homepage1.php');
			}else{
				$_SESSION["passwordSuccess"]="false";
				header('Location:signup.php');
			}
		}
	}else{
		$_SESSION["logInCheck"]="false";
		header('Location:signup.php');
		//echo "User not logged in please sign up";
	}

?>
