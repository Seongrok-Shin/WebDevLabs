<?php
session_start(); // start the session
if (!isset($_SESSION["number"])) { // check if session variable exists
    $_SESSION["number"] = 0; // create the session variable
}
$num = $_SESSION["number"]; // copy the value to a variable
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, charset=utf-8">
    <title>Web Development - LAB06</title>
</head>

<head>
    <title>Managing Session</title>
</head>

<body>
    <h1>Web Development - Lab06</h1>
    <?php
    echo "<p>The number is $num</p>"; // displays the number
    ?>
    <p><a href="numberup.php">Up</a></p>
    <p><a href="numberdown.php">Down</a></p>
    <p><a href="numberreset.php">Reset</a></p>
</body>

</html>