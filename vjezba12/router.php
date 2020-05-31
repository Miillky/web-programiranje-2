<?php require_once './zadatak1.php'; ?>

<?php
header('Access-Control-Allow-Origin:http://localhost');
header('Access-Control-Allow-Credentials: true');
?>
<?php
$login_err   = '{"h_message":"login redirect","h_errcode":999}';
$request_err = '{"h_message":"request error","h_errcode":998}';
$procedure_err  = '{"h_message":"method error","h_errcode":997}';
$projekt_err  = '{"h_message":"project error","h_errcode":996}';
$logout  = '{"h_message":"Uspješno ste odjavljeni","h_errcode":0}';
$wrong_login = '{"h_message":"Pogrešno korisničko ime ili zaporka. Molimo pokušajte ponovno","h_errcode":111}';

session_start(); 

//dozvoljavam samo POST i GET metodu u svakom slučaju prepunjava se $injson varijabla
switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $injson = json_encode($_POST);
        break;
    case 'GET':
        $injson = json_encode($_GET);
        break;
    default:
        echo $request_err;
        return;
}

$in_obj = json_decode($injson);

//provjera podataka koji su došli s inputa
//print_r($in_obj);

//logout, pozivam prije konekcije na bazu jer je ne trebam, radim samo sa SESSIONom na serveru
if($in_obj->procedura =="p_logout"){
    session_destroy();
    echo $logout;
    return; 
}
//ako session nije kreiran samo p_login mogu zvati
if (!isset( $_SESSION['ID']) && $in_obj->procedura !="p_login") {
       echo $login_err;
       return; 
}

//refresh, vraćam podatke iz SESSIONa i to napravim prije konekcije na bazu, ne treba mi baza za ovo
if (isset($_SESSION['ID']) && $in_obj->procedura == "p_refresh") {
    echo json_encode($_SESSION);
    return; 
}

if( $in_obj ) {
	$in_obj->procedura = 'p_save';
	if( $poruka = f_kontrole_korsinik($in_obj ) ) {
		echo $poruka;
		return;
	}
}

//konekcija na bazu
define("DB_SERVER", "localhost");
define("DB_USER", "vedran");
define("DB_PASS", "25011990");
define("DB_NAME", "web2_common");

//provjera da li baza vraća podatke
$db = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if($db->connect_errno){
	$poruka = "Neuspješna konekcija na bazu " . DB_NAME . "<br>";
	$poruka .= $db->connect_error;
	$poruka .= " (" . $db->connect_errno . ")";
}else{
	$poruka = "Uspješno smo se spojili na bazu " . DB_NAME;
}
//echo $poruka;

//raspoređujem pozive prema funkcijama
switch ($in_obj->procedura) {
	case 'p_login':
		f_login($in_obj);
		break;
	default:
		echo $request_err;
		return;
}

//funkcija za provjeru logina
function f_login($in_obj){

	global $db;
	global $wrong_login;

	$sql = "SELECT * FROM korisnici WHERE EMAIL = '" . $in_obj->username . "' AND PASSWORD = '" .
		$in_obj->password . "'";
	$db->set_charset("utf8");
	$result = $db->query($sql);

	while($row = mysqli_fetch_assoc($result)) {
		$rows[]=$row;
	}

	if (!empty($rows)){
		$_SESSION = $rows[0];
		echo json_encode($rows);
	}else{
		echo $wrong_login;
	}

}

?>
