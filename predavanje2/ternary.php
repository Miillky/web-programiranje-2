<?php

$godine = 23;
$ispis = ($godine >= 18) ? 'Osoba je punoljetna' : 'Osoba nije punoljetna';
echo $ispis;

echo '</br>';

$cijena = 20;
$ukupna_cijena = $cijena ?: 5;
echo $ukupna_cijena;