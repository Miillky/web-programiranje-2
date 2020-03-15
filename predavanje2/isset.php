<?php

if(isset($ulaz)){
    $odgovor = $ulaz;
} else {
    $odgovor = 5;
}
echo $odgovor;

echo '</br>';

$ulaz2 = 967;
if(isset($ulaz1)){
    $odgovor = $ulaz1;
} else {
    if(isset($ulaz2)){
        $odgovor = $ulaz2;
    } else {
        $odgovor = 5;
    }
}
echo $odgovor;