<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Class_;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','class_id','school_id', 'gender', 'first_name', 'middle_name', 'last_name', 'date_of_birth', 'other_student_details'
    ];

    public function parent()
    {
        return $this->belongsToMany(Parent_::class);
    }
    public function reports()
    {
        return $this->hasMany(Report::class);
    }
    public function class()
    {
        return $this->belongsToMany(Classes::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }
    public function leadership()
    {
        return $this->belongsToMany(Leader::class,$table = 'student_leaders', $foreignPivotKey = 'student_id', $relatedPivotKey = 'leadership_id',);
    }
}
