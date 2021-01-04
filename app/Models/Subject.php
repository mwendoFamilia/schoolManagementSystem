<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Class_;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','classes_id','subject_name'
    ];

    public function exam()
    {
        return $this->hasMany(Exam::class);
    }
    
    public function homework()
    {
        return $this->hasMany(Homework::class);
    }
    public function teacher()
    {
        return $this->belongsToMany(Teacher::class,$table = 'subject_teachers', $foreignPivotKey = 'teacher_id', $relatedPivotKey = 'subject_id',);
    }
    public function class()
    {
        return $this->belongsToMany(Classes::class);
    }
}
