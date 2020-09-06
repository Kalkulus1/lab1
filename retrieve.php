<?php
include "config.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" >
</head>
<body>


    <div class="container">

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <h1>Sensor Listing</h1>
                    </div>
                </div>
        
        <div class="row">
            <div class="col-lg-12">
   
            <?php
            if(isset($_GET['listing'])){
                if   (($_GET['listing']==1)|| ($_GET['listing']=="")){
                    $data=array();
                    $q=mysqli_query($con,"select * from `iotlab1`");
                    while ($row=mysqli_fetch_object($q)){
                    $data[]=$row;
                    }
                    echo json_encode($data);
                }
                if   ($_GET['listing']==2){
                    $q=mysqli_query($con,"select * from `iotlab1`");
                    echo '<table  id="myTable"  class="table table-hover table-primary" style="margin-top:2rem;" >';


                    echo '<thead>
                    <tr>
                        <th>DataID</th>
                        <th>Sensor Name</th>
                        <th scope="col">Sensor Type</th>
                        <th scope="col">Current Reading</th>
                        <th scope="col">Sensor Location</th>
                    </tr>
                    </thead>';
                    while($row = mysqli_fetch_assoc($q)) {            
                        echo "<tr>
                                <td>{$row["id"]}</td>
                                <td>{$row["SensorName"]}</td>
                                <td> {$row["SensorType"]}</td>
                                <td> {$row["CurrentReading"]}</td>
                                <td> {$row["SensorLocation"]}</td>
                            </tr>";
                    }
                    echo  "</table>";
                }
            }
    ?>
            </div>
        </div>
    </div>
    





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" ></script>
<script src="script.js"></script>
</body>
</html>