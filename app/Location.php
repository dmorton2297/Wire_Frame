<?php

namespace App;

class Location {
	public $name;
	public $address;
	public $utilizationRate;

	function __construct() {
		$name = '';
		$adress = '';
		$utilizationRate = 0;
	}

	function setName($newName) {
		$this -> name = $newName;
	}

	function setAddress($newAddress) {
		$this -> address = $newAddress;
	}

	function setUtilRate($newUtilRate) {
		$this -> utilizationRate = $newUtilRate;
	}
}