<?php
if( isset($_POST['username']) && isset($_POST['password']) ):

	$users = [["username" => "tadamovic", "password" => "Koliko99"],
		["username" => "mmarkovic", "password" => "Koliko88"],
		["username" => "ppetrovic", "password" => "Koliko99"]];

	$no_users = true;

	foreach ($users as $user):

		if( $user["username"] == $_POST['username'] || $user['password'] == $_POST['password'] ):
			session_start();
			$_SESSION['username'] = $_POST['username'];
			$no_users = false;
			break;
		endif;
	endforeach;

	if( $no_users ): ?>

		<script>
		    alert("Nepoznato korisničko ime ili zaporka");
		</script>

<?php
	endif;
endif;
?>
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
<?php if( !isset($_SESSION['username'] ) ): ?>
	<form method="post" action="">
		<label for="username">Ime</label>
		<input type="text" name="username" id="username">
		<label for="password">Password</label>
		<input type="password" name="password" id="password">
		<button type="submit">Send</button>
	</form>
<?php else: ?>
	<h1><?php echo $_SESSION['username']; ?></h1>
<?php endif; ?>
<?php if( !isset($_POST['username']) || !isset($_POST['password'])): ?>
	<script>
        alert("Molimo unesite username/password");
	</script>
<?php endif; ?>
</body>
</html>