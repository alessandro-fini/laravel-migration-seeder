<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $fillable = [
        'name',
        'birth_date',
        'country',
        'phone',
        'passenger_id',
        'train_car',
        'price',
        'address'
    ];
}
