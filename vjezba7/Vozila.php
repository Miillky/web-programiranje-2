<?php

class Vozila {

	public $kotaci;
	public $maxBrzina;
	public $brojBrzina;
	public $marka;
	public $cijena;
	protected $datumObjave;
	protected $datumZatvaranja;

	public function objaviOglas($datum){

		if( strtotime($datum) >=  strtotime( date('d.m.Y.') ) ){
			$this->datumObjave = $datum;
		} else {
			$this->datumObjave = date('d.m.Y.');
		}
	}


	public function zatvoriOglas($datum){
		if( strtotime($datum) >=  strtotime( $this->datumObjave ) ){
			$this->datumZatvaranja = $datum;
		} else {
			$this->datumZatvaranja = date('d.m.Y.');
		}
	}

	public function prikazi(){
		echo '<pre>';
		    print_r($this->datumObjave);
		    print_r($this->datumZatvaranja);
		echo '</pre>';
	}

}

