<?php
    //$userNumber = $_GET['x'];
    $userNumber = rand(0,100); 
    $number1 = 1;
    $number2 = 1;

    echo "Числовой ряд: $number1 ";

    while ($number1 != $userNumber) {

        if ($number1 > $userNumber) {
            echo "<br/>";
            echo "Задуманное число: $userNumber не входит в числовой ряд";
            break;
        }

    $number3 = $number1;
    $number1 = $number1 + $number2;
    $number2 = $number3;
    echo "$number1 ";
    }

    if ($number1 == (int)$userNumber){
        echo "<br/>";
        echo "Задуманное число: $userNumber входит в числовой ряд";
    }

?>