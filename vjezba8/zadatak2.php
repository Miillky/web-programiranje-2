<?php

spl_autoload_register(function ($class_name) {
	include sprintf('./%s.php', strtolower($class_name));
});

$racun = new Racun('Vedran Milković', 21442141);
$racun->isplata(300);
$racun->uplata(4000);
$racun->stanje();

$prijenos = new Prijenos("Zvonko Marković", 3204959871);
$prijenos->transakcija($racun, 3500);
$prijenos->stanje();