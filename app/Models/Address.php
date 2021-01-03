<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','address_details'
    ];

    public function school()
    {
        return $this->hasMany(School::class);
    }
    
    public function parent()
    {
        return $this->belongsToMany(Parent_::class);
    }
    
    
}
