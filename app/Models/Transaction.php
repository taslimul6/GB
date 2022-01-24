<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'semester_id',
        'session_id',
        'details',
        'amount',
        'payslip',
        'student_id'
       
        
    ];
    public function session(){
        return $this->belongsTo(Session::class);
     }
   
}
