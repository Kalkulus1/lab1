<?php
//Procedural
include "config.php";

if(isset($_GET['delete']))
    if(isset($_GET['id']))
     {
        $id=$_GET['id'];
        $sql2="delete from `iotlab1` where `id`='$id'";
        //echo $sql2;
        $q=mysqli_query($con,$sql2);
        if($q)
            echo "<h1>success</h1>";
        else
            echo "<h1 style='color: red;'>Error: Couldno delete the record.</h1>";
     }

?>
