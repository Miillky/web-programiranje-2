<?php

class Vozila
{

	private $kotaci;
	private $maxBrzina;
	private $brojBrzina;
	private $marka;
	private $cijena;
	private $datumObjave;
	private $datumZatvaranja;

	public function objaviOglas($maxBrzinam, $brojBrzina, $marka, $cijena, $datum){

		$this->maxBrzina = $maxBrzinam;
		$this->brojBrzina = $brojBrzina;
		$this->marka = $marka;
		$this->cijena = $cijena;

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

