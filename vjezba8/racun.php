<?php

class Racun {

	private $ime;
	private $broj;
	private $stanje;

	public function __construct($ime, $broj, $stanje = 0){
		$this->__set('ime', $ime);
		$this->__set('broj', $broj);
		$this->__set('stanje', $stanje);
	}

	public function __set($name, $value){
		$this->$name = $value;
	}

	public function __get($name){
		return $this->$name;
	}

	public function uplata($uplata){
		$this->stanje += $uplata;
	}

	public function isplata($isplata){
		if($this->raspolozivo($isplata)) {
			$this->stanje -= $isplata;
		}
	}

	protected function raspolozivo($isplata){
		if($this->stanje - $isplata >= 0)
			return true;

		return false;
	}

	public function stanje(){
		printf("Trenutno stanje računa %s=%s", $this->ime, $this->stanje);
	}

}