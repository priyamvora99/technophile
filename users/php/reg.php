<?php
	session_start();	
	include 'databaseconnection.php';
	$email=$_POST["useremail"];
	$password=$_POST["userpassword"];
	$first=$_POST["fname"];
	$last=$_POST["lname"];
	$phone=$_POST["userphone"];
	$address=$_POST["useraddress"];
	$sql1="Select * from login where email='".$email."'";
	$result=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($result)>0){
		$_SESSION["userExists"]="true";
		//header('Location:signup.php');
		echo "User already exists with email: ".$email;

	}else{
		$sql="Insert into signup(email,password,name,address,phone,lname) values('$email','".md5($password)."','$first','$address',$phone,'$last')";
		if(mysqli_query($conn,$sql)){
		$sql2="Insert into login(email,password) values('$email','".md5($password)."')";
		$result1=mysqli_query($conn,$sql2);
		if($result){
		$_SESSION["user"]=$email;	
		
		//header('Location:homepag1.php');

		echo "success";

		}else{
			echo mysqli_error($conn);
		}
	}else{
		echo mysqli_error($conn);
	}
}
?>