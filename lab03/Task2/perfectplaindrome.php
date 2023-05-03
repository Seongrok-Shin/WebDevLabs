<?php
    function isPalindrome($str){
        $toUpperCase = strtoupper($str);
        if(strcmp($toUpperCase, strrev($toUpperCase)) == 0){
            return true;
        } else{
            return false;
        }
    }
    
    $str = $_POST['palindrome'];

    if(isset($str)){
            if(isPalindrome($str)){
                echo "<p>The text you entered ", $str , " is a perfect palindrome.</p>";
            } else{
                echo "<p>The text you entered ", $str , " is not a perfect palindrome.</p>";
            }
        } else {
        echo "<p>Please enter a string from the input form.</p>";
    }
?>