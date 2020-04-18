<?php
	if( isset($_POST['cookieda'] ) )
		unset($_COOKIE);

	if( isset($_POST['sessionda'] ) )
		unset($_SESSION);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadatak 4</title>
</head>
<body>
	<form method="post" action="">
		<button name="cookiekiller">Cookie killer</button>
		<button name="sessionkiller">Session killer</button>
	</form>
	<?php if( isset($_POST['cookiekiller']) ): ?>
		<p>Zaista želite izbriati Cookie?</p>
		<form method="post" action="">
			<button name="cookiene">Ne</button>
			<button name="cookieda">Da</button>
		</form>
	<?php elseif( isset($_POST['sessionkiller']) ): ?>
		<p>Zaista želite izbriati Session?</p>
		<form method="post" action="">
			<button name="sessionne">Ne</button>
			<button name="sessioneda">Da</button>
		</form>
	<?php endif; ?>
</body>
</html>