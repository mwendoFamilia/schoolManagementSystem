<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'leadership_name', 'learship_details'
    ];
    public function student()
    {
        return $this->belongsToMany(Student::class, $table = 'student_leaders', $foreignPivotKey = 'leadership_id', $relatedPivotKey = 'student_id'
        );
    }
    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }
}
