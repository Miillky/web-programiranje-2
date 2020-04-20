<?php

class Bicikl extends Vozila {

	private $velicinaKotaca;

	public function objaviOglas($velicinaKotaca, $kotaci, $maxBrzinam, $brojBrzina, $marka, $cijena, $datumObjave, $datumZatvaranja ){

		$this->velicinaKotaca = $velicinaKotaca;
		$this->kotaci = $kotaci;
		$this->maxBrzina = $maxBrzinam;
		$this->brojBrzina = $brojBrzina;
		$this->marka = $marka;
		$this->cijena = $cijena;
		$this->datumObjave = $datumObjave;
		$this->zatvoriOglas($datumZatvaranja);

		printf('%s, marke %s, s %s brzina, %s kotaca,  veličine kotača %s", cijena %skn datum objave: %s oglas vrijedi do %s',
		get_class($this), $this->marka, $this->maxBrzina, $this->kotaci, $this->velicinaKotaca, $this->cijena, $this->datumObjave, $this->datumZatvaranja );

	}

}