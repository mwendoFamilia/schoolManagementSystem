<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'school_id','classes_id', 'title', 'gender', 'first_name', 'leader_id', 'middle_name', 'last_name', 'other_teacher_details'
    ];

    public function leader()
    {
        return $this->belongsTo(Leader::class);
    }
    
    public function class()
    {
        return $this->belongsToMany(Classes::class);
    }
}
