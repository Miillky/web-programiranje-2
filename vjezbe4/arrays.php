<?php

$korisnik = [
	'ime'       => "Mario",
	'prezime'   => "Kušević",
	'OIB'       => 65822145815,
	'email'     => "mkusevic@vub.hr",
	'godiste'   => 1999
];

function arrayCount($array){
	$count = 0;
	foreach( $array as $arr )
		$count++;

	return $count;
}
echo arrayCount($korisnik);

function arrayKey($array){
	$newArr = [];
	foreach( $array as $key => $value )
		$newArr[] = $key;
	return $newArr;
}

echo '<pre>';
    print_r(arrayKey($korisnik));
echo '</pre>';

function arrayValues($array){
	$newArr = [];
	foreach( $array as $value )
		$newArr[] = $value;
	return $newArr;
}

echo '<pre>';
print_r(arrayValues($korisnik));
echo '</pre>';

function arrayHeader($array){
	$thead = '<thead><tr>';
	foreach( $array as $key => $value )
		$thead .= '<th>' . $key . '</th>';
	$thead .= '</tr></thead>';
	echo $thead;
}

function arrayRow($array){
	$row = '<tr>';
	foreach( $array as $value )
		$row .= '<td>' . $value . '</td>';
	$row .= '</tr>';
	echo $row;
}

 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Zadatak 2</title>
	<style>
		th, td {
			border: 1px solid black;
		}
	</style>
</head>
<body>
<table>
	<?php arrayHeader($korisnik); ?>
	<tbody>
		<?php arrayRow($korisnik); ?>
	</tbody>
</table>
</body>
</html>