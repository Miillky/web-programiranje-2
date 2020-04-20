<?php


class SQLCommands {

	private $polje;
	private $tablica;

	public function __construct($polje, $tablica){
		$this->polje = $polje;
		$this->tablica = $tablica;
	}

	public function insert(){

		$keys = $values = '';

		foreach($this->polje as $key => $value){
			$keys .= $key . ', ';
			$values .= $value . ', ';
		}

		$keys = rtrim($keys, ', ');
		$values = rtrim($values, ', ');

		return 'INSERT INTO ' . $this->tablica . '(' . $keys . ') VALUES (' . $values . ')';

	}

	public function update(){

		$sql = '';

		foreach($this->polje as $key => $value)
			$sql .= $key . "='" . $value . "', ";


		$sql = rtrim($sql, ', ');

		return 'UPDATE ' . $this->tablica . ' SET ' . $sql;

	}

}