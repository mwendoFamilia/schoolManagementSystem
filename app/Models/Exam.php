<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','class_id','Subject_id','exam_code','exam_name','other_exam_details'
    ];

    public function test()
    {
        return $this->hasMany(Test::class);
    }
    public function classes()
    {
        return $this->belongsTo(Classes::class, 'classes_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function term()
    {
        return $this->belongsTo(Term::class, 'subject_id', 'id');
        // you need to specify the foregn key and the self key incase  
    }
   
}
