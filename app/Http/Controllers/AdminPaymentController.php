<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Semester;
use App\Models\Session;
use App\Models\Enrollment;
use App\Models\Status;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class AdminPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request('student_id')){
            $src = request()->validate([
                'student_id' => 'required|exists:students,student_id'
            ]);
            $user = Student::where('student_id' , '=' , $src)->get()->first();
            $sems = Semester::all();
            $sess = Session::all();
            $pays = Transaction::where('student_id', '=' , $src)->get()->all();
            $status = Status::where('student_id', '=' , $src)->get()->first();

            //adding payments of students
          
           

            // foreach($pays as $pay){
            //     $balance = $pay->debit ;
            // }

            
            return view('admin.payment-entry' , [
                'data' => $user,
                'sems' => $sems,
                'sess' => $sess,
                'pays' => $pays,
                'status'=>$status,
                'i' => $i=1,
                
               

            ]);

        }
        else{
            return view('admin.payment-entry' , [
                
            ]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
                return redirect()->back()->with('message' , 'Transaction Added');
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
            return redirect()->back()->with('message' , 'Transaction Added');
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
        
    }
 
}
