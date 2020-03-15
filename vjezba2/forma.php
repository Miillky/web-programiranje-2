<?php
$oznake_drzava = [
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
?>

<!DOCTYPE HTML>
<html>
<body>
<form action="#" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    Oznake Države: <select name="drzava">
        <?php foreach( $oznake_drzava as $key => $drzava ): ?>
            <option value="<?php echo $key; ?>"><?php echo $drzava; ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit">
</form>
<?php echo $_POST['drzava'] ?? false ? $oznake_drzava[$_POST['drzava']] : 'Nije odabrana država!'; ?>
</body>
</html>