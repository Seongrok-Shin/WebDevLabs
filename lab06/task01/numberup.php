<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, charset=utf-8">
    <title>Web Development - LAB06</title>
</head>

<body>
    <?php
    session_start(); // start the session
    $num = $_SESSION["number"]; // copy the value to a variable
    $num++; // increment the value
    $_SESSION["number"] = $num; // update the session variable
    header("location:number.php"); // redirect to number.php
    ?>
</body>

</html>