<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    protected $fillable = ['car_id'];
    public $timestamps = false;
}
