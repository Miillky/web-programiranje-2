<?php

$db = new mysqli("localhost", "knjiznicar", "knjiznicar", "knjiznica");
if($db->connect_errno){

	printf("Konecija nije uspijela %s", $db->connect_error);

} else {

	if( $knjige = $db->query("SELECT * FROM knjige") ){

		$file = './knjige.csv';
		while( $knjiga = $knjige->fetch_row() ){
			$text = sprintf('%s;%s;%s;%s;%s;%s', $knjiga[0], $knjiga[1], $knjiga[2], $knjiga[3], $knjiga[4], PHP_EOL );
			file_put_contents($file, $text, FILE_APPEND);
		}

	}

}
