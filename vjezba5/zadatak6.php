<?php

	$username = $_POST['username'] ?: false;
	$password = $_POST['password'] ?: false;


	if( $username && $password ):

		$userExists = false;
		$users = [];
		$file = fopen( './files/users.txt', 'r');
		while( $data = fgetcsv( $file, 100, ';' ) )
			$users[$data[0]] = $data[1];

		foreach( $users as $uname => $upassword )
			if( $uname == $username && $upassword == $password ) {
				$userExists = true;
				break;
			}

	endif;
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Zadatak 6</title>
</head>
<body>
	<form method="post" action="">
		<label for="username">username</label>
		<input type="text" name="username" id="username">
		<label for="password">password</label>
		<input type="password" name="password" id="password">
		<button type="submit">Login</button>
	</form>
	<?php
		echo $username ? '' : '<p>Molimo unesite username</p>';
		echo $password ? '' : '<p>Molimo unesite password</p>';
		echo $userExists ? '' : '<p>Nepoznato korisničko ime ili zaporka</p>'
	?>
</body>
</html>
