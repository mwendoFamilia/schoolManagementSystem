<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mockery\Matcher\Subset;

class Test extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'student_id', 'subject_id', 'score', 'grade'
    ];
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
    // public function term()
    // {
    //     return $this->belongsTo(Term::class);
    // }
    // public function subject()
    // {
    //     return $this->belongsTo(Subject::class);
    // }
}
