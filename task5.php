<!--В банке открыли депозит под 20% годовых. -->
<!--На депозит положили 300 единиц. -->
<!--Какая сумма единиц будет через 20 лет? -->
<!--Какая будет прибыль? -->
<!--Вывести в таблице сумму и прибыль за каждый год.-->
<table border="1px black">
    <thead>
        <tr>
            <th></th>
            <th>Sum Start</th>
            <th>Sum End</th>
            <th>Profit</th>
        </tr>
    </thead>

<?php

$sumStart = 300;
$percent = 1.2;
$profit = 0;
$sumEnd = 0;

echo "<tbody>";
for ($i = 1; $i <= 20; $i++) {
    echo "<tr>";
    // сумма на конец года - сумма на начало года * процент
    $sumEnd = round($sumStart * $percent, 2);
    // прибыль - сумма на конец года - сумма на начало года
    $profit = $sumEnd - $sumStart;

    echo "<td>$i</td>";
    echo "<td>$sumStart</td>";
    echo "<td>$sumEnd </td>";
    echo "<td>$profit</td>";

    // сумма на начало года = сумма на конец предыдущего
    $sumStart = $sumEnd;
    echo "</tr>";
}
echo "</tbody>";

?>
</table>