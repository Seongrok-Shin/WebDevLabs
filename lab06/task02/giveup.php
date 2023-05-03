<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
    session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, charset=utf-8">
    <title>Web Development - LAB06</title>
</head>

<body>
    <h1>Guessing Game</h1>
    <?php
    $get_hidden_num = $_SESSION['rand'];
    echo '<p><b><font color=\'#0000FF\'>The hidden number was: '. $get_hidden_num . '.</font></b></p>';
    echo '<p><a href="startover.php">Start Over</a></p>';
    ?>
</body>

</html>