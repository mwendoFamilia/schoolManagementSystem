<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'class_id', 'term_id', 'amount'
    ];

    public function term()
    {
        return $this->belongsTo(Term::class);
    }
    public function class()
    {
        return $this->belongsTo(Classes::class);
    }
}
