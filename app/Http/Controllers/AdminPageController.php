<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
   
    public function due()
    { 
        $src = null;
        return view('admin.payment-due' , [
            'src' => $src
        ]);
       
    }
}
