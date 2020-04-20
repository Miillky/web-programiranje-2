<?php

class Motocikl extends Vozila {

	private $kolometara;

	public function objaviOglas($kolometara, $kotaci, $velicinaKotaca, $maxBrzinam, $brojBrzina, $marka, $cijena, $datumObjave, $datumZatvaranja ){

		$this->kolometara = $kolometara;
		$this->kotaci = $kotaci;
		$this->maxBrzina = $maxBrzinam;
		$this->brojBrzina = $brojBrzina;
		$this->marka = $marka;
		$this->cijena = $cijena;
		$this->datumObjave = $datumObjave;
		$this->zatvoriOglas($datumZatvaranja);

		printf('%s, marke %s, s %s brzina, %s kotaca, %s prijeđenih kilometara ", cijena %skn datum objave: %s oglas vrijedi do %s',
			get_class($this), $this->marka, $this->maxBrzina, $this->kotaci, $this->kolometara, $this->cijena, $this->datumObjave, $this->datumZatvaranja );


	}

}