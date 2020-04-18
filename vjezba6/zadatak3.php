<?php

	session_start();

	if( !isset($_COOKIE['counter']))
		setcookie('counter', 0, time() + 3600);

	if( !isset($_SESSION['counter'])):
		$_SESSION['counter'] = 0;
	endif;

	if(isset($_POST['cookieinc'])):
		setcookie('counter', ++$_COOKIE['counter'], time() + 3600);
	elseif(isset($_POST['cookiedec'])):
		setcookie('counter', --$_COOKIE['counter'], time() + 3600);
	elseif(isset($_POST['sessioninc'])):
		++$_SESSION['counter'];
	elseif(isset($_POST['sessiondec'])):
		--$_SESSION['counter'];
	endif;
?>
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
	<p><?php echo $_COOKIE['counter'] ?></p>
	<p><?php echo $_SESSION['counter'] ?></p>
	<form method="post" action="">
		<button name="cookieinc">Cookie ++</button>
		<button name="cookiedec">Cookie --</button>
		<button name="sessioninc">Session ++</button>
		<button name="sessiondec">Session --</button>
	</form>
</body>
</html>