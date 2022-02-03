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

class EntryPageController extends Controller
{
    public function index()
    { 
        $all = Student::orderBy('id', 'DESC')->paginate(10);
        $pays = Transaction::orderBy('id', 'DESC')->paginate(5);
        $opays = Onlinepayment::where('state' , '=' , '1')->paginate(5);

        $deps =count(Department::all()) ;
        $tst = count(Student::all()) ;
        $ats = count(Transaction::all()) ;
       
        return view('entry.index' , compact('all' , 'pays' , 'deps' , 'tst' , 'ats','opays'));
        
    }
    public function pCreate()
    {
        if(request('student_id')){
            $src = request()->validate([
                'student_id' => 'required|exists:students,student_id'
            ]);
            $user = Student::where('student_id' , '=' , $src)->get()->first();
            $sems = Semester::all();
            $sess = Session::all();
            $pays = Transaction::where('student_id', '=' , $src)->get()->all();
            $last = Transaction::where('student_id', '=' , $src)->orderby('id', 'desc')->get()->first();;
            $status = Status::where('student_id', '=' , $src)->get()->first();

            //adding payments of students
          
            $dsum = 0;
            $csum = 0;
            foreach($pays as $pay)
            {
            $dsum+= $pay->debit;
            $csum+= $pay->credit;
            }

            return view('entry.payment-entry' , [
                'data' => $user,
                'sems' => $sems,
                'sess' => $sess,
                'pays' => $pays,
                'status'=>$status,
                'i' => $i=1,
                'dsum'=>$dsum,
                'csum'=>$csum,
                'last'=>$last,
                
               

            ]);

        }
        else{
            return view('entry.payment-entry' , [
                'dsum'=>0,
                'csum'=>0,
            ]);
        }
        
    }


    public function pStore(Request $request)
    { 
       if($request->type == 'debit'){

            $pays = Transaction::where('student_id', '=' , $request->student_id)->get()->all();
            $balance = $request->amount;
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
            $up->debit = $request->amount;
            $up->credit = '0';
            $up->payslip = $request->payslip;
            $up->balance =  $balance;
            if($up->save()){
                return redirect()->back()->with('message' , 'Transaction Added ');
            }
        }


        if($request->type == 'credit'){
            $pays = Transaction::where('student_id', '=' , $request->student_id)->get()->all();
            $balance = -$request->amount;
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
            $up->credit = $request->amount;
            $up->payslip = $request->payslip;
            $up->balance =  $balance;
            if($up->save()){
                $tnxID = Transaction::where('student_id', '=' , $request->student_id)->orderby('created_at', 'desc')->first();
                return redirect()->back()->with('message' , 'Transaction ID : ' . $tnxID->id )->with('details' , 'Transaction Type : ' . $tnxID->details );
            }

        } 
    
    }
    public function pUpdate(Request $request, $id)
    {

       if($request->update==1){
            if($request->type == 'credit'){
            
                Transaction::where('id' , '=' , $id)->update([
                    'session_id' => $request->session_id,
                    'semester_id' => $request->semester_id,
                    'details' => $request->details,
                    'debit' => '0' ,
                    'credit' => $request->amount,
                    'payslip' => $request->payslip,
                

                ]);

                $pays = Transaction::where('student_id', '=' , $request->student_id)->get()->all();
                $bal = 0;
                foreach($pays as $pay)
            {
                $bal+= $pay->debit;
                $bal-=$pay->credit;
                $Bup = Transaction::where('id', '=' , $pay->id)->update(['balance' => $bal]);
            }

            $stat = Status::where('student_id', '=' , $request->student_id)->update(['balance' =>   $bal]);


                return redirect()->back()->with('message' , 'Transaction Updated');
            }
            if($request->type == 'debit'){

                Transaction::where('id' , '=' , $id)->update([
                    'session_id' => $request->session_id,
                    'semester_id' => $request->semester_id,
                    'details' => $request->details,
                    'debit' => $request->amount ,
                    'credit' => '0',
                    'payslip' => $request->payslip,

                    ]);

                    //Balance Calculate
                    $pays = Transaction::where('student_id', '=' , $request->student_id)->get()->all();
                    $bal = 0;
                    foreach($pays as $pay)
                {
                    $bal+= $pay->debit;
                    $bal-=$pay->credit;
                    $Bup = Transaction::where('id', '=' , $pay->id)->update(['balance' => $bal]);
                }

                $stat = Status::where('student_id', '=' , $request->student_id)->update(['balance' =>   $bal]);

                    return redirect()->back()->with('message' , 'Transaction Updated');
            }
       
    
        } 
       
                
    }
    public function pDelete($id)
    {
        if(request('delete')==1){
            Transaction::where('id' , '=' , $id)->delete();
            $pays = Transaction::where('student_id', '=' , request('student_id'))->get()->all();
                    $bal = 0;
                    foreach($pays as $pay)
                {
                    $bal+= $pay->debit;
                    $bal-=$pay->credit;
                    $Bup = Transaction::where('id', '=' , $pay->id)->update(['balance' => $bal]);
                }

                $stat = Status::where('student_id', '=' , request('student_id'))->update(['balance' =>   $bal]);

                    return redirect()->back()->with('delete' , 'Transaction Deleted ');
        }
    }
    public function prD(Request $request)
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
           
            
            return view('entry.payment-due' , compact('all' , 'department_id' , 'sess' , 'session_id' ,'status' ));

        }
     
        else{
            return view('entry.payment-due' , compact('all' , 'department_id' , 'sess' , 'session_id' ));
        }
    
      
       
    }
    public function prA()
    { 
        if(request('payslip')){
            $all = Session::all();
            $src = request()->validate([
                'payslip' => 'required|exists:transactions,payslip'
            ]);
         
            $pays = Transaction::where('payslip', '=' , $src)->get();



            //adding payments of students
           
                
            
            
            return view('entry.pr-advance' , [
                
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
           
            
            
            
            return view('entry.pr-advance' , [
                
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
           
            
            
            
            return view('entry.pr-advance' , [
                
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
            

            return view('entry.pr-advance' , [
                
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
            return view('entry.pr-advance' , [
                
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
            return view('entry.pr-advance' , [
                
                'pays' => $pays,
                'i' => $i=1,
                'dsum'=>$dsum,
                'csum'=>$csum,
                'all'=>$all
               
            ]);

        }
        else{

            $all = Session::all();
            return view('entry.pr-advance' , [
                'all'=>$all
            ]);
        }


        
       
    }

    public function plog(){
        
       
       
        $pays = Transaction::orderBy('id', 'DESC')->paginate(200);
        
        
        return view('entry.payment-log' , [
            
            'pays' => $pays,
            'i' => $i=1,
            
            
        ]);


    }


}
