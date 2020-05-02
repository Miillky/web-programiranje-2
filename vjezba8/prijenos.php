<?php

class Prijenos extends Racun {
	public function transakcija($racun, $iznos){
		if($racun->raspolozivo($iznos)){
			$racun->isplata($iznos);
			$this->uplata($iznos);
		} else {
			printf("Nedovoljno sredstva na računu %s vlasnik %s", $racun->__get('broj'), $racun->__get('ime'));
		}
	}
}