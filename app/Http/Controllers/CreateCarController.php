<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Log;

class CreateCarController extends Controller
{
    private $base_url = 'http://157.230.213.199:3000/api';

    public function rules(){
        return [
            'title' => 'string|required',
            'brand' => 'string|required',
            'price' => 'string|required',
            'age' => 'integer|required'
        ];
    }

    public function createCar(Request $request){

        //Validation
        $validator = \Validator::make($request->all(), $this->rules());

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //Prepare data
        $car = [
            'title'=> $request->title,
            'brand'=> $request->brand,
            'price'=> $request->price,
            'age'=> (integer) $request->age
        ];

        //make post
        $response = Http::post($this->base_url.'/cars', $car);

        $data = $response->json();

        //save Logs
        Log::create(['car_id' => $data['_id']]);

        return response()->json($data, 200);

    }
}
