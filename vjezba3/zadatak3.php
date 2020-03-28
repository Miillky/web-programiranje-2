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

$ocjene = [
	1 => 'nedovoljan 1',
	2 => 'dovoljan 2',
	3 => 'dobar 3',
	4 => 'vrlo dobar 4',
	5 => 'odličam 5'
];

?>

<style>
	button,
	select {
		display: block;
		margin: 10px;
	}
</style>

<form action="">
	<label for="username">Unesite username:</label>
	<input id="username" type="text" name="username">
	<select name="predmet">
		<?php foreach( $predmeti as $index => $predmet ): ?>
			<option value="<?php echo $index; ?>"><?php echo $predmet; ?></option>
		<?php endforeach; ?>
	</select>
	<?php foreach( $ocjene as $oindex => $ocjena ): ?>
		<input id="ocjena-<?php echo $oindex; ?>" type="radio" name="ocjena" value="<?php echo $oindex;?>" />
		<label for="ocjena-<?php echo $oindex; ?>"><?php echo $ocjena; ?></label><br>
	<?php endforeach; ?>
	<button type="Submit">Pošalji</button>
</form>

<?php if( !$_GET['predmet'] && isset($_GET['predmet']) ): ?>
	<script>
        alert("Molimo odaberite predmet!")
	</script>
<?php endif; ?>

<?php if ( !isset($_GET['ocjena']) ): ?>
	<script>
        alert("Molimo unsetie ocjenu!")
	</script>
<?php endif; ?>

<?php if( $_GET['username'] && isset($_GET['username']) ): ?>
	<script>
        alert("Pozdrav, <?php echo $_GET['username']; ?>")
	</script>
<?php endif; ?>

</body>
</html>