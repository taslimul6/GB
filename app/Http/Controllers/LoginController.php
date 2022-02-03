<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Pin;

class LoginController extends Controller
{

    public function admin(Request $request){

        $val=$request->validate([
            'member_id' => 'required| exists:users,member_id',
            'password' =>'required',
        ]);
        $pin = Pin::first();

        if($request->pin == $pin->pin){
            if(Auth::attempt(['member_id' => $request->member_id, 'password' => $request->password])){
                return redirect()->route('admin');
            }
            else{
                return redirect()->route('ad.login')->with('message' , 'Wrong Password! Contact Adminstration For resting password');
            }
        }else{
            return redirect()->route('ad.login')->with('message' , 'Wrong Pin! Contact Adminstration For Pin ');
        }
           
    }

    
    Public function adLogout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('ad.login');

    }





    public function stLogin(Request $request){

        $val=$request->validate([
            'student_id' => 'required| exists:users,student_id',
            'password' =>'required',
        ]);
        if(Auth::attempt(['student_id' => $request->student_id, 'password' => $request->password])){
            return redirect()->route('st.index');
        }
        else{
            return redirect()->route('stuLogin')->with('message' , 'Wrong Password! Contact Adminstration For resting password');
        }

    }




    Public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');

    }

    public function entry(Request $request){

        $val=$request->validate([
            'member_id' => 'required| exists:users,member_id',
            'password' =>'required',
        ]);
        $pin = Pin::first();

        if($request->pin == $pin->pin){
            if(Auth::attempt(['member_id' => $request->member_id, 'password' => $request->password])){
                return redirect()->route('en.index');
            }
            else{
                return redirect()->route('en.login')->with('message' , 'Wrong Password! Contact Adminstration For resting password');
            }
        }else{
            return redirect()->route('en.login')->with('message' , 'Wrong Pin! Contact Adminstration For Pin ');
        }
           
    }

    
    Public function enLogout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('en.login');

    }

    public function officer(Request $request){

        $val=$request->validate([
            'member_id' => 'required| exists:users,member_id',
            'password' =>'required',
        ]);
        $pin = Pin::first();

        if($request->pin == $pin->pin){
            if(Auth::attempt(['member_id' => $request->member_id, 'password' => $request->password])){
                return redirect()->route('of.index');
            }
            else{
                return redirect()->route('of.login')->with('message' , 'Wrong Password! Contact Adminstration For resting password');
            }
        }else{
            return redirect()->route('of.login')->with('message' , 'Wrong Pin! Contact Adminstration For Pin ');
        }
           
    }

    
    Public function ofLogout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('of.login');

    }

    public function viewer(Request $request){

        $val=$request->validate([
            'member_id' => 'required| exists:users,member_id',
            'password' =>'required',
        ]);
        $pin = Pin::first();

        if($request->pin == $pin->pin){
            if(Auth::attempt(['member_id' => $request->member_id, 'password' => $request->password])){
                return redirect()->route('vw.index');
            }
            else{
                return redirect()->route('vw.login')->with('message' , 'Wrong Password! Contact Adminstration For resting password');
            }
        }else{
            return redirect()->route('vw.login')->with('message' , 'Wrong Pin! Contact Adminstration For Pin ');
        }
           
    }

    
    Public function vwLogout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('vw.login');

    }




    
}
