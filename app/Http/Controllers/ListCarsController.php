<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListCarsController extends Controller
{
    public function getCars(){
        $externalApi = "http://157.230.213.199:3000/api/cars";
        $response = file_get_contents($externalApi);
        return $response;
    }
}
