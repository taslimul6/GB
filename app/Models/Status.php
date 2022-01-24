<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'session_id',
        'semester_id',
        'p1',
        'p2',
        'p3',
        'p4',
        'p5',
        'p6',
        'p7',
        'p8',
       
        
    ];
    public function session(){
        return $this->belongsTo(Session::class );
     }
    public function student(){
        return $this->belongsTo(Student::class , 'id' );
     }
    

}
