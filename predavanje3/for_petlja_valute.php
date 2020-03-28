<?php


$valute = [
	036 => 'AUD Australija',
	124 => 'CAD Kanada',
	203 => 'CZK Češka',
	208 => 'DKK Danska',
	348 => 'HUF Mađarska',
	392 => 'JPY Japan',
	578 => 'NOK Norveška',
	752 => 'SEK Švedksa',
	756 => 'CHF Švicarska',
	826 => 'GBP Britanija',
	840 => 'USD SAD',
	877 => 'BAM BiH',
	978 => 'EUR EMU',
	984 => 'PLN Poljska'
];

$keys = array_keys($valute);
echo '<pre>';
    print_r($keys);
echo '</pre>';

echo "<select><option>--Odaberite valutu--</option>";
	for($i = 0; $i <= count($valute); $i++){
		echo "<option value=$keys[$i]>" . $keys[$i] . "</option>";
	}
echo "</select>";