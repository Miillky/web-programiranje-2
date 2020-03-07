<?php
$ime = 'Vedran';
$prezime = 'Milković';
$punoIme = $ime . $prezime;
echo $punoIme;

$ulica = 'Kolodvorska';
$kucniBroj = '52A';
$mjesto = 'Prug';
$postanskiBroj = 43000;
echo "<br>";

$adresa = "$ulica $kucniBroj <br> $postanskiBroj $mjesto";
echo $adresa;

$datum = '15.02.2019.';
$noviRed = "<br>";
$firma = "Neka firma";
$poruka = "Poštovani $ime $prezime $noviRed";
$poruka .= "Dana $datum zaprimili smo Vaš e_mail....";
$poruka .= "Lijep pozdrav, $noviRed $firma";
echo $poruka;