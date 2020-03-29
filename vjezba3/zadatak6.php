<?php

	$godista = [1997, 1998, 1999, 2000, 2001, 2002, 2003];

	$ime        = $_GET['ime'] ?? $_GET['ime'];
	$prezime    = $_GET['prezime'] ?? $_GET['prezime'];
	$godiste    = $_GET['godiste'] ?? $_GET['godiste'];
	$spol       = $_GET['spol'] ?? $_GET['spol'];
	$email      = $_GET['email'] ?? $_GET['email'];

	if( $ime && $prezime && $godiste && $spol && $email ):

		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$password = substr(str_shuffle($chars),0, 6);

		$msg = sprintf("Insert into korisnici (ime, prezime, godiste, spol, email, password) values ('%s', '%s', '%s', '%s', '%s', '%s')",
			$ime, $prezime, $godiste, $spol, $email, $password);

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
	<style>
		form {
			margin: 20px;
		}
		input,
		label {
			display: inline-block;
			margin:  2.5px 0px;
		}
		input,
		select {
			border: 1px solid black;
			background-color: white;
		}
		select {
			width: 100px;
			margin-bottom: 120px;
		}
		label {
			width: 80px;
		}
		label#radios-label {
			display: inline-block;
		}
		#radio-container {
			display: inline-block;
		}
		.radio-group {
			display: inline-block;
		}
		.radio-group:nth-child(2){
			margin-left: 35px;
		}
		label.radio-label {
			width: 20px;
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
		<div class="form-group">
			<label for="ime">Ime:</label>
			<input id="ime" type="text" name="ime" value="<?php echo $ime; ?>" required>
		</div>
		<div class="form-group">
			<label for="prezime">Prezime:</label>
			<input id="prezime" type="text" name="prezime" value="<?php echo $prezime; ?>" required>
		</div>
		<div class="form-group">
			<label for="godiste">Godište:</label>
			<select name="godiste" id="godiste" required>
				<?php foreach( $godista as $god ): ?>
					<option value="<?php echo $god; ?>" <?php echo ($god == $godiste) ? 'selected' : ''; ?> ><?php echo $god; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label id="radios-label">Spol:</label>
			<div id="radio-container">
				<div class="radio-group">
					<input id="musko" type="radio" name="spol" value="musko" <?php echo ($spol == 'musko') ? 'checked' : ''; ?> required>
					<label class="radio-label" for="musko">Muško</label>
				</div>
				<div class="radio-group">
					<input id="zensko" type="radio" name="spol" value="zensko" <?php echo ($spol == 'zensko') ? 'checked' : ''; ?> required>
					<label class="radio-label" for="spol">Žensko</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input id="email" type="email" name="email" value="<?php echo $email; ?>" required>
		</div>
		<button type="submit">Pošalji</button>
	</form>
	<?php if( $ime && $prezime && $godiste && $spol && $email ): ?>
		<script>
			alert("<?php echo $msg; ?>")
		</script>
	<?php endif; ?>
</body>
</html>