<?php

	$input = $_GET['csv'] ?? $_GET['csv'];

	function getArray($array){
		return explode(", ", $array);
	}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Zadatak 5</title>
	<style>
		form {
			margin: 20px;
		}
		input,
		label {
			display: inline-block;
			margin:  2.5px 0px;
		}
		input {
			border: 1px solid black;
		}
		button {
			background-color: white;
			border: 1px solid black;
			box-shadow: black;
			margin: 2px;
		}
	</style>
</head>
<body>
	<form action="">
		<label for="csv">Unesi vrijednosti odvojene zarezom:</label>
		<input id="csv" type="text" name="csv" value="<?php echo $input; ?>">
		<button type="Submit">Pošalji</button>
	</form>
	<?php
		if( $input ):
			echo '<pre>';
			    print_r(getArray($input));
			echo '</pre>';
		endif;
	?>
</body>
</html>
