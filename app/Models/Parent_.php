<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parent_ extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'gender', 'first_name', 'middle_name', 'last_name', 'otherparent_details'
    ];
    public function student()
    {
        return $this->belongsToMany(Student::class);
    }

    public function address()
    {
        return $this->belongsToMany(Address::class);
    }
    

}
