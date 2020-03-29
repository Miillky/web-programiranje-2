<?php

$funcs = get_defined_functions();
echo count($funcs['internal']) ;

echo '<br>';

$verzija = phpversion();
echo "Instalirana verzija PHP-a je " . $verzija;

echo '<br>';

$ime = 'LUKA';
echo strtolower($ime);
echo "<br>";
echo $ime;

echo '<br>';

$input = "<p>Pozdrav imam pitanja </p><script>alert('Neka skripta')</script><a href='https://vub.hr'> Stranica</a>" ;
$input = strip_tags($input);
echo $input;

echo '<br>';

$boje = ['crveno', 'zeleno', 'bijelo', 'crno','narančasto'];
echo "<pre>";
print_r($boje);
sort($boje);
print_r($boje);
echo "</pre>";