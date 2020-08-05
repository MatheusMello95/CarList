<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogsController extends Controller
{
    public function getLogs(){
        $logs = DB::table('logs')->select('id', 'data_hora', 'car_id')->get();
        return $logs;
    }
}
