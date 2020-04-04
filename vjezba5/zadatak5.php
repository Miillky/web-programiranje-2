<?php


if( strpos( $_POST['datoteka'], '.' ) ):

	$filePath = './files/' . $_POST['datoteka'];

    if( file_exists( $filePath ) ):

        $text = file_get_contents( $filePath );

        if( isset( $_POST['spremi'] ) && isset( $_POST['text'] ) ):

            file_put_contents( $filePath, $_POST['text'] );
	        $text = file_get_contents( $filePath );

        endif;

    else:

	    if( isset( $_POST['spremi'] ) && isset( $_POST['text'] ) ):

		    file_put_contents( $filePath, $_POST['text'] );

	    endif;

    endif;

else:

    $ext = 'Datoteka nema ekstenziju';

endif;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadatak 5</title>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		<label for="datoteka">Unesite naziv datoteke:</label>
		<input type="text" id="datoteka" name="datoteka" value="<?php echo $_POST['datoteka'] ?: ''; ?>">
		<button name="ucitaj" type="submit">Učitaj</button>
		<textarea name="text">
            <?php echo $text ?: ''; ?>
		</textarea>
		<button name="spremi" type="submit">Spremi</button>
	</form>
    <p><?php echo $ext ?: ''; ?></p>
</body>
</html>