<?php
session_start();
if (!isset($_SESSION['rand'])) {
    $_SESSION['rand'] = rand(1, 100);
}
if (!isset($_SESSION['num_of_guess'])) {
    $_SESSION['num_of_guess'] = 1;
}

$rand_number = $_SESSION['rand'];
$num_of_guess = $_SESSION['num_of_guess'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, charset=utf-8">
    <title>Web Development - LAB06</title>
</head>

<body>
    <h1>Guessing Game</h1>
    <p>Enter a number between 1 and 100, <br /> then Press the Guess button.</p>
    <form method='POST' action='<?php
                                echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'>
        <input type='number' id='input' name='p_input' min='1' max='100'>
        <input type='submit' id='Submit' name='guess' value='Guess'>
    </form>
    <?php
    $range = array('min_range' => 1, 'max_range' => 100,);
    $option = array('options' => $range);
    $num = $_POST['p_input'];
    if (
        empty($num) || !is_numeric($num)
        || (filter_var($num, FILTER_VALIDATE_INT, $option) === false)
    ) {
        $num = 0;
        $num_of_guess = 0;
    } else {
        $_SESSION['num_of_guess']++;
        if (intval($num) === $rand_number) {
            echo '<p><b><font color=\'#008000\'> Congratulations! You successfully guessed the hidden number.</font></b></p>';
            echo '<p><b>Click Start Over to restart the game!</b></p>';
        }
        if (intval($num) < $rand_number) {
            echo '<p>The input number is lower than the hidden number</p>';
        }
        if (intval($num) > $rand_number) {
            echo '<p>The input number is higher than the hidden number</p>';
        }

        echo '<p> Number of guesses: ' . $num_of_guess . '.</p>';
    }

    echo '<p><a href="giveup.php">Give Up</a></p>';
    echo '<p><a href="startover.php">Start Over</a></p>'
    ?>
</body>

</html>