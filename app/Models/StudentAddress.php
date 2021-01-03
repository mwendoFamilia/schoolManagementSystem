<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','student_id','address_id','class_name','other_address_details'
    ];

    // public function teacher()
    // {
    //     return $this->hasMany(Teacher::class);
    // }
}
