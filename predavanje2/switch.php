<?php

$name = 'Marko';
$izlaz = "$name najviše voli jesti ";

switch ($name){
    case 'Marko':
        $izlaz .= "kupus";
        break;
    case 'Ana':
    case 'Petar':
        $izlaz .= "brokulu";
        break;
    default:
        $izlaz .= "sve povrće";
} echo $izlaz;