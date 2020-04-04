<?php

	function prikazCSVbottom($file){

		$rows = [];
		$table = '<table>';
		if ( $handle = fopen($file, "r") ) {

			$row = 0;
			while( $data = fgetcsv($handle, 0, ";") ) {

				if (!$row)
					$header[$row] = $data;
				else
					$rows[$row] = $data;

				$row++;
			}
			fclose($handle);
		}

		$reversed = array_reverse($rows);

		$table .= '<tr><td>'. $header[0][0] . '</td><td>'. $header[0][1] .'</td><td>' . $header[0][2] . '</td><td>' . $header[0][3] . '</td></tr>';

		foreach( $reversed as $row )
			$table .= '<tr><td>'. $row[0] . '</td><td>'. $row[1] .'</td><td>' . $row[2] . '</td><td>' . $row[3] . '</td></tr>';

		$table .= '</table>';

		echo $table;

	}

	prikazCSVbottom('./files/log.csv');
