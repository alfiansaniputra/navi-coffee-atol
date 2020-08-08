<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class ProvinceController extends Controller
{
    public $client;

    function __construct(Client $client){
        $this->client = $client;
    }

    public function province(){

        $requestProvinces = $this->client->get('https://dev.farizdotid.com/api/daerahindonesia/provinsi');
        $response = $requestProvinces->getBody();

        $response = json_decode($response, true);
        
        return response()->json($response);
        
    }

    public function district($provinceId){

        $provinceIdLtrim = preg_replace('/\D/', '', $provinceId);

        $requestDistricts = $this->client->get('https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi='. $provinceIdLtrim);
        $response = $requestDistricts->getBody();

        $response = json_decode($response, true);

        return response()->json($response);
    }

    // if you have interested to add the others of villages, add these code as bellow :

    // code goes here..
}
