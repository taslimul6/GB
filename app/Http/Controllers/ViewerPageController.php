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
use App\Models\Admin;
use App\Models\User;



class ViewerPageController extends Controller
{
    public function index(){
        $all = Student::orderBy('id', 'DESC')->paginate(10);
        $pays = Transaction::orderBy('id', 'DESC')->paginate(5);

        $opays = Onlinepayment::where('state' , '=' , '1')->paginate(5);


        $deps =count(Department::all()) ;
        $tst = count(Student::all()) ;
        $ats = count(Transaction::all()) ;




       
        return view('viewer.index' , compact('all' , 'pays' , 'deps' , 'tst' , 'ats' , 'opays'));
    }
    public function adList()
    {   
        $src = null;

        $all = Admin::all();

        return view('viewer.member-list' , compact('src' , 'all'));
    }


    public function stcreate()
    {
        $deps = Department::all();
        $sess = Session::all();

    
        return view('viewer.student-create', [
            'deps'=> $deps,
            'sess'=> $sess,
            
            
        ]);
    }
    public function ststore(Request $request)
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
            'dob' => 'required|date|date_format:Y-m-d',
            'admission_date' =>'nullable',
            'ad_session'=>'nullable'
            


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
            $cred->role = 'student';
            $cred->save();

        

        Student::Create($student_info);
        Student::where('student_id' ,'=' , $request->student_id)->Update([
            'user_id' => $cred->id
        ]);



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

    public function stlist()
    {   
        $src = request('student_list');

        $all = Student::Where('full_name' , 'like' , '%'.$src.'%')
        ->orWhere('student_id' , 'like' , '%'.$src.'%')
        ->orwhere('exam_roll' , 'like' , '%'.$src.'%')
        ->orwhere('phone' , 'like' , '%'.$src.'%')
        ->get();

        return view('viewer.student-list',[
            'all' => $all,
            'src' => $src 
        ]);
    }
    public function stshow($id)
    {

        $user = Student::where('id' , '=' , $id)->first();
        $status = Status::where('student_id' , '=' , $user->student_id)->first();
        return view('viewer.student-show' , [
            'data' => $user,
            'status' => $status,
        ]);
    }
    public function stedit($id)
    {
        $deps = Department::all();
        $sess = Session::all();

        $student = Student::where('id' , '=' , $id)->get()->first();





        return view('viewer.student-edit' , compact('deps' , 'sess' , 'student'));
    }
    public function stupdate(Request $request, $id)
    {
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
            
            'batch'=> 'integer',
            'class_roll'=> 'integer',
            'exam_roll'=> 'integer',
            'department_id'=> 'integer',
            'email' => 'email',
            // 'dob' => 'required'


        ]);
       
        $std = Student::firstWhere('id' , '=' , $id );
        User::where('student_id' ,'=' , $std->student_id)->Update([
            'email' => $request->email,
            'name' =>$request->full_name,
            'password' => bcrypt($request->password)
        ]);

        Student::where('id' , '=' , $id )-> Update($student_info);

        return redirect()->back()->with('message' , 'Student Updated Successfully');
    }

    public function ststatus(Request $request){
        //Auto Enrollment Page
        $all = Department::all();
        $sess = Session::all();
        $department_id = request('department_id');
        $session_id = request('session_id');
        $semester_id = request('semester_id');

        if(request('next')==1){
            $val=$request->validate([
                'department_id'=>'required|exists:statuses,department_id',
                'session_id'=>'required|exists:statuses,session_id',
                'semester_id'=>'required|exists:statuses,semester_id',
            ]);
            $status = status::where([
                ['department_id' ,'=' , $department_id],
                ['session_id' ,'=' , $session_id],
                ['semester_id' ,'=' , $semester_id],
            ])->get();
            
            return view('viewer.student-status' , compact('all' , 'department_id' , 'sess' , 'session_id' ,'status'));

        }else{
            return view('viewer.student-status' , compact('all' , 'department_id' , 'sess' , 'session_id' ));
        }

    }
    public function deplist()
    {
        $src = null;

        $all = Department::Where('name' , 'like' , '%'.$src.'%')
        ->orWhere('course_name' , 'like' , '%'.$src.'%')
        ->orwhere('id' , 'like' , '%'.$src.'%')
        
        ->get();

        return view('viewer.department-list',[
            'all' => $all,
            
            'i'=>$i=1
        ]);
    }
    public function seslist()
    {
        $src =null;

        $all = Session::Where('title' , 'like' , '%'.$src.'%')
        
        
        ->get();

        return view('viewer.session-list',[
            'all' => $all,
           
            'i'=>$i=1
        ]);
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
           
            
            return view('viewer.payment-due' , compact('all' , 'department_id' , 'sess' , 'session_id' ,'status' ));

        }
     
        else{
            return view('viewer.payment-due' , compact('all' , 'department_id' , 'sess' , 'session_id' ));
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

            return view('viewer.pr-advance' , [
                
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
            
            return view('viewer.pr-advance' , [
                
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
           
            
            return view('viewer.pr-advance' , [
                
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

            return view('viewer.pr-advance' , [
                
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
            return view('viewer.pr-advance' , [
                
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
            return view('viewer.pr-advance' , [
                
                'pays' => $pays,
                'i' => $i=1,
                'dsum'=>$dsum,
                'csum'=>$csum,
                'all'=>$all
               
            ]);

        }
        else{

            $all = Session::all();
            return view('viewer.pr-advance' , [
                'all'=>$all
            ]);
        }
    }
    public function inD(){
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
            
            
            return view('viewer.payment-single' , [
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
            return view('viewer.payment-single' , [
                
            ]);
        }
    }




















}