<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


     /**
     * Change hired status
     *
     * @return void
     */
    public function status($id){

       $result= Applicant::where('id', $id)
       ->update(['hired' => 1]);
       $data = Applicant::all();
       if($result){
        return redirect('home');
    }

    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allApplicants = Applicant::all();
        return view('home')->with('data', $allApplicants);
    }
}
