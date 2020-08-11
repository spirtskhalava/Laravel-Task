<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

use Illuminate\Http\Request;

class ChangePass extends Controller
{
    public function approve(Request $request){
    
        
       $mail=$request->mail;
       $password=Hash::make($request->password);

       $validator = Validator::make($request->all(), [
           'password' => ['required','min:8', 'max:16'],
           'password_confirmation' => ['required', 'min:8','max:16'],
       ]);

       if ($validator->fails()) {
       echo "validation fails";
   }else{
       DB::table('users')
       ->where('email', $mail)
       ->update(['password' => $password]);
       DB::table('users')
       ->where('email', $mail)
       ->update(['verified' => 1]);

    }

    return redirect('home');
    }
}
