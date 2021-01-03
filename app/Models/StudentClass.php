<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','class_id','date_from','date_to'
    ];

    protected $table = 'classes_student';
    // public function teacher()
    // {
    //     return $this->hasMany(Teacher::class);
    // }
}
