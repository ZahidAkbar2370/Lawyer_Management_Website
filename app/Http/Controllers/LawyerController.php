<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LawyerController extends Controller
{
    public function view_lawyer()
    {
    	$data=DB::select('select * from register_lawyer');
    	return view('admin/lawyer/view_lawyer')->with('data',$data);
    }
    public function delete_lawyer($id)
    {
    	$delete=DB::delete("delete from  register_lawyer where id='$id'");
    	 return redirect('/view-lawyer');
    }
    public function edit_lawyer($id)
    {
    	$edit=DB::select("select * from register_lawyer where id='$id'");
    	return view('admin/lawyer/edit_lawyer')->with('data',$edit);
    }
    public function approve_lawyer($id)
    {
    	$approve_lawyer=DB::update("update register_lawyer SET publication_status='1' where id='$id'");
    		return redirect('/view-lawyer');
    }
    public function unapprove_lawyer($id)
    {
    	$approve_lawyer=DB::update("update register_lawyer SET publication_status='0' where id='$id'");
    		return redirect('/view-lawyer');
    
    }
    public function add_lawyer()
    {
        return view('admin/lawyer/add_lawyer');
    }
    public function save_lawyer(Request $req)
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

        return redirect('/view-lawyer');
    }
    public function update_lawyer(Request $req,$id)
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

        $update=DB::update("update register_lawyer SET lawyer_name='$lawyer_name',father_name='$father_name',cnic='$cnic',mobile_number='$mobile_number',address='$address',qualification='$qualification',court='$court',user_name='$user_name',password='$password' where id='$id'");
        return redirect('/view-lawyer');
    }
}
