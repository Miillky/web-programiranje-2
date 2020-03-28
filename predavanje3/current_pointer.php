<?php

$loto = array(4, 8, 15, 16, 23, 35, 39);
echo current($loto) . "<br>";
echo current($loto) . "<br>";

while($treuntni = current($loto)){
	echo $treuntni . ", ";
	next($loto);
}