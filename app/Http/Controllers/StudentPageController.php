<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Dpay;
use App\Models\Student;
use App\Models\Semester;
use App\Models\Session;
use App\Models\Transaction;
use App\Models\crsession;
use App\Models\Status;
use App\Models\Onlinepayment;
use Auth;


class StudentPageController extends Controller
{
    public function index(){
       
        $tpays = Transaction::where('student_id' , '=' , Auth::user()->student_id)->get();
        $opays = Onlinepayment::where('student_id' , '=' , Auth::user()->student_id)->get();
        $st = Status::where('student_id' , '=' , Auth::user()->student_id)->get()->first();
        $bal = $st->balance;

        


       
        return view('student.index' , compact('tpays' , 'opays' , 'bal'));
    }
    public function payDetail(){

    
        
        $user = Student::where('student_id' , '=' , auth()->user()->student_id)->get()->first();
        $sems = Semester::all();
        $sess = Session::all();
        $pays = Transaction::where('student_id', '=' , auth()->user()->student_id)->get()->all();
        $status = Status::where('student_id' , '=' , auth()->user()->student_id)->get()->first();


        //adding payments of students
        $dsum = 0;
        $csum = 0;
        foreach($pays as $pay)
        {
        $dsum+= $pay->debit;
        $csum+= $pay->credit;
        }
        
        
        return view('student.payment-details' , [
            'data' => $user,
            'sems' => $sems,
            'sess' => $sess,
            'pays' => $pays,
            'i' => $i=1,
            
            'dsum'=>$dsum,
            'csum'=>$csum,
            'status'=> $status

        ]);

        
        

     }

    public function online(){
       $data = Student::firstWhere('user_id' , '=' , auth()->user()->id);
       $pays = Transaction::Where('student_id' , '=' , auth()->user()->student_id)->get();
       $sess = Session::all();
       $i=1;


      
  
    $sems = Semester::all();
    $sess = Session::all();
    
    
    //adding payments of students
  
    

        return view('student.payment-online' , compact('data' , 'pays' , 'sess' ));
    }

    public function onlineStore(Request $request){

            $data = Student::firstWhere('user_id' , '=' , auth()->user()->id);

            $up = new Onlinepayment;
            $up->student_id = $data->student_id;
            $up->exam_roll = $data->exam_roll;
            $up->session_id = $request->session_id;
            $up->semester_id = $request->semester_id;
            $up->details = $request->details;
            $up->credit = $request->credit;
            $up->bank_ac = $request->bank_ac;
            $up->bank_tnxid = $request->bank_tnxid;
            $up->contact = $request->contact;
            $up->state = '1';
            
            if($up->save()){
                return redirect()->back()->with('message' , 'Online Payment Request Sent!');
            }
    }

    
    public function Onlog(){
       
        $datas = Onlinepayment::where('student_id' , '=' , auth()->user()->student_id)->orderby('created_at', 'desc')->get()->all();
        
         return view('student.payment-onlineLog' , compact('datas'));
     } 


    
}
