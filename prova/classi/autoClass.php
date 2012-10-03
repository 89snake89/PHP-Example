<?php
class auto{
	private $marca;
	private $modello;
	private $anno;
	private $prezzo;
	private $colore;
	
	function __construct($Marca, $Modello, $Anno, $price, $coulor){
		$this->marca = $Marca;
		$this->modello = $Modello;
		$this->anno = $Anno;
		$this->prezzo = $price;
		$this->colore = $coulor;
	}
	
	/*Metodi getter*/
	function __getMarca(){
		return $this->marca;
	}
	function  __getModello(){
		return $this->modello;
	}
	function __getAnno(){
		return $this->anno;
	}
	function __getColore(){
		return $this->colore;
	}
	function __getPrezzo(){
		return $this->prezzo;
	}
}