<?php

$voce = array('Jabuka', 'Banana', 'Jagoda', 'Malina', 'Mandarina');
$ocjene = array(1,2,3,4,5);

echo '<pre>';
    print_r($voce);
echo '</pre>';

echo $voce[1];

$voce[1] = 'Mango';

echo '<pre>';
    print_r($voce);
echo '</pre>';