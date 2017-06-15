<?php

namespace App;


class Asset
{
    public $name = 'Hey';
    public $location;
    public $status;
    public $area;
    public $counts;

    function __construct() {
        $name = '';
        $location = '';
        $status = '';
        $area = '';
        $counts = '';
    }

    function setName($newName) {
    	$this -> name = $newName;
    }

    function setLocation($newLocation) {
    	$this -> location = $newLocation;
    }

    function setStatus($newStatus) {
    	$this -> status = $newStatus;
    }

    function setArea($newArea) {
    	$this -> area = $newArea;
    }

    function setCount($newCount) {
    	$this -> counts = $newCount;
    }
}
