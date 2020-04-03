<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data" action="">
		<input type="file" name="datoteka" id="fileSelect" >
		<button type="submit">Submit</button>
	</form>
</body>
</html>
<?php

if( isset($_FILES) ){
	move_uploaded_file( $_FILES["datoteka"]["tmp_name"], '/' );
}