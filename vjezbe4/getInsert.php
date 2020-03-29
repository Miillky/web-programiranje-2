<?php

$_POST[‘ime’] = "Mario";
$_POST[‘prezime’] = "Kušević";
$_POST[‘OIB’] = 65822145815;
$_POST[‘email’] = "mkusevic@vub.hr";
$_POST[‘godiste’] = 1999;

function getInsert( $insert ){

	if(!$insert)
		return;

	$query = 'Insert into korisnici (';

	foreach( array_keys($insert) as $key )
		$query .= $key . ', ';

	$query .= ') values (';

	foreach( $insert as $value )
		$query .= $value . ', ';

	$query = rtrim($query, ', ');
	$query .= ');';

	echo $query;

}

getInsert($_POST);