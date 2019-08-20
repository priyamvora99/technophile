<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

include 'databaseconnection.php';
$date=$_POST["userdate"];

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$address=$_POST["useraddress"];
$phone=$_POST["userphone"];
$email=$_SESSION["user"];

$totamount=0;
$sql="Select * from cart where Email='".$email."'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){

	while($row=mysqli_fetch_assoc($result)){
		


		$pid=$row["Pid"];
		echo "CART PID: ". $pid;
		echo "<br>";
		
		$name=$row["Name"];
		$quantity=$row["Quantity"];
		$perday=$row["Perday"];
		$cartEmail=$row["Email"];
		$totamount+=$quantity*$perday;
		$sql2="Select email,pid from procorder where date='".$date."'";
		$result2=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2)>0){
			
			
			
			while($row2=mysqli_fetch_assoc($result2)){
				
					if($row2["email"]==$cartEmail){
					
						$sql1="Insert into procorder values('$fname','$lname','$address',$phone,'$cartEmail',$pid,$quantity,'$name',$perday,'$date')";
						$result1=mysqli_query($conn,$sql1);
				if($result1){
						
						
						break;
					
				}else{
						echo mysqli_error($conn);
					}
				
			}else{
					
				}
			}
		}else{
			
			$sql1="Insert into procorder values('$fname','$lname','$address',$phone,'$cartEmail',$pid,$quantity,'$name',$perday,'$date')";
						$result1=mysqli_query($conn,$sql1);
				if($result1){
					
				}else{
						echo mysqli_error($conn);
					}
			
		}

		
	}
	$_SESSION["amount"]=$totamount;
	header('Location:sendEmailTechnoPhile.php');
}

?>

</body>
</html>


