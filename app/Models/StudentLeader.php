<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentLeader extends Model
{
    use HasFactory;
    protected $fillable = [
        'leadership_id','student_id'
    ];
}
