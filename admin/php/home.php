<?php 

    include "databaseconnection.php"; 
    //header('Content-type: application/json');
    header('Content-Type: text/html; charset=ISO-8859-1');
    $sql="Select * from search";
    $result=mysqli_query($conn,$sql);
    $resArray=array();
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
            array_push($resArray,$row);
        }
    }
   
    $myJson=json_encode($resArray);
    echo $myJson;
?>