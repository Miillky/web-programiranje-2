<?php

spl_autoload_register(function ($class_name) {
	include sprintf('./%s.php', $class_name);
});

$bicikl = new Bicikl();
$bicikl->objaviOglas(2, 4, 44, 22, 'Trek', 2000, '20.10.2020.', '25.10.2020.');

$traktor = new Traktor();
$traktor->objaviOglas('Da', 4, 80, 5, 'John Deere', 20000, '20.9.2022.', '1.11.2022.');

$auto = new Bicikl();
$auto->objaviOglas(4, 4, 300, 6, 'BMW', 10000, '5.4.2020.', '16.6.2020.');

$motocikl = new Motocikl();
$motocikl->objaviOglas(20000, 4, 100, 6, 'BMW', 15000, '5.5.2018.', '16.7.2018.');