<?php


//Procedural
include "config.php";


if(isset($_GET['insert']))
 {

    $SensorName=$_GET['SensorName'];
    $SensorType=$_GET['SensorType'];
    $CurrentReading=$_GET['CurrentReading'];
    $SensorLocation=$_GET['SensorLocation'];
    
    $sql="INSERT INTO `iotlab1` (`SensorName`,`SensorType`,`CurrentReading`,`SensorLocation`) VALUES (";
    $sql2="'$SensorName','$SensorType' ,'$CurrentReading' ,'$SensorLocation')";
    $sql= $sql.$sql2;
    //echo  $sql;
    $q=mysqli_query($con,$sql);

 
   if($q)
      echo "<h1>success</h1>";
   else
      echo "<h1 style='color: red;'>Error: Could not update the record.</h1>";
 }



//####################################################
?>