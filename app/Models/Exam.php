<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','class_id'
    ];

    public function test()
    {
        return $this->hasMany(Test::class);
    }
    public function classes()
    {
        return $this->belongsTo(Classes::class, 'class_id', 'id');
    }
   
}
