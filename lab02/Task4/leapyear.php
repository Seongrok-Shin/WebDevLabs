<?php
    function is_leapyear($year)
    {
        if(is_numeric($year) && ($year % 4 == 0) && ($year % 100 != 0) || ($year % 400 == 0)){
            return true;
        } else{
            return false;
        }
    }

    $getYear = $_GET['year'];

    if (is_leapyear($getYear) == true) {
        echo "The year you entered $getYear is a leap year.";
    } else {
        echo "The year you entered $getYear is a standard year.";
    }
?>