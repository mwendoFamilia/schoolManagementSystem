<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mockery\Matcher\Subset;

class Homework extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'student_id', 'subject_id', 'homework_content', 'grade', 'other_homework_details'
    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subset::class, 'subject_id', 'id');
    }
}
