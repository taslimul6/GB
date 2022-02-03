<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onlinepayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'semester_id',
        'session_id',
        'details',
        'bank_ac',
        'credit',
        'bank_tnxid',
        'contact',
        'state',
        'exam_roll'
        
    ];
    public function session(){
        return $this->belongsTo(Session::class);
     }
     public function student(){
        return $this->belongsTo(Student::class);
     }
}
