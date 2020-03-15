<?php

$voce = [
    0 => 'Jabuka',
    1 => 'Banana',
    2 => 'Jagoda',
    3 => 'Malina',
    4 => 'Mandarina'
];

print_r($voce);

$ocjene =  ['Baze' => 3, 'WEB1' => 4, 'ASP' => 4, 'OOP' => 3, 'Digitalna' => 3];

print_r($ocjene);

echo $ocjene['Baze'];
$ocjene['Baze'] = 4;
$ocjene['Engleski'] = 5;

echo '<pre>';
    print_r($ocjene);
echo '</pre>';

echo "Iz Baze podataka imam ocjenu {$ocjene['Baze']}";