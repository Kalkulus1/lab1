<?php

include "config.php";

if(isset($_GET['update']))
{
   $SensorName=$_GET['SensorName'];
   $SensorType=$_GET['SensorType'];
   $CurrentReading=$_GET['CurrentReading'];
   $SensorLocation=$_GET['SensorLocation'];
   $id=$_GET['id'];

   $sql="UPDATE `iotlab1` SET 
            `SensorName`='$SensorName',
            `SensorType`='$SensorType',
            `CurrentReading`='$CurrentReading',
            `SensorLocation`='$SensorLocation'";
   $sql2= " where `id`='$id'"; 
   $sql=$sql.$sql2;    

   $q=mysqli_query($con, $sql);
   if($q)
      echo "<h1>success</h1>";
   else
      echo "<h1 style='color: red;'>Error: Could not update the record.</h1>";
}

?>