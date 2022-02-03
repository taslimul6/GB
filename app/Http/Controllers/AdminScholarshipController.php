<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Semester;
use App\Models\Session;
use App\Models\Enrollment;
use App\Models\Status;
use App\Models\Department;
use App\Models\Transaction;
use App\Models\Crsession;
use Illuminate\Support\Facades\DB;

class AdminScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
       
        //Auto Scholarhip Page
        $all = Department::all();
        $sess = Session::all();
        $department_id = request('department_id');
        $session_id = request('session_id');
        $semester_id = request('semester_id');
        $crntSes = Crsession::where('id', '=' , '1')->get()->first();
        

        if(request('next')==1){
        
            $status = status::where([
                ['department_id' ,'=' , $department_id],
                ['session_id' ,'=' , $session_id],
                ['semester_id' ,'=' , $semester_id],
            ])->orderBy('student_id','asc')->get();

        
           
            
            return view('admin.schlorship-auto' , compact('all' , 'department_id' , 'sess' , 'session_id' ,'status' , 'semester_id'));

        }

        if(request('auto')==1){
            $active = request('active');
            $sclr = request('amount');
            foreach($active as $act){
               
                $st = Status::where('student_id', '=' , $act)->get()->first();
                $balance= 0;
                $balance -= $sclr;  
                $pays = Transaction::where('student_id', '=' , $act)->get()->all();
                foreach($pays as $pay)
                {
                
                $balance+= $pay->debit;
                $balance-=$pay->credit;
                }
                $stat = Status::where('student_id', '=' , $act)->update(['balance' =>   $balance]);
                $up = new Transaction;
                $up->student_id = $act;
                $up->session_id = $crntSes->session_id;
                $up->semester_id = $st->semester_id;
                $up->details = 'Scholarship [Auto added]';
                $up->debit = 0;
                $up->credit = $sclr;
                $up->payslip = NULL;
                $up->balance =  $balance;
                $up->save();
            }
        return redirect()->back()->with('message' , 'Schlorship Added');
        }

      

















     
        else{
            return view('admin.schlorship-auto' , compact('all' , 'department_id' , 'sess' , 'session_id' , 'semester_id'));
        }



       

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {   
        $enroll= new Enrollment;
        
        $enroll->student_id = $request->student_id;
        $enroll->semester_id = $request->semester_id;
        $enroll->session_id = $request->session_id;
        $enroll->save();

       
        $up = DB::table('statuses')
            ->where('student_id' , $request->student_id)
            ->update([
                'semester_id' => $request->semester_id,
                'session_id' => $request->session_id,

        ]);

        $st = Status::where('student_id', '=' , $request->student_id)->get()->first();

        if($request->semester_id==1){
            $balance = $st->p1;  
            $pays = Transaction::where('student_id', '=' , $request->student_id)->get()->all();
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
            $up->details = 'Semester Fees [Auto added]';
            $up->debit = $st->p1;
            $up->credit = '0';
            $up->payslip = NULL;
            $up->balance =  $balance;
            if($up->save()){
                return redirect()->back()->with('message' , 'Enrollment Completed');
            }
        }
        if($request->semester_id==2){
            $balance = $st->p2;
            $pays = Transaction::where('student_id', '=' , $request->student_id)->get()->all();
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
            $up->details = 'Semester Fees [Auto added]';
            $up->debit = $st->p2;
            $up->credit = '0';
            $up->payslip = NULL;
            $up->balance =  $balance;
            if($up->save()){
                return redirect()->back()->with('message' , 'Enrollment Completed');
            }
        }
        if($request->semester_id==3){
            $balance = $st->p3;
            $pays = Transaction::where('student_id', '=' , $request->student_id)->get()->all();
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
            $up->details = 'Semester Fees [Auto added]';
            $up->debit = $st->p3;
            $up->credit = '0';
            $up->payslip = NULL;
            $up->balance =  $balance;
            if($up->save()){
                return redirect()->back()->with('message' , 'Enrollment Completed');
            }
        }
        if($request->semester_id==4){
            $balance = $st->p4;
            $pays = Transaction::where('student_id', '=' , $request->student_id)->get()->all();
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
            $up->details = 'Semester Fees [Auto added]';
            $up->debit = $st->p4;
            $up->credit = '0';
            $up->payslip = NULL;
            $up->balance =  $balance;
            if($up->save()){
                return redirect()->back()->with('message' , 'Enrollment Completed');
            }
        }
        if($request->semester_id==5){
            $balance = $st->p5;
            $pays = Transaction::where('student_id', '=' , $request->student_id)->get()->all();
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
            $up->details = 'Semester Fees [Auto added]';
            $up->debit = $st->p5;
            $up->credit = '0';
            $up->payslip = NULL;
            $up->balance =  $balance;
            if($up->save()){
                return redirect()->back()->with('message' , 'Enrollment Completed');
            }
        }
        if($request->semester_id==6){
            $balance = $st->p6;
            $pays = Transaction::where('student_id', '=' , $request->student_id)->get()->all();
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
            $up->details = 'Semester Fees [Auto added]';
            $up->debit = $st->p6;
            $up->credit = '0';
            $up->payslip = NULL;
            $up->balance =  $balance;
            if($up->save()){
                return redirect()->back()->with('message' , 'Enrollment Completed');
            }
        }
        if($request->semester_id==7){
            $balance = $st->p7;
            $pays = Transaction::where('student_id', '=' , $request->student_id)->get()->all();
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
            $up->details = 'Semester Fees [Auto added]';
            $up->debit = $st->p7;
            $up->credit = '0';
            $up->payslip = NULL;
            $up->balance =  $balance;
            if($up->save()){
                return redirect()->back()->with('message' , 'Enrollment Completed');
            }
        }
        if($request->semester_id==8){
            $balance = $st->p8;
            $pays = Transaction::where('student_id', '=' , $request->student_id)->get()->all();
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
            $up->details = 'Semester Fees [Auto added]';
            $up->debit = $st->p8;
            $up->credit = '0';
            $up->payslip = NULL;
            $up->balance =  $balance;
            if($up->save()){
                return redirect()->back()->with('message' , 'Enrollment Completed');
            }
        }
       



       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function auto(Request $request){
        
        
 

        foreach($request->active as $act )
        { 
            $up = DB::table('statuses')
            ->where('student_id' , $act)
            ->update([
                'semester_id' => '1',
                'session_id' => '1',

        ]);
        }
        

    }
}
