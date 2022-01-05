<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'present_address',
        'permanent_address',
        'phone',
        'gender',
        'blood',
        'nationality',
        'religion',
        'fathers_name',
        'fathers_contact',
        'mothers_name',
        'mothers_contact',
        'emergency_c_name',
        'emergency_number',
        'emergency_address',
        'student_id',
        'batch',
        'class_roll',
        'exam_roll',
        'department_id',
        
        
    ];
}
