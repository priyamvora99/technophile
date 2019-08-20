<?php
session_start();
include 'databaseconnection.php';
$email=$_SESSION["user"];
$sql="Select * from procorder where email='".$email."'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$quantityordered=$row["quantityod"];
		$sql1="Select * from search where pid=".$row["pid"];
	
		$result1=mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1)>0){
		while($row1=mysqli_fetch_assoc($result1)){
			$quantityavailable=$row1["Quantity"];
			$qunatityleft=$quantityavailable-$quantityordered;
		
			
					
				if($qunatityleft>=0){	
					$sql3="Update search set Quantity=".$qunatityleft." where Pid=".$row["pid"];
					echo $sql3;
				
					$result3=mysqli_query($conn,$sql3);
					if($result3){
						echo "update in qunatities successful";
						$sql4="Delete from cart where Pid=".$row["pid"]." and Email='".$email."'";
						$result4=mysqli_query($conn,$sql4);
						if($result4){
							echo "deleted from cart";

						}else{
							echo mysqli_error($conn);
						}
					}else{
						echo mysqli_error($conn);
					}
				}
			
		}

		}
	}
}
header('Location:payment.php');

?>

