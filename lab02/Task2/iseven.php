<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
	    $notInteger = "Seongrok";
	    $decimalPoint = 3.5;

        for($i = 0; $i <= 10; $i++){
            $j = $i % 2;
            if ($j == 0){
                echo "$i is an even integer.<br>";
            } elseif($j == 1){
                echo "$i is an odd integer.<br>";
            } else{
                echo "$i is not an integer.<br>";
            }
            
            if (!$decimalPoint.is_int($i) && $i == 10){
                echo "$decimalPoint is not an integer.<br>";
            } elseif($decimalPoint.is_int($i) && $i == 10){
                echo "$decimalPoint is an integer.<br>";
            }
            
            if(!$notInteger.is_integer($i) && $i == 10){
                echo "$notInteger is not an integer.<br>";
            } elseif($notInteger.is_integer($i) && $i == 10){
                echo "$notInteger is an integer.<br>";
            }
        }
    ?>
</body>
</html>