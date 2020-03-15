<?php

$ocjena = [
    5 => 'odličan',
    4 => 'vrlo dobar',
    3 => 'dobar',
    2 => 'dovoljan',
    1 => 'nedovoljan'
];

echo '<pre>';
    print_r($ocjena);
echo '</pre>';

$ocjena[5] = 'izvrstan';

echo '<pre>';
    print_r($ocjena);
echo '</pre>';

$predmet = [
    'Mikroračunala',
    'Programsko inžinjerstvo',
    'Operacijski sustavi',
    'Osonove programskog jezika JAVA',
    'C# programiranje',
    'Web programiranje 2',
    'Tehnički engleski 4'
];

echo '<pre>';
    print_r($predmet);
echo '</pre>';

$temp = $predmet[1];
$predmet[1] = $predmet[5];
$predmet[5] = $temp;

echo '<pre>';
    print_r($predmet);
echo '</pre>';

$pozicije = [3,5];

echo '<table>';
foreach($predmet as $key => $predmet):
    echo "<tr><td>$key</td><td>$predmet</td>";
endforeach;
echo '</table>';

$godina = [1 => 31, 2 => 28, 3 => 31, 4 => 30, 5 => 31, 6 => 30, 7 => 31, 8 => 31, 9 => 31, 10 => 31, 11 => 30, 12 => 31 ];
$prijestupna = [1 => 31, 2 => 29, 3 => 31, 4 => 30, 5 => 31, 6 => 30, 7 => 31, 8 => 31, 9 => 31, 10 => 31, 11 => 30, 12 => 31 ];

$mjesec = 2;
if( $godina[$mjesec] == $prijestupna[$mjesec] ){
    echo "Mjesec nije prijestupni, mjesec ima $prijestupna[$mjesec] dana.";
} else {
    echo "Mjesec je prijestupni, mjesec ima $prijestupna[$mjesec] dana.";
}

$gradovi = [
    'USA' => 'Washington',
    'Njemacka' => 'Berlin',
    'Francuska' => 'Pariz',
    'Spanjolska' => 'Madrid',
    'Italija' => 'Rim'
];

$drzava = 'USA';

echo '<pre>';
    print_r($gradovi[$drzava]);
echo '</pre>';

$dan = 3;

switch ($dan) {
    case $dan == 1:
        echo 'Ponedjeljak';
        break;
    case $dan == 2:
        echo 'Utorak';
        break;
    case $dan == 3:
        echo 'Srijeda';
        break;
    case $dan == 4:
        echo 'Četvrtak';
        break;
    case $dan == 5:
        echo 'Petak';
        break;
    case $dan == 6:
        echo 'Subota';
        break;
    case $dan == 7:
        echo 'Nedjelja';
        break;
    default:
        echo 'Nepoznat dan, molimo provjerite unos.';
}