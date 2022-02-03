<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;

class AdminMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $src = null;

        $all = Admin::all();

        return view('admin.member-list' , compact('src' , 'all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.member-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adinfo=$request->validate([
            'full_name'=> 'required|max:200',
            'present_address'=> 'nullable|max:200',
            'permanent_address'=> 'nullable|max:200',
            'phone'=> 'nullable|max:200',
            'gender'=> 'nullable|max:200',
            'blood'=> 'nullable|max:200',
            'nationality'=> 'nullable|max:200',
            'religion'=> 'nullable|max:200',
            
            'member_id'=> 'required|integer|unique:users',
            // 'dob' => 'nullable|date|date_format:Y-m-d'
            


        ]);
        $val= $request->validate([
            'member_id'=> 'required|integer|unique:users',
            'password' => 'required|min:8',
            'role' => 'required'
            
        ]);
            $cred = new User;
            $cred ->name = $request->full_name;
            $cred ->email = $request->email;
            $cred ->password = bcrypt($request->password);
            $cred-> member_id = $request->member_id;
            $cred->role = $request->role;
            $cred->save();

        

        Admin::Create($adinfo);
        Admin::where('member_id' ,'=' , $request->member_id)->Update([
            'user_id' => $cred->id
        ]);
        return redirect()->back()->withMessage('Admin Created Successfully');
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
        $admin = Admin::where('id' , '=' , $id)->get()->first();
        return view('admin.member-edit' , compact('admin'));
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
        $adinfo=$request->validate([
            'full_name'=> 'max:200',
            'present_address'=> 'nullable|max:200',
            'permanent_address'=> 'max:200',
            'phone'=> 'max:200',
            'gender'=> 'max:200',
            'blood'=> 'nullable|max:200',
            'nationality'=> 'max:200',
            'religion'=> 'max:200',
            'designation'=> 'max:200',
            'member_id'=> 'max:200',
           
            
            // 'dob' => 'required'


        ]);
        $ad=$request->validate([
            'password'=> 'min:8'
        ]);

        User::where('member_id' ,'=' , $request->member_id)->Update([
            'name' => $request->full_name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        Admin::where('id' , '=' , $id )-> Update($adinfo);

        return redirect()->back()->with('message' , 'Admin Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $dlt = Admin::where('id' , '=' , $id)->get()->first();
            User::where('id' , '=' , $dlt->user_id)->delete();
            Admin::where('id' , '=' , $id)->delete();
            return redirect()->back()->with('message' , 'Admin Deleted ');
    }
}
