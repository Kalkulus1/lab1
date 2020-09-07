<?php
include "config.php";

?>

                        <h1>Sensor Listing</h1>
   
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
                    echo '<table>';


                    echo '<thead>
                    <tr>
                        <th>DataID</th>
                        <th>Sensor Name</th>
                        <th>Sensor Type</th>
                        <th>Current Reading</th>
                        <th>Sensor Location</th>
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
    
