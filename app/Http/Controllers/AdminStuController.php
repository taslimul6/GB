<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Department;
use App\Models\Session;
use App\Models\Status;
use App\Models\Dpay;
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
            'sess'=> $sess,
            
            
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
            'email' => 'required|unique:users|email',
            // 'dob' => 'required|date|date_format:Y-m-d'


        ]);
        $val= $request->validate([
            'student_id'=> 'required|integer|unique:users',
            
            'password' => 'required|min:8'
            
        ]);

        $cred = new User;
        $cred ->name = $request->full_name;
        $cred ->email = $request->email;
        $cred ->password = bcrypt($request->password);
        $cred-> student_id = $request->student_id;
        $cred->save();



        Student::Create($student_info);



        // adding curent tution fees on student profile at status table.
        $department_id = $request->department_id;
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

        
    

        $tution = new Status;
        $tution-> student_id = $request->student_id;
        $tution-> department_id = $request->department_id;
        $tution-> p1 = $sem1-> amount;
        $tution-> p2 = $sem2-> amount;
        $tution-> p3 = $sem3-> amount;
        $tution-> p4 = $sem4-> amount;
        $tution-> p5 = $sem5-> amount;
        $tution-> p6 = $sem6-> amount;
        $tution-> p7 = $sem7-> amount;
        $tution-> p8 = $sem8-> amount;
       
       
        $tution-> save();


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
        $status = Status::where('student_id' , '=' , $id)->first();
        return view('admin.student-show' , [
            'data' => $user,
            'status' => $status,
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
