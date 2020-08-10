<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApproveController extends Controller
{
    public function approve(Request $request){
        
        return view('verify')->with('mail', $request->email); 
    }
}
