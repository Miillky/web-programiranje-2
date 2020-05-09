<?php


class Forma {

	private $action;
	private $method;
	private $submit;
	private $formPositions;

	public function __construct($action, $method, $sumbit){
		$this->action = $action;
		$this->method = $method;
		$this->submit = $sumbit;
	}

	public function dropDownList($list, $pozicija){

		if( $list ){

			$dropdown_list = '<select name="dropdown_list">';

			foreach( $list as $key => $value ){

				$dropdown_list .= sprintf('<option value="%s">%s</option>', $key, $value);

			}

			$dropdown_list .= '</select>';

			$this->setPosition($pozicija, $dropdown_list);

		} else {

			$this->setPosition($pozicija, $this->errorMessage(__METHOD__));

		}

	}

	public function textInput($list, $pozicija){

		if( $list ){

			$textInput = '';

			foreach( $list as  $key => $value ){

				$textInput .= sprintf('<label for="%1$s">%2$s: </label><input type="text" id="%1$s" name="%1$s"><br><br>', $key, $value);

			}

			$this->setPosition($pozicija, $textInput);

		} else {

			$this->setPosition($pozicija, $this->errorMessage(__METHOD__));

		}

	}

	public function radioButton($list, $name, $pozicija){

		if( $list && $name ){

			$radioButton = '';

			foreach( $list as $value ){

				$radioButton .= sprintf('<input type="radio" name="%1$s" value="%2$s"><label>%2$s</label>', $name, $value);

			}

			$this->setPosition($pozicija, $radioButton);

		} else {

			$this->setPosition($pozicija, $this->errorMessage(__METHOD__));

		}

	}

	public function checkbox($list, $pozicija){

		if( $list ){

			$checkbox = '';

			foreach( $list as $key => $value ){

				$checkbox .= sprintf('<input type="checkbox" id="%1$s" name="%1$s" value="%2$s"><label for="%1$s">%2$s</label><br>', $key, $value);

			}

			$this->setPosition($pozicija, $checkbox);

		} else {

			$this->setPosition($pozicija, $this->errorMessage(__METHOD__));

		}
	}

	public function createForm(){

		$form = sprintf('<form action="%s" method="%s">', $this->action, $this->method);

		ksort($this->formPositions );

		foreach( $this->formPositions as $html ){

			$form .= $html . '<br><br>';

		}

		$form .= sprintf('<br><button type="submit">%s</button>', $this->submit);

		echo $form;

	}

	private function setPosition($pozicija, $html){

		if( $this->formPositions[$pozicija] )
			$this->formPositions[] = $html;
		else
			$this->formPositions[$pozicija] = $html;

	}

	private function errorMessage($name){
		return sprintf("Unesite parametar liste u funckiji %s", $name);
	}

}