<?php
$odgovor = $ulaz ?? 5;
echo $odgovor;

echo '</br>';

$ulaz2 = 967;
$odgovor = $ulaz1 ?? $ulaz2 ?? 5;
echo $odgovor;