<?php


class ArrayHandle {

    private $polje;

    public function __construct($polje){
    	$this->polje = $polje;
    }

	public function count(){
    	return count($this->polje);
    }

    public function header(){

    	$html = '<thead><tr>';

    	    foreach(array_keys($this->polje) as $index)
    	    	$html .= '<td>' . $index . '</td>';

    	$html .= '</tr></thead>';

    	return $html;
    }

	public function row($key){
    	return '<tr><td>' . $this->polje[$key] . '</td></tr>';
	}

	public function reorderArray(){
    	return array_reverse($this->polje);
	}
}