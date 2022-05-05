<?php 
    if(isset($_GET['submit'])){
        $result1 = $_GET['num01'];
        $result2 = $_GET['num02'];
        $operator = $_GET['operator'];
        switch($operator){
            case "None":
                echo "Please Select a method!";
                break;

            case "Add":
                echo $result1 + $result2;
                break;
            
            case "Subtract":
                echo $result1 - $result2;
                break;

            case "Multiply":
                echo $result1 * $result2;
                break;

            case "Divide":
                echo $result1 / $result2;
                break;
        }
    }
?>