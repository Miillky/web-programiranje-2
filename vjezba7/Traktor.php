<?php

class Traktor extends Vozila {

	private $prikljuci;

	public function objaviOglas($prikljuci, $kotaci, $maxBrzinam, $brojBrzina, $marka, $cijena, $datumObjave, $datumZatvaranja ){

		$this->prikljuci = $prikljuci;
		$this->kotaci = $kotaci;
		$this->maxBrzina = $maxBrzinam;
		$this->brojBrzina = $brojBrzina;
		$this->marka = $marka;
		$this->cijena = $cijena;
		$this->datumObjave = $datumObjave;
		$this->zatvoriOglas($datumZatvaranja);

		printf('%s, marke %s, s %s brzina, priljuci %s", cijena %skn datum objave: %s oglas vrijedi do %s',
			get_class($this), $this->marka, $this->maxBrzina, $this->prikljuci, $this->cijena, $this->datumObjave, $this->datumZatvaranja );

	}

}