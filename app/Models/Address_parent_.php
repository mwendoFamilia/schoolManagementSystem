<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address_parent_ extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent__id','address_id'
    ];

    protected $table = 'address_parent_';


}
