<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LawyerProfileController extends Controller
{

	public function login()
	{
		return view('lawyer_profile/lawyer_login');
	}

	public function lawyer_profile()
	{
        // $lawyer_data=DB::select("select * from register_lawyer where id='$id'");
		return view('lawyer_profile/lawyer_profile');
	}

    public function lawyer_login(Request $req)
    {
    	$user_name=$req->input('user_name');
    	$password=$req->input('password');
    	$publication_status="1";

    	$select=DB::select("select * from register_lawyer where user_name='$user_name' and password='$password' and publication_status='$publication_status'");

    	if($select)
    	{
    		return view('lawyer_profile/lawyer_profile')->with("data",$select);
    	}
    	else
		{
			return view('lawyer_profile/lawyer_login')->with('message',"Invalid User Name or Password");
    	}
    
            
    } 
    public function lawyer_update(Request $req)
    {
        $id=$req->input('id');
        $lawyer_name=$req->input('lawyer_name');
        $father_name=$req->input('father_name');
        $cnic=$req->input('cnic');
        $mobile_number=$req->input('lawyer_name');
        $address=$req->input('address');
        $qualification=$req->input('qualification');
        $court=$req->input('lawyer_name');
        $user_name=$req->input('user_name');


        // echo $id;

        $update=DB::update("update register_lawyer SET lawyer_name='$lawyer_name',father_name='$father_name',cnic='$cnic',mobile_number='$mobile_number',address='$address',qualification='$qualification',court='$court',user_name='$user_name' where id='$id'");

       // echo "updated";
        
    }   
    public function add_case(Request $req)
    {
        $id=$req->input('id1');
        $description=$req->input('description');
        $category=$req->input('category');

        $insert=DB::insert("insert into cases values(?,?,?,?)",[null,$id,$category,$description]);

        
    }
    public function register()
    {
       return view('lawyer_profile/lawyer_register_form');
    }
    public function save_register(Request $req)
    {
        $lawyer_name=$req->input('lawyer_name');
        $father_name=$req->input('father_name');
        $cnic=$req->input('cnic');
        $mobile_number=$req->input('mobile_number');
        $address=$req->input('address');
        $qualification=$req->input('qualification');
        $court=$req->input('court');
        $user_name=$req->input('user_name');
        $password=$req->input('password');

        $insert=DB::insert('insert into register_lawyer values(?,?,?,?,?,?,?,?,?,?,?,?,?)',[null,$lawyer_name,$father_name,$cnic,$mobile_number,$address,$qualification,$court,"0",null,$user_name,$password,null]);

        return redirect('/login');  
    }
}
