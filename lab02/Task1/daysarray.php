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
    $daysInEnglish = array(
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
        );
    $daysInFrench = array(
        "Dimanche", 
        "Lundi", 
        "Mardi",  
        "Mercredi",  
        "Jeudi",  
        "Vendredi",
        "Samedi");

        echo "The Days of the week in English are:<br>";
        for($i = 0; $i <= 6; $i++){
            echo $daysInEnglish[$i];
            if($i < 6){
                echo ", ";
            } else if($i == 6){
                echo ".<br>";
            }
        }

        echo "<br>";

        echo "The Days of the week in French are:<br>";
        for($i = 0; $i <= 6; $i++){
            echo $daysInFrench[$i];
            if($i < 6){
                echo ", ";
            } else if($i == 6){
                echo ".<br>";
            }
        }
    ?>
</body>
</html>