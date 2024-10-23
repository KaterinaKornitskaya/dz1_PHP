<!--Вывести число задом наперед (347689 -> 986743)-->
<?php

$number = 367901;

// преобразовали число в массив
$numbersArr = str_split($number);


$newNumStr = "";
// в цикле добавили цифры в новую строку из массива начиная с последнего
for($i = count($numbersArr)-1; $i >= 0; $i--) {
    $newNumStr .= $numbersArr[$i];
}

// преобразовали полученную строку в число
$newNum = (int)$newNumStr;

echo "<p>Старое число</p>";
echo "<p style='font-size: 24px;color: red'>$number</p>";
echo "<p>Новое число</p>";
echo "<p style='font-size: 24px; color: green'>$newNum</p>";
echo "<p></p>";

?>
