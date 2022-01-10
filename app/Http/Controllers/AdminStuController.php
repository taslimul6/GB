<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Department;
use App\Models\Session;
use App\Models\Status;
use Illuminate\Pagination;

class AdminStuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $src = request('student_list');

        $all = Student::Where('full_name' , 'like' , '%'.$src.'%')
        ->orWhere('student_id' , 'like' , '%'.$src.'%')
        ->orwhere('exam_roll' , 'like' , '%'.$src.'%')
        ->orwhere('phone' , 'like' , '%'.$src.'%')
        ->get();

        return view('admin.student-list',[
            'all' => $all,
            'src' => $src
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deps = Department::all();
        $sess = Session::all();


        // 


        return view('admin.student-create', [
            'deps'=> $deps,
            'sess'=> $sess
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $student_info=$request->validate([
            'full_name'=> 'required|max:200',
            'present_address'=> 'nullable|max:200',
            'permanent_address'=> 'required|max:200',
            'phone'=> 'required|max:200',
            'gender'=> 'required|max:200',
            'blood'=> 'nullable|max:200',
            'nationality'=> 'required|max:200',
            'religion'=> 'required|max:200',
            'fathers_name'=> 'required|max:200',
            'fathers_contact'=> 'required|max:200',
            'mothers_name'=> 'required|max:200',
            'mothers_contact'=> 'nullable|max:200',
            'emergency_c_name'=> 'required|max:200',
            'emergency_number'=> 'required|max:200',
            'emergency_address'=> 'nullable|max:200',
            'student_id'=> 'required|integer',
            'batch'=> 'required|integer',
            'class_roll'=> 'required|integer',
            'exam_roll'=> 'required|integer',
            'department_id'=> 'required|integer',
            // 'dob' => 'required|date|date_format:Y-m-d'


        ]);
        $val= $request->validate([
            'student_id'=> 'required|integer|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8'
            
        ]);

        $cred = new User;
        $cred ->name = $request->full_name;
        $cred ->email = $request->email;
        $cred ->password = bcrypt($request->password);
        $cred-> student_id = $request->student_id;
        $cred->save();



        Student::Create($student_info);

        $status = new Status;
        $status-> student_id = $request->student_id;
        $status->save();


       return redirect()->back()->withMessage('Student Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user = Student::where('id' , '=' , $id)->first();
        return view('admin.student-show' , [
            'data' => $user
        ]);
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
