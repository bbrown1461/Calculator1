<?php
    $con=odbc_connect("MaintenanceScheduel1","","");
        if($con){
            echo "Connected";
        }  
        else{
            echo "Failed";
        }
?>