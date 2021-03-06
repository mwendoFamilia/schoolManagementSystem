<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'term_name', 'year'
    ];

    public function fee()
    {
        return $this->has(Fee::class);
    }
}
