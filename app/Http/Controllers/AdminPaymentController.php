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
          
            $dsum = 0;
            $csum = 0;
            foreach($pays as $pay)
            {
            $dsum+= $pay->debit;
            $csum+= $pay->credit;
            }

            return view('admin.payment-entry' , [
                'data' => $user,
                'sems' => $sems,
                'sess' => $sess,
                'pays' => $pays,
                'status'=>$status,
                'i' => $i=1,
                'dsum'=>$dsum,
                'csum'=>$csum,
                
               

            ]);

        }
        else{
            return view('admin.payment-entry' , [
                'dsum'=>0,
                'csum'=>0,
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




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
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
 
}
