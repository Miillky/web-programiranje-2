<?php

if( file_exists('data.txt') ){

	readfile('data.txt', 'r');

	$file = fopen('datoteka.txt', 'r+');

	fwrite($file, 'Datoteka');

	#file_put_contents('datoteka.txt', 'File put contents', FILE_APPEND);

	echo fgetc($file);
	echo fgets($file);
	echo filetype($file);
	echo is_file($file);
	echo is_dir($file);

	if( file_exists('datoteka.txt') )
		rename('datoteka.txt', 'datoteka_new.txt');

	if( file_exists('datoteka_new.txt') )
		rename('datoteka_new.txt', 'datoteka.txt');

}