<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RecursiveIteratorIterator;
use RecursiveArrayIterator;
use App\Asset;

class DataController extends Controller
{
    public function retrieveData() {
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
}
