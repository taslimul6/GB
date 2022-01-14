<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Dpay;
use App\Models\Student;
use App\Models\Semester;
use App\Models\Session;
use App\Models\Transaction;

class AdminPageController extends Controller
{   
    public function index(){
        $all = Student::orderBy('id', 'DESC')->paginate(10);
        $pays = Transaction::orderBy('id', 'DESC')->paginate(5);


       
        return view('admin.index' , [
            'all' => $all,
            'pays' => $pays,
        ]);
    }

    public function singleTnx(){
        if(request('student_id')){
            $src = request()->validate([
                'student_id' => 'required|exists:students,student_id'
            ]);
            $user = Student::where('student_id' , '=' , $src)->get()->first();
            $sems = Semester::all();
            $sess = Session::all();
            $pays = Transaction::where('student_id', '=' , $src)->get()->all();

            //adding payments of students
            $sum = 0;
                foreach($pays as $pay)
                {
                $sum+= $pay->amount;
                }
                
            
            
            return view('admin.payment-single' , [
                'data' => $user,
                'sems' => $sems,
                'sess' => $sess,
                'pays' => $pays,
                'i' => $i=1,
                'sum' =>$sum,

            ]);

        }
        else{
            return view('admin.payment-single' , [
                
            ]);
        }
    }

   
    public function due()
    { 
        $src = null;
        return view('admin.payment-due' , [
            'src' => $src
        ]);
       
    }
    public function pr()
    { 
        if(request('payslip')){
            $all = Session::all();
            $src = request()->validate([
                'payslip' => 'required|exists:transactions,payslip'
            ]);
         
            $pays = Transaction::where('payslip', '=' , $src)->get();



            //adding payments of students
           
                
            
            
            return view('admin.pr-advance' , [
                
                'pays' => $pays,
                'i' => $i=1,
                'all'=>$all
                

            ]);

        }
        if(request('trans')){
            $all = Session::all();
            $src = request()->validate([
                'trans' => 'required|exists:transactions,id'
            ]);
         
            $pays = Transaction::where('id', '=' , $src)->get();



            //adding payments of students
           
                
            
            
            return view('admin.pr-advance' , [
                
                'pays' => $pays,
                'i' => $i=1,
                'all'=>$all
                

            ]);

        }
        if(request('d')){
            $all = Session::all();
            $src = request('date');
            $pays = Transaction::where('created_at', 'like' ,'%'. $src . '%' )->get();
            $sum = 0;
            foreach($pays as $pay)
            {
            $sum+= $pay->amount;
            }
            

            return view('admin.pr-advance' , [
                
                'pays' => $pays,
                'i' => $i=1,
                'sum'=>$sum,
                'all'=>$all
            ]);
        }

        if(request('month')){
            $all = Session::all();
            $src = request('month');
            $pays = Transaction::where('created_at', 'like' ,'%'. $src . '%' )->get();
            $sum = 0;
            foreach($pays as $pay)
            {
            $sum+= $pay->amount;
            }

            return view('admin.pr-advance' , [
                
                'pays' => $pays,
                'i' => $i=1,
                'sum'=>$sum,
                'all'=>$all
               
            ]);

        }
        if(request('session')){
            $src = request('session');
            $all = Session::all();
            $pays = Transaction::where('session_id','=',  $src  )->get();
            $sum = 0;
            foreach($pays as $pay)
            {
            $sum+= $pay->amount;
            }

            return view('admin.pr-advance' , [
                
                'pays' => $pays,
                'i' => $i=1,
                'sum'=>$sum,
                'all'=>$all
               
            ]);

        }
        else{

            $all = Session::all();
            return view('admin.pr-advance' , [
                'all'=>$all
            ]);
        }


        
       
    }
    













    public function tution(){

        $all = Department::all();
        $test = request('next');
        $department_id = request('department_id');

        $sem1 = Dpay::where([
            ['department_id', '=', $department_id],
            ['semester_id', '=', '1'],
        ])->get()->first();
        $sem2 = Dpay::where([
            ['department_id', '=', $department_id],
            ['semester_id', '=', '2'],
        ])->get()->first();
        $sem3 = Dpay::where([
            ['department_id', '=', $department_id],
            ['semester_id', '=', '3'],
        ])->get()->first();
        $sem4 = Dpay::where([
            ['department_id', '=', $department_id],
            ['semester_id', '=', '4'],
        ])->get()->first();
        $sem5 = Dpay::where([
            ['department_id', '=', $department_id],
            ['semester_id', '=', '5'],
        ])->get()->first();
        $sem6 = Dpay::where([
            ['department_id', '=', $department_id],
            ['semester_id', '=', '6'],
        ])->get()->first();
        $sem7 = Dpay::where([
            ['department_id', '=', $department_id],
            ['semester_id', '=', '7'],
        ])->get()->first();
        $sem8 = Dpay::where([
            ['department_id', '=', $department_id],
            ['semester_id', '=', '8'],
        ])->get()->first();

     


        return view('admin.tution-fees' , [
            'all' => $all,
            'next' => $test,
            'department_id' => $department_id,
            'sem1' => $sem1,
            'sem2' => $sem2,
            'sem3' => $sem3,
            'sem4' => $sem4,
            'sem5' => $sem5,
            'sem6' => $sem6,
            'sem7' => $sem7,
            'sem8' => $sem8,
        ]);

    } 
    
    public function tutionStore(){

        if(request('sem1')){

            $sem1 = Dpay::where([
                ['department_id', '=', request('dep_id')],
                ['semester_id', '=', '1'],
            ])->update(['amount' => request('p1')]);

            return redirect()->back();

        }
        if(request('sem2')){

            $sem1 = Dpay::where([
                ['department_id', '=', request('dep_id')],
                ['semester_id', '=', '2'],
            ])->update(['amount' => request('p2')]);

            return redirect()->back();

        }
        if(request('sem3')){

            $sem1 = Dpay::where([
                ['department_id', '=', request('dep_id')],
                ['semester_id', '=', '3'],
            ])->update(['amount' => request('p3')]);

            return redirect()->back();

        }
        if(request('sem4')){

            $sem1 = Dpay::where([
                ['department_id', '=', request('dep_id')],
                ['semester_id', '=', '4'],
            ])->update(['amount' => request('p4')]);

            return redirect()->back();

        }
        if(request('sem5')){

            $sem1 = Dpay::where([
                ['department_id', '=', request('dep_id')],
                ['semester_id', '=', '5'],
            ])->update(['amount' => request('p5')]);

            return redirect()->back();

        }
        if(request('sem6')){

            $sem1 = Dpay::where([
                ['department_id', '=', request('dep_id')],
                ['semester_id', '=', '6'],
            ])->update(['amount' => request('p6')]);

            return redirect()->back();

        }
        if(request('sem7')){

            $sem1 = Dpay::where([
                ['department_id', '=', request('dep_id')],
                ['semester_id', '=', '7'],
            ])->update(['amount' => request('p7')]);

            return redirect()->back();

        }
        if(request('sem8')){

            $sem1 = Dpay::where([
                ['department_id', '=', request('dep_id')],
                ['semester_id', '=', '8'],
            ])->update(['amount' => request('p8')]);

            return redirect()->back();

        }


    }
}
