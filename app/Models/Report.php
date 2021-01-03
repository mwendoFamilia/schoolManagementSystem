<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','student_id','report_content','teachers_comments','other_report_details',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
