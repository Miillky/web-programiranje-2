<?php

if( !$_POST['ime'] && !$_POST['prezime'] ):
	$error = "Molimo unesite Ime/Prezime";
else:
	$user = ['ime' => $_POST['ime'], 'prezime' => $_POST['prezime']];

	foreach ($user as $key => $data)
		setcookie($key, $data, time()+3600);

endif;
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadatak 1</title>
</head>
<body>
	<form method="post" action="">
		<label for="ime">Ime</label>
		<input type="text" name="ime" id="ime">
		<label for="ime">Prezime</label>
		<input type="text" name="prezime" id="prezime">
		<button type="submit">Send</button>
	</form>
	<?php if( $error ): ?>
		<?php echo $error; ?>
	<?php endif; ?>
</body>
</html>