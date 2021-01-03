<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $fillable = [
        'address_id',
        'School_name',
        'school_principal',
        'other_school_details',
    ];

    public function class()
    {
        return $this->hasMany(Classes::class);
    }
    public function teacher()
    {
        return $this->hasMany(Teacher::class);
    }
    public function student()
    {
        return $this->hasMany(Student::class);
    }
    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
