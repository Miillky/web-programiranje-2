<?php

class User {

	private $ime;
	private $prezime;
	private $email;
	private $password;

	public function register($ime, $prezime, $email, $password){
		$this->ime = $ime;
		$this->prezime = $prezime;
		$this->email = $email;
		$this->validatePassword($password);
		if($this->password){
			$this->createCsv();
			$this->displayUser();
		}
	}

	public function validatePassword($password){
		if( strlen($password) >= 5){
			$this->password = $password;
		} else {
			$this->password = false;
			echo "Zaporka mora imati najmanje 5 znakova";
		}
	}

	public function createCsv(){
		$user = [$this->ime, $this->prezime, $this->email, $this->password];
		$fp = fopen('./users.csv', 'a+');
		fputcsv($fp, $user);
		fclose($fp);
	}

	private function displayUser(){
		pritnf("%s %s %s %s", $this->username, $this->password, $this->email, $this->password);
	}

}