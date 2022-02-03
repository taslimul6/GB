<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $with = [ "session"];
    protected $fillable = [
        'student_id',
        'semester_id',
        'session_id',
        'details',
        'debit',
        'credit',
        'payslip',
        'user_id',
        'is_delete',
        'balance'
       
       
        
    ];
    public function session(){
        return $this->belongsTo(Session::class);
     }
   
}
