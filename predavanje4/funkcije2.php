<?php
function sekundeUMinute($sekunde){
	$sek = $sekunde % 60;
	if (function_exists('intdiv')){
		$min = intdiv($sekunde, 60);
	}else{
		$min = ($sekunde - $sek)/60;
	}
	if ($sek < 10) {
		$sek = '0' . $sek;
	}
	return "$min:$sek";
}
echo sekundeUMinute(65);

echo '<br>';

$broj = 15;

function poduplaj_value($broj){
	return $broj *= 2;
}

$duplo = poduplaj_value($broj);
echo '$duplo=' . $duplo . '<br>';
echo '$broj=' . $broj . '<br>';

$duplo = poduplaj_value(312);
echo '$duplo=' . $duplo . '<br>';


$broj = 15;
function poduplaj_reference(&$number){
	return $number *= 2;
}
$duplo = poduplaj_reference($broj);
echo '$duplo =' . $duplo . '<br>';
echo '$broj =' . $broj . '<br>';