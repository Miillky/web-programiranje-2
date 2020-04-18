<?php

function array_to_json($array){
	$data['data'] = $array;
	echo json_encode($data);

}

$user = ["username" => "tadamovic", "password" => "Koliko99"];
$users = [["username" => "tadamovic", "password" => "Koliko99"],
	["username" => "mmarkovic", "password" => "Koliko88"],
	["username" => "ppetrovic", "password" => "Koliko99"]];

array_to_json($user);
array_to_json($users);
