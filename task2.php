<!--Вывести на экран таблицу умножения от 2 до 10.-->
<?php

echo "<table bgcolor='#f5deb3' border='1px'>";
for($i = 1; $i <= 10; $i++){
    echo "<tr>";
   // echo "<p>Number $i</p>";
    for($j = 2; $j < 10; $j++){
        echo "<td>";
        echo "$j * $i = ".$i*$j;
        echo "</td>";
    }
    echo "\n";
    echo "</tr>";
}
echo "</table>";

?>
