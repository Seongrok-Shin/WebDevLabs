<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Standard Palindrome</title>
</head>
<body>
    <h1>LAB03 Task 3 - Standard Palindrome</h1>
    <form action = "standardpalindrome.php" method = "post">
        <p>String: <input type = "text" name = "palindrome" /></p>
        <p><input type = "submit" value = "Check for Standard Palindrome" /></p>
    </form>
    <?php
        if(isset($_POST['palindrome'])){
            $str = $_POST['palindrome'];
            $pattern = "/[^A-Za-z0-9]/";
            $replacedStr = strtoupper(preg_replace($pattern, '', $str));
            if(strcmp($replacedStr, strrev($replacedStr)) == 0){
                echo "<p>The text you entered '", htmlspecialchars($str) , "' and changed '", htmlspecialchars($replacedStr) ,"' is a standard palindrome.</p>";
            } else{
                    echo "<p>The text you entered '", htmlspecialchars($str) , "' and changed '", htmlspecialchars($replacedStr) ,"' is not a standard palindrome.</p>";
                }
            }
    ?>
</body>
</html>