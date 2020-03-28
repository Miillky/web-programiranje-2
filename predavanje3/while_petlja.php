<?php

$i = 0;

while(true){
	$i++;
	if($i > 30){
		break;
	} else {
		if($i % 2){
			echo "$i <br>";
		} else {
			continue;
		}
	}
}