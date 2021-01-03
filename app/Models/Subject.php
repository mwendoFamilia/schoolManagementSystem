<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Class_;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','class_id','subject_name'
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
        return $this->hasMany(Teacher::class);
    }
    public function class()
    {
        return $this->belongsToMany(Classes::class);
    }
}
