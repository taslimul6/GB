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
        'email',
        'dob',
        'admission_date',
        'ad_session'
        
        
    ];
    public function department(){
        return $this->belongsTo(Department::class);
     }
     public function user(){
        return $this->belongsTo(User::class , 'user_id');
     }
     public function session(){
        return $this->belongsTo(Session::class , 'ad_session');
     }
   
  
    
}
