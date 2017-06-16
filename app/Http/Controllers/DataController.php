<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RecursiveIteratorIterator;
use RecursiveArrayIterator;
use App\Asset;
use App\Location;

class DataController extends Controller
{
    public function renderSiteGridView() {
    	$curl = curl_init();
			curl_setopt_array($curl, array(
    		CURLOPT_RETURNTRANSFER => 1,
    		CURLOPT_URL => 'https://hp-jabil.intelligentlocations.io/api/assets/mobile/dashboard',
    		CURLOPT_USERAGENT => 'Intelligent Locations'
		));
		$resp = curl_exec($curl);
		curl_close($curl);

		$json = json_decode($resp);

        $assets = array();
        for($x = 0; $x < count($json); $x = $x + 1) {
            $newAsset = new Asset();
            $currentData = $json[$x];

            $newAsset -> setName($currentData -> name);
            $newAsset -> setLocation('Hanover Park');
            $newAsset -> setStatus($currentData -> status);

            $newAsset -> setCount($currentData -> movementCount);
            $assets[] = $newAsset;

        }



         return view('sitegrid', ['assets' => $assets]);
    }

    public function renderSiteView() {
        $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://hp-jabil.intelligentlocations.io/api/assets/mobile/dashboard',
            CURLOPT_USERAGENT => 'Intelligent Locations'
        ));
        $resp = curl_exec($curl);
        curl_close($curl);

        $json = json_decode($resp);

        $assets = array();
        for($x = 0; $x < count($json); $x = $x + 1) {
            $newAsset = new Asset();
            $currentData = $json[$x];

            $newAsset -> setName($currentData -> name);
            $newAsset -> setLocation('Hanover Park');
            $newAsset -> setStatus($currentData -> status);

            $newAsset -> setCount($currentData -> movementCount);
            $assets[] = $newAsset;

        }



         return view('site', ['assets' => $assets]);
    }

    public function renderLocationGrid() {
        $locations = array();
        $locationOne = new Location();
        $locationTwo = new Location();
        $locationThree = new Location();
        $locationFour = new Location();
        $locationFive = new Location();
        $locationSix = new Location();

        $locationOne -> setName('Hanover Park');
        $locationTwo -> setName('Gurnee');
        $locationThree -> setName('Chicago');
        $locationFour -> setName('Mount Pleasent ');
        $locationFive -> setName('Memphis');
        $locationSix -> setName('Atlanta');

        $locationOne -> setAddress('6325 Muirfield Drive Hanover Park, IL 60133');
        $locationTwo -> setAddress('955 Tri-State Parkway Gurnee, IL 60031 USA');
        $locationThree -> setAddress('1333 North Kingsbury Suite 302 Chicago, IL 60642 USA');
        $locationFour -> setAddress('400 N. Harvey Road Mount Pleasant, IA 52641 USA');
        $locationFive -> setAddress('5238 Lamar Avenue Memphis, TN 38118 USA USA');
        $locationSix -> setAddress('3791 Browns Mill Road Atlanta, GA 30354 USA');

        $locationOne -> setUtilRate(72);
        $locationTwo -> setUtilRate(92);
        $locationThree -> setUtilRate(91);
        $locationFour -> setUtilRate(88);
        $locationFive -> setUtilRate(77);
        $locationSix -> setUtilRate(80);

        array_push($locations, $locationOne, $locationTwo, $locationThree, $locationFour, $locationFive, $locationSix);

        return view('locationgrid', ['locations' => $locations]);
        
    }

    public function renderCompanyStatsView() {
        $locations = array();
        $locationOne = new Location();
        $locationTwo = new Location();
        $locationThree = new Location();
        $locationFour = new Location();
        $locationFive = new Location();
        $locationSix = new Location();

        $locationOne -> setName('Hanover Park');
        $locationTwo -> setName('Gurnee');
        $locationThree -> setName('Chicago');
        $locationFour -> setName('Mount Pleasent ');
        $locationFive -> setName('Memphis');
        $locationSix -> setName('Atlanta');

        $locationOne -> setAddress('6325 Muirfield Drive Hanover Park, IL 60133');
        $locationTwo -> setAddress('955 Tri-State Parkway Gurnee, IL 60031 USA');
        $locationThree -> setAddress('1333 North Kingsbury Suite 302 Chicago, IL 60642 USA');
        $locationFour -> setAddress('400 N. Harvey Road Mount Pleasant, IA 52641 USA');
        $locationFive -> setAddress('5238 Lamar Avenue Memphis, TN 38118 USA USA');
        $locationSix -> setAddress('3791 Browns Mill Road Atlanta, GA 30354 USA');

        $locationOne -> setUtilRate(72);
        $locationTwo -> setUtilRate(92);
        $locationThree -> setUtilRate(91);
        $locationFour -> setUtilRate(88);
        $locationFive -> setUtilRate(77);
        $locationSix -> setUtilRate(80);

        array_push($locations, $locationOne, $locationTwo, $locationThree, $locationFour, $locationFive, $locationSix);
        return view('companystats', ['locations' => $locations]);
    }
}




















