<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','school_id','title','gender','first_name','middle_name','last_name','other_teacher_details'
    ];
}
