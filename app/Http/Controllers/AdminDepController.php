<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

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
        return view('admin.department-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $dept = $request->all();
        $test = Department::create($dept);

        
        return back()->withMessage('Department Created Successfully');
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
        $test = Department::find($id);
        $test->delete();
        return back()->withMessage('Department Deleted Successfully');
    }
}
