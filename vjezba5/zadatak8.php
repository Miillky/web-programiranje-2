<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Zadatak 8</title>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
	<label for="datoteka">Odaberite datoteku:</label>
	<input type="file" id="datoteka" name="datoteka">
	<button type="submit">Upload</button>
</form>
<?php

if( isset( $_FILES['datoteka'] ) ){

	require_once 'funkcije.php';

	$dir    = './files/';
	$name   = $_FILES['datoteka']['name'];
	$path   = $dir . $name;

	$search     = [' ', '(', ')', ',', '/'];
	$replace    = ['_', '', '', '', ''];
	$text       = str_replace( $search, $replace, file_get_contents( $_FILES['datoteka']['tmp_name'] ) );

	file_put_contents( $_FILES['datoteka']['tmp_name'], $text );
	move_uploaded_file( $_FILES['datoteka']['tmp_name'], $path );

	if( file_exists( $path ) ){

		echo prikazCsv( $path );

	}

}

?>
</body>
</html>