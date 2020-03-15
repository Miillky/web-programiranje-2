<?php

$ukupno = 59.99;
$dostava = 10;
switch ($ukupno){
    case $ukupno > 50:
        echo 'Ukupno + dostava = ' . $ukupno += $dostava;
        break;
    case $ukupno < 100:
        echo 'Ukupno + dostava = ' . $ukupno += $dostava/2;
        break;
    case $ukupno >= 100:
        echo 'Ukupno (Besplatna dostava = ' . $ukupno;
        break;
}

