<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentParent extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id','parent__id'
    ];

    protected $table = 'parent__student';

}
