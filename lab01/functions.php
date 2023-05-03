<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang ="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html">
    <meta name="description" content="Web Development :: Lab 1">
    <meta name="keywords" content="web, development">
    <title>PHP Functions</title>
</head>
<body>
    <h1>Use of PHP built-in functions</h1>
    <?php
        /*Use of abs() and pow() built-in functions, and echo statement. */
        echo"<p>Absolute value of -9 is: ", abs(-9),".</p>";
        echo"<p>2 to the power of 5 is : ", pow(2,5),".</p>";
    ?>
    
    <?php
        /*Use of decbin() and bindec() functions. */
        echo"<p>Decimal equivalent of 1101 is: ",bindec(1101),".</p>";
        echo"<p>Binary equivalent of 14 is: ",decbin(14),".</p>";
    ?>
</body>
</html>