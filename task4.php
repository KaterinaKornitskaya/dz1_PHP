<!--Разработать скрипт, который будет разбивать число-->
<!--на цифры, считать их количество, находить самую-->
<!--большую, самую маленькую цифру в числе, считать-->
<!--сумму цифр, среднее значение.-->

<?php
    $number = 345872;

    $numbersArray = str_split($number);

    echo "<p>Digits in the number</p>";

    $min = $numbersArray[0];
    $max = $numbersArray[0];
    $sum = 0;

    foreach ($numbersArray as $key => $number) {
        // если цифра не последняя - выводим запятую после нее
        if($key != count($numbersArray) - 1) {
            echo $number, ", ";
        }
        // если цифра последняя - выводим только цифру
        else{
            echo $number;
        }
        if($number < $min)
            $min = $number;
        if($number > $max)
            $max = $number;
        $sum += $number;
    }
    // среднее значение округляем до 2ух знаков после запятой
    $avg = round($sum / count($numbersArray), 2);

    echo "<p>Min: $min</p>";
    echo "<p>Max: $max</p>";
    echo "<p>Sum: $sum</p>";
    echo "<p>Avg: $avg</p>";
?>
