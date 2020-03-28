<?php

echo "<table>";
for($i = 1; $i <= 10; $i++){
	echo "<tr>";
	for ($j = 1; $j <= 10; $j++){
		echo "<td>$j x %i = " . $i*$j . "</td>";
	}
	echo "</tr>";
}
echo "</table>";