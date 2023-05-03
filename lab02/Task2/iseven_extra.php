<?php
    // if(is_string($_GET['number']) == true){
    //     echo "The number is not an integer.";
    // } 
    if($_GET['number'] % 2 == 0){
        echo "The number is an even number.";
    } 
    elseif($_GET['number'] % 2 == 1 ){
        echo "The number is an odd number.";
    }
?>