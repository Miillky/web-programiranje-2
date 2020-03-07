<?php
$header = '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Vježba 1</title>
</head>';

$align = 'center';
$color = 'red';

$html .=
"<style>
	p {
		text-align: $align;
		color: $color;
	}
</style>
<body>";

$html .= $head;

		$izraz = "Zemlja je";
		$oblik = "Okrugla";

		$html .= $izraz . ' je ' . $oblik;
		$html .= "$izrat je $oblik";

		$tekst .= sprintf( 'Poštovani, molimo Vas da se javite u najbližu poslovnicu %s na adresi %s
			zbog dugovanja od %s kn. Ako ne podmirite obaveze do %s vit ćemo prisiljeni angažirati %s
		Lp, %s %s %s', 'TFirma', 'Ulica 123', 1000, date('d.m.Y.'), 'Test institucija', 'Vedran', 'Milković', 'bacc. mech.'  );

		$html .= $tekst;

		$slovo = 'A';
		$html .= sprintf("SELECT * FROM KORISNICI WHERE LIKE '%s%%'", $slovo );

		$ime1 = 'ime1';
		$ime2 = 'ime2';
		$prezime1 = 'prezime1';
		$prezime2 = 'prezime2';
		$predmet1 = 'JAVA';
		$predmet2 = 'WP1';
		$ocjena1 = 2;
		$ocjena2 = 4;
?>

<table>
	<tr>
		<td><?php echo $ime1; ?></td>
		<td><?php echo $prezime1; ?></td>
		<td><?php echo $predmet1; ?></td>
		<td><?php echo $ocjena1; ?></td>
	</tr>
	<tr>
		<td><?php echo $ime2; ?></td>
		<td><?php echo $prezime2; ?></td>
		<td><?php echo $predmet2; ?></td>
		<td><?php echo $ocjena2; ?></td>
	</tr>
</table>

<?php

		$html .= '<p>Stil ovog paragrafa je izgeneriran putem php skrite</p>';

$footer = '</body>
</html>';

$html .= $footer;

echo $html;