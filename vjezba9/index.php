<?php

include './Forma.php';

$form = new Forma('/', 'get', 'Submitaj' );

$checkbox = [
				'bicikl' => 'Bicikl',
				'auto'  => 'Auto',
				'čamac' => 'Čamac',
				'motor' => 'Motor'
			];
$form->checkbox($checkbox, 1);

$days = [
			1 => 'Monday',
			2 => 'Tuesday',
			3 => 'Wednesday',
			4 => 'Thursday',
			5 => 'Friday',
			6 => 'Saturday',
			7 => 'Sunday'
		];

$form->dropDownList($days, 2);

$form->radioButton(['muško', 'žensko'], 'spol', 3);

$inputs = [
	'ime'       => 'Ime',
	'prezime'   => 'Prezime',
	'oib'       => 'OIB'
];

$form->textInput($inputs, 4);

$form->createForm();