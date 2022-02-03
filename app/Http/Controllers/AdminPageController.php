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
use App\Models\pin;
use App\Models\Onlinepayment;
use Faker\Factory;
class AdminPageController extends Controller
{   
    public function index(){
        $all = Student::orderBy('id', 'DESC')->paginate(10);
        $pays = Transaction::orderBy('id', 'DESC')->paginate(5);

        $opays = Onlinepayment::where('state' , '=' , '1')->paginate(5);


        $deps =count(Department::all()) ;
        $tst = count(Student::all()) ;
        $ats = count(Transaction::all()) ;




       
        return view('admin.index' , compact('all' , 'pays' , 'deps' , 'tst' , 'ats' , 'opays'));
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
            $status = Status::where('student_id' , '=' , $src)->get()->first();

            //adding payments of students
            $dsum = 0;
            $csum = 0;
            foreach($pays as $pay)
            {
            $dsum+= $pay->debit;
            $csum+= $pay->credit;
            }
            
            
            return view('admin.payment-single' , [
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
        else{
            return view('admin.payment-single' , [
                
            ]);
        }
    }

   
    public function due(Request $request)
    { 
        $all = Department::all();
        $sess = Session::all();
        $department_id = request('department_id');
        $session_id = request('session_id');
        $semester_id = request('semester_id');

        if(request('next')==1){
            $val=$request->validate([
                'department_id'=>'required|exists:statuses,department_id',
                
            ]);
            $status = status::where([
                ['department_id' ,'=' , $department_id],
                ['session_id' ,'=' , $session_id],
                ['semester_id' ,'=' , $semester_id],
                ['balance' ,'>' , 0 ],
            ])->get();
           
            
            return view('admin.payment-due' , compact('all' , 'department_id' , 'sess' , 'session_id' ,'status' ));

        }
     
        else{
            return view('admin.payment-due' , compact('all' , 'department_id' , 'sess' , 'session_id' ));
        }
    
      
       
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
        if(request('bank')){
            $all = Session::all();
            $src = request()->validate([
                'bank' => 'required|exists:transactions,online_tnx'
            ]);
         
            $pays = Transaction::where('online_tnx', '=' , $src)->get();



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
            $dsum = 0;
            $csum = 0;
            foreach($pays as $pay)
            {
            $dsum+= $pay->debit;
            $csum+= $pay->credit;
            }
            

            return view('admin.pr-advance' , [
                
                'pays' => $pays,
                'i' => $i=1,
                'dsum'=>$dsum,
                'csum'=>$csum,
                'all'=>$all
            ]);
        }

        if(request('month')){
            $all = Session::all();
            $src = request('month');
            $pays = Transaction::where('created_at', 'like' ,'%'. $src . '%' )->get();
            $dsum = 0;
            $csum = 0;
            foreach($pays as $pay)
            {
            $dsum+= $pay->debit;
            $csum+= $pay->credit;
            }
            return view('admin.pr-advance' , [
                
                'pays' => $pays,
                'i' => $i=1,
                'dsum'=>$dsum,
                'csum'=>$csum,
                'all'=>$all
               
            ]);
 
        }
        if(request('session')){
            $src = request('session');
            $all = Session::all();
            $pays = Transaction::where('session_id','=',  $src  )->get();
            $dsum = 0;
            $csum = 0;
            foreach($pays as $pay)
            {
            $dsum+= $pay->debit;
            $csum+= $pay->credit;
            }
            return view('admin.pr-advance' , [
                
                'pays' => $pays,
                'i' => $i=1,
                'dsum'=>$dsum,
                'csum'=>$csum,
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
    public function crnts(){
        $sess = Session::all();
        $cs=null;
        $cs = crsession::where('id', '=', '1')->get()->first();
        return view('admin.session-current', [
            
            'sess'=> $sess,
            'cs'=> $cs,
        ]);
    }

    public function crstore(){
        if(request('session_id')){

            $ses = crsession::where('id', '=', '1')->update(['session_id' => request('session_id')]);

            return redirect()->back();

        }
       
    }
    public function pins(){
       
        if(request('pin')==1){
            $faker = Factory::create();
           
    
            Pin::where('id' , '=' , '1')->update([
                'pin' => $faker->randomNumber($nbDigits = '6', $strict = false)
            ]);
        }
        

        $data= Pin::where('id' , '=' , '1')->get()->first();
        return view('admin.pins' , compact('data'));
    }

    public function wait(){
       
       $datas = Onlinepayment::where('state' , '=' , '1')->get()->all();
       
        return view('admin.online-wait' , compact('datas'));
    }  
    
    public function Olog(){
       
        $datas = Onlinepayment::where('state' , '=' , '2')
        ->orWhere('state' , '=' , '3')->orderby('created_at', 'desc')->get()->all();
        
         return view('admin.online-log' , compact('datas'));
     } 


    public function Odelete($id){
       
         Onlinepayment::where('id' , '=' , $id)->update([
            'state'=> '3'
        ]);
        
         return redirect()->back()->with('message' , 'Payment Disapproved');
     }

     public function Oprocess($id){
       
        $data = Onlinepayment::firstWhere('id' , '=' ,$id);

        $sess = Session::all();
       
        return view('admin.online-edit' , compact(  'sess' ,'data'));
    }

    public function Ostore($id , Request $request){
       
        $pays = Transaction::where('student_id', '=' , $request->student_id)->get()->all();
        $balance = -$request->credit;
        foreach($pays as $pay)
        {
        $balance+= $pay->debit;
        $balance-=$pay->credit;
        }
        $stat = Status::where('student_id', '=' , $request->student_id)->update(['balance' =>   $balance]);

        $up = new Transaction;
        $up->student_id = $request->student_id;
        $up->session_id = $request->session_id;
        $up->semester_id = $request->semester_id;
        $up->details = $request->details;
        $up->debit = '0';
        $up->credit = $request->credit;
        $up->payslip = $request->payslip;
        $up->online_tnx = $request->bank_tnxid;
        $up->balance =  $balance;
        if($up->save()){

            Onlinepayment::where('id' , '=' , $id)->update([
                'state'=> '2'
            ]);

            $tnxID = Transaction::where('student_id', '=' , $request->student_id)->orderby('created_at', 'desc')->first();
            return redirect()->back()->with('message' , 'Transaction ID : ' . $tnxID->id )->with('details' , 'Transaction Type : ' . $tnxID->details );
        }
    }






}
