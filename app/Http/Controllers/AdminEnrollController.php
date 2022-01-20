<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Semester;
use App\Models\Session;
use App\Models\Enrollment;
use App\Models\Status;
use App\Models\Department;
use Illuminate\Support\Facades\DB;

class AdminEnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        if(request('student_id')){
            $src = request('student_id');
            $user = Student::where('student_id' , '=' , $src)->get()->first();
            $sems = Semester::all();
            $sess = Session::all();
            
            
            return view('admin.enrollment' , [
                'data' => $user,
                'sems' => $sems,
                'sess' => $sess,

            ]);

        }
        else{
            return view('admin.enrollment' , [
                
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
        //Auto Enrollment Page
        $all = Department::all();
        $sess = Session::all();
        $department_id = request('department_id');
        $session_id = request('session_id');
        $semester_id = request('semester_id');

        if(request('next')==1){
            $status = status::firstWhere([
                ['department_id' ,'=' , $department_id],
                ['session_id' ,'=' , $session_id],
                ['semester_id' ,'=' , $semester_id],
            ]);
            
            return view('admin.enrollment-auto' , compact('all' , 'department_id' , 'sess' , 'session_id' ,'status'));

        }else{
            return view('admin.enrollment-auto' , compact('all' , 'department_id' , 'sess' , 'session_id' ));
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
}
