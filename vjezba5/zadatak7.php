<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadatak 7</title>
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
		$file   = $_FILES['datoteka']['name'];
		$path   = $dir . $file;

		move_uploaded_file( $_FILES['datoteka']['tmp_name'], $path );

		if( file_exists( $path ) ){

			echo prikazCsv( $path );

		}

	}

	?>
</body>
</html>