<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    use HasFactory;
    protected $fillable = [
        'address_id',
        'School_name',
        'school_principal',
        'other_school_deatils',

    ];
}

