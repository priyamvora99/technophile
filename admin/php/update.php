<?php 
include "databaseconnection.php"; 
header('Content-Type: text/html; charset=ISO-8859-1');
if(isset($_POST["pid"])){
    $pid=$_POST["pid"];
    $name=$_POST["name"];
    $image=$_POST["image"];
    $qty=$_POST["quantity"];
    $perday=$_POST["perday"];
    $deposit=$_POST["deposit"];
    $dbTable=$_POST["dbTable"];
    $sql="Update ".$dbTable." set Pid = ".$pid.",Name= '".$name."',Image='".$image."',Quantity=".$qty.",Perday=".$perday.",Deposit=".$deposit." where Pid=".$pid.""; 
    if (mysqli_query($conn, $sql)) {
        
        $sql1="Update search set Pid = ".$pid.",Name= '".$name."',Image='".$image."',Quantity=".$qty.",Perday=".$perday.",Deposit=".$deposit." where Pid=".$pid.""; 
        if(mysqli_query($conn,$sql1)){
            echo "Successfully updated.";
        }
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

?>