<?php
/*
 Mostrar las tablas de multiplicar en una tabla en html
 */
echo "<center>";
echo "<table border = '1' style='border-collapse:collapse;'>";
echo "<tr>";
for ($i = 1; $i <= 10; $i++) {
    echo "<td style='padding:10px;'>tabla del $i</td>";
}
echo "</tr>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr'>";
    for ($j = 1; $j<=10; $j++){
        echo "<td style='padding:10px;'>$j*$i = ".($j*$i)."</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "</center>";

