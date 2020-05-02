<?php


class User {

	private $id;
	private $username;
	private $email;
	private $password;
	private static $minPassLength = 5;

	public function __construct(){
		echo 'Zvao konstruktro<br>';
	}

	public function __destruct(){
		echo 'Zvao destruktor<br>';
		echo 'User s kojim smo radili<br>';
		echo $this->id . '<br>';
		echo $this->username . '<br>';
		echo $this->email . '<br>';
		echo $this->password . '<br>';
	}

	public function __set($name, $value){
		$this->username = $value;
	}

	public function __get($username){
		return $this->username;
	}

	public function register(){
		return 'User Registered<br>';
	}

	public function login($username, $password){
		$this->username = $username;
		if(User::validatePassword($password)) {
			$this->password = $password;
		}
		return $this->auth_user();
	}

	private function auth_user(){
		return "Pozvao me user s username-om " . $this->username . "<br> i password-om " . $this->password;
	}


	private static function validatePassword($password){
		if(strlen($password) >= self::$minPassLength){
			return true;
		} else {
			return false;
		}
	}
}

$User = new User;

echo $User->register() . '<br>';
echo $User->login('mmarkovic', 'zaporka123');

$User->__set('email', 'testemail');
echo $User->__get('email');

unset($User);