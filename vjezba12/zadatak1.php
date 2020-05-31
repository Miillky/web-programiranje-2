<?php

require_once './poruke.php';

function f_kontrole_korsinik($in_obj){
	global $poruke;
	foreach( ['procedura',  'username', 'password'] as $field ){
		if( !$in_obj->$field ){
			if( $field == 'password' && $in_obj->procedura == 'p_save' ){
				$in_obj->$field = f_generate_password();
			} else {
				return $poruke[$field];
			}
		}
	}
}

function f_generate_password(){
	$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	$pass = [];
	$alphaLength = strlen($alphabet) - 1;
	for ($i = 0; $i < 8; $i++) {
		$n = rand(0, $alphaLength);
		$pass[] = $alphabet[$n];
	}
	return implode($pass);
}