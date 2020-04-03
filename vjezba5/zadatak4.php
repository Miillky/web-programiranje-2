<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadatak 3</title>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		<label for="datoteka">Unesite naziv datoteke:</label>
		<input type="file" id="datoteka" name="datoteka">
		<button type="submit">Učitaj</button>
	</form>
</body>
</html>
<?php

	require_once 'funkcije.php';

	if( isset( $_FILES['datoteka'] ) )
		if( !file_exists('./files/' . $_FILES['datoteka']['name'] ) )
			echo "Ne postoji datoteka nazivom \n" . $_FILES['datoteka']['name'];
		else
			if( $_FILES['datoteka']['type'] == 'text/csv' )
				echo prikazCsv('./files/' . $_FILES['datoteka']['name']);