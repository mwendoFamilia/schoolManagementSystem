<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'learship_name', 'learship_details'
    ];
    public function student()
    {
        return $this->hasMany(Student::class);
    }
    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }
}
