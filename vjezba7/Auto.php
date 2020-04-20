<?php

class Auto extends Vozila {

	private $sjedala;

	public function objaviOglas($sjedala, $kotaci, $maxBrzinam, $brojBrzina, $marka, $cijena, $datumObjave, $datumZatvaranja ){

		$this->sjedala = $sjedala;
		$this->kotaci = $kotaci;
		$this->maxBrzina = $maxBrzinam;
		$this->brojBrzina = $brojBrzina;
		$this->marka = $marka;
		$this->cijena = $cijena;
		$this->datumObjave = $datumObjave;
		$this->zatvoriOglas($datumZatvaranja);

		printf('%s, marke %s, s %s brzina, %s kotaca, %s sjedala", cijena %skn datum objave: %s oglas vrijedi do %s',
			get_class($this), $this->marka, $this->maxBrzina, $this->kotaci, $this->sjedala, $this->cijena, $this->datumObjave, $this->datumZatvaranja );


	}

}