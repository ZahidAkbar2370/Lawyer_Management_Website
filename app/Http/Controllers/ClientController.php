<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ClientController extends Controller
{
//view all clients    
    public function view_client()
    {
    	$data=DB::select('select * from register_client');
    	return view('admin/client/view_client')->with('data',$data);
    }
//add new client    
    public function add_client()
    {
        return view('admin/client/add_client');
    }
//save new client data    
    public function save_client(Request $req)
    {
        $client_name=$req->input('client_name');
        $father_name=$req->input('father_name');
        $cnic=$req->input('cnic');
        $mobile_number=$req->input('mobile_number');
        $address=$req->input('address');
        $email=$req->input('email');
        $user_name=$req->input('user_name');
        $password=$req->input('password');

        $insert=DB::insert('insert into register_client values(?,?,?,?,?,?,?,?,?,?,?,?)',[null,$client_name,$father_name,$cnic,$mobile_number,$email,$address,$user_name,$password,"0",null,null]);

        return redirect('/view-client');
    }
//delete selected client    
    public function delete_client($id)
    {
    	$delete=DB::delete("delete from  register_client where id='$id'");
    	 return redirect('/view-client');
    }
//edit selected client    
    public function edit_client($id)
    {
    	$edit=DB::select("select * from register_client where id='$id'");
    	return view('admin/client/edit_client')->with('data',$edit);
    }
//updated selected data    
    public function update_client(Request $req,$id)
    {
       $client_name=$req->input('client_name');
        $father_name=$req->input('father_name');
        $cnic=$req->input('cnic');
        $mobile_number=$req->input('mobile_number');
        $address=$req->input('address');
        $email=$req->input('email');
        $user_name=$req->input('user_name');
        $password=$req->input('password');

        $update=DB::update("update register_client SET client_name='$client_name',father_name='$father_name',cnic='$cnic',mobile_number='$mobile_number',address='$address',email='$email' where id='$id'");

        return redirect('/view-client');
    }


    public function approve_client($id)
    {
        $approve_lawyer=DB::update("update register_client SET publication_status='1' where id='$id'");
            return redirect('/view-client');
    }
    public function unapprove_client($id)
    {
        $approve_lawyer=DB::update("update register_client SET publication_status='0' where id='$id'");
            return redirect('/view-client');
    
    }


//register  client   
    public function register()
    {
       return view('client/register');
    }
//save data from register
    public function save_register(Request $req)
    {
        $client_name=$req->input('client_name');
        $father_name=$req->input('father_name');
        $cnic=$req->input('cnic');
        $mobile_number=$req->input('mobile_number');
        $address=$req->input('address');
        $email=$req->input('email');
        $user_name=$req->input('user_name');
        $password=$req->input('password');

        $insert=DB::insert('insert into register_client values(?,?,?,?,?,?,?,?,?,?,?,?)',[null,$client_name,$father_name,$cnic,$mobile_number,$email,$address,$user_name,$password,"0",null,null]);

        return redirect('/client-login');  
    }
}
