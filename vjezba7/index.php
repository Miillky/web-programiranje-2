<?php

spl_autoload_register(function ($class_name) {
	include sprintf('./%s.php', $class_name);
});

$oglas = new Vozila();
$oglas->objaviOglas('25.1.2021.');
$oglas->zatvoriOglas('25.1.2021.');