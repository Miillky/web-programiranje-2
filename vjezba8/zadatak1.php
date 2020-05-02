<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>8 zadatak 1</title>
</head>
<body>
<form action="zadatak1.php" method="post">
	<input type="text" name="ime">
	<input type="text" name="prezime">
	<input type="email" name="email">
	<input type="password" name="password">
	<button type="submit">Registriraj se</button>
</form>
</body>
</html>

<?php

    include './user.php';

    $user = new User();
    $user->register($_POST['name'], $_POST['username'], $_POST['email'], $_POST['password']);

?>