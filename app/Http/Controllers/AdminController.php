<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    public function login(Request $req)
    {
    	return view('admin.login');
    }
    public function show_dashboard()
    {
    	return view('admin.dashboard');
    }
    public function admin_login(Request $req)
    {
    	$user_name=$req->input('user_name');
    	$password=$req->input('password');

    	$select=DB::select("select * from admin_privacy where user_name='$user_name' and password='$password'");

    	if($select)
    	{
    		return redirect('/dashboard');
    	}
    	else
		{
			return view('admin/login')->with('message',"Invalid User Name or Password");
    	}
    	// echo $user_name."<br>".$password;
    }

    public function view_cases()
    {
        $select=DB::select('select * from cases');
        return view('case/view_cases')->with('data',$select);
    }
    public function delete_case($id)
    {
        $delete=DB::delete("delete from  cases where id='$id'");
         return redirect('/view-cases');
    }
}

