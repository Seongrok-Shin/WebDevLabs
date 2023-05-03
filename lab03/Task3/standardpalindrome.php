<?php

    if(isset($_POST['palindrome'])){
        $str = $_POST['palindrome'];
        $pattern = "/[^A-Za-z0-9]/";
		$upperStr = strtoupper($str);
        $replacedStr = preg_replace($pattern, '', $upperStr);
		if(strcmp($upperStr, strrev($upperStr)) == 0) {
			echo "<p>The text you entered '", htmlspecialchars($str) ,"' is a perfect palindrome.</p>";
		} else if(strcmp($replacedStr, strrev($replacedStr)) == 0){
            echo "<p>The text you entered '", htmlspecialchars($str) , "' is a standard palindrome.</p>";
        } else{
                echo "<p>The text you entered '", htmlspecialchars($str) , "' is not a standard palindrome.</p>";
             }
        } else {
        echo "<p>Please enter a string from the input form.</p>";
    }
?>