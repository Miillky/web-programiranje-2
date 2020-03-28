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

<form action="">
	<label for="username">Unesite username</label>
	<input id="username" type="text" name="username">
	<button type="Submit">Pošalji</button>
</form>
<?php if($_GET['username']): ?>

	<script>
		alert("Pozdrav, <?php echo $_GET['username']; ?>")
	</script>

<?php endif; ?>
</body>
</html>