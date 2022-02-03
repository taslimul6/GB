<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Student;
use App\Models\User;
use App\Models\Status;
use App\Models\Department;
use App\Models\Session;


class StudentProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $data = Student::firstWhere('user_id' , '=' , Auth::user()->id );
        $status = Status::firstWhere('student_id' , '=' , Auth::user()->student_id );


        
        return view('student.profile' , compact('data' , 'status'));
 
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    {   $student = Student::firstWhere('user_id' , '=' , $id);
        $deps = Department::all();
        $sess = Session::all();
        return view('student.profile-edit' , compact('student' , 'deps' , 'sess'));
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
        if($request->up ==1){

            $student_info=$request->validate([
                'full_name'=> 'max:200',
                'present_address'=> 'nullable|max:200',
                'permanent_address'=> 'max:200',
                'phone'=> 'max:200',
                'gender'=> 'max:200',
                'blood'=> 'nullable|max:200',
                'nationality'=> 'max:200',
                'religion'=> 'max:200',
                'fathers_name'=> 'max:200',
                'fathers_contact'=> 'max:200',
                'mothers_name'=> 'max:200',
                'mothers_contact'=> 'nullable|max:200',
                'emergency_c_name'=> 'max:200',
                'emergency_number'=> 'max:200',
                'emergency_address'=> 'nullable|max:200',
                'dob' => 'nullable'
    
    
            ]);
    
            Student::where('user_id' , '=' , $id )-> Update($student_info);
            User::where('id' , '=' , $id )-> Update([
                'name' => $request->full_name
            ]);
    
            return redirect()->back()->with('message' , 'Profile Updated Successfully');
        }
        if($request->e ==1){

            $student_info=$request->validate([
                'email'=> 'nullable'
            ]);
            Student::where('user_id' , '=' , $id )-> Update($student_info);
            User::where('id' , '=' , $id )-> Update($student_info);

            return redirect()->back()->with('message' , 'Email Address Updated Successfully');

        }
        if($request->pass == 1){
            $pass =  User::firstWhere('id' , '=' , $id );

            
                if($request->new==$request->new1){

                    User::where('id' , '=' , $id )-> Update([
                        'password' => bcrypt($request->new)
                    ]);
                    return redirect()->back()->with('message' , 'Password Changed');
                }else{
                    return redirect()->back()->with('emessage' , 'Password does not matched');
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
        //
    }
}
