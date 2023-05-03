<?php
    include "mathfunctions.php";
    
    if($_GET['number'] == 0){
        echo "1";
    } else if(0 < $_GET['number']){
        echo $_GET['number'] * factorial($_GET['number'] - 1);
    } 
    else{
        echo $_GET['number'] . "is invalid input";
    }
?>