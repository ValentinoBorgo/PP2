<?php

echo "<table border = 1px solid>";
for ($n = 1; $n <= 10; $n++ ){
    echo "<tr>";
    for($n2 = 1; $n2 <= 10; $n2++){
        $final = $n2 * $n;
        echo "<td>$final</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>