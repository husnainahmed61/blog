<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $name = "husnain ahmed"; 
        return view('welcome')->with('name',$name);
    }

    public function userdata(Request $request)
    {
        $data = $request->all();
        if(!empty($data)){
            DB::table('users')->insert([
                'name' => $data['name'] ,
                'email' => $data['email'] ,
                'mobile' => $data['mobile']]);
        }
        else
        {
            return redirect()->back();
        }
    }
}
