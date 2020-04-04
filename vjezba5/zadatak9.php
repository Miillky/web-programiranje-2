<?php

function logiraj( $nazivSkripte, $tekst, $linija ){

	if( !file_exists('./files/log.csv') ){
		$header = sprintf('%s;%s;%s;%s;%s', 'datum', 'naziv_skripte', 'tekst', 'linija', PHP_EOL );
		file_put_contents('./files/log.csv', $header, FILE_APPEND);
	}


	$text = sprintf('%s;%s;%s;%s;%s', date('Ymd'), $nazivSkripte, $tekst, $linija, PHP_EOL );
	file_put_contents('./files/log.csv', $text, FILE_APPEND);

}

logiraj('zadatak9.php', 'Neki tekst za debugiranje1', 123);
logiraj('zadatak9.php', 'Neki tekst za debugiranje2', 123);
logiraj('zadatak9.php', 'Neki tekst za debugiranje3', 123);