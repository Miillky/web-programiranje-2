<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadatak 2</title>
</head>
<body>

<?php
	$predmeti = [
		'Odaberite predmet',
		'Mikroračunala',
		'Programsko inženjerstvo',
		'Operacijski sustavi',
		'Osnove programiranja',
		'C# Programiranje',
		'Web programiranje',
		'Tehnički engleski 4'
	];
?>

<form action="">
	<label for="username">Unesite username</label>
	<input id="username" type="text" name="username">
	<select name="predmet">
		<?php foreach( $predmeti as $index => $predmet ): ?>
			<option value="<?php echo $index; ?>"><?php echo $predmet; ?></option>
		<?php endforeach; ?>
	</select>
	<button type="Submit">Pošalji</button>
</form>
<?php if( !$_GET['predmet'] ): ?>
	<script>
        alert("Molimo odaberite predmet!")
	</script>
<?php else: ?>
	<script>
        alert("Pozdrav, <?php echo $_GET['username']; ?>")
	</script>
<?php endif; ?>
</body>
</html>