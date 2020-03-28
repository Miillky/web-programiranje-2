<?php

$polje = ['kukuruz', 'pšenica', 'repa', 'suncokret', 'soja', 'uljana repica'];

echo "<table>";
foreach($polje as $index => $kultura){
	$i = (int)$index + 1;
	echo "<tr>";
	echo "<td>" . $i . ".</td>";
	echo "<td>" . $kultura . "</td>";
	echo "</tr>";
}
echo "</table>";