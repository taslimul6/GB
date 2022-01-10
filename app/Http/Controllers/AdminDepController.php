<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Dpay;

class AdminDepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $src = request('src');

        $all = Department::Where('name' , 'like' , '%'.$src.'%')
        ->orWhere('course_name' , 'like' , '%'.$src.'%')
        ->orwhere('id' , 'like' , '%'.$src.'%')
        
        ->get();

        return view('admin.department-list',[
            'all' => $all,
            'src' => $src,
            'i'=>$i=1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        if(request('next')){
        $dept = request()->all();
        $name = request()->name;
        $course = request()->course_name;

        
        $test = Department::create($dept);

        for ($x = 1; $x = 8; $x++) {

            $dpay = new Dpay;
            $dpay-> department_id = $test->id;
            $dpay-> semester_id = $x;
          }
        

        
        return view('admin.department-create' , [
            'next' => $test,
            'name' => $name,
            'course' => $course,
        ]);

        }else{
            $next= null;
            return view('admin.department-create' , [
                'next' => $next,
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dept = $request->all();
        $test = Department::create($dept);

        
        return back()->withMessage('Department Created Successfully');
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
        $test = Department::find($id);
        $test->delete();
        return back()->withMessage('Department Deleted Successfully');
    }
}
