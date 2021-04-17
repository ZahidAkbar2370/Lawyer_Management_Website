<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ClientProfileController extends Controller
{
//Client login form
	public function login()
	{
		return view('client/client_login');
	}
//Client login checking    
    public function client_login(Request $req)
    {
        $user_name=$req->input('user_name');
        $password=$req->input('password');
        $publication_status="1";

        $select=DB::select("select * from register_client where user_name='$user_name' and password='$password' and publication_status='$publication_status'");

        if($select)
        {
            $session=session()->put('client_login_id',$select[0]->id);
            // return view('lawyer_profile/lawyer_profile')->with("data",$select);
            return redirect('client-profile')->with("data",$select);
        }
        else
        {
            return view('lawyer_profile/lawyer_login')->with('message',"Invalid User Name or Password");
        }
    }

// lawyer open profile after login    
	public function client_profile()
	{
        $getSession=session()->get('client_login_id',['id']);
        $client_data=DB::select("select * from register_client where id='$getSession'");

		return view('client/profile/client_profile')->with('data',$client_data);
	}
// lawyer update profile
    public function client_update(Request $req)
    {
    	$id=$req->input('id');
        $client_name=$req->input('client_name');
        $father_name=$req->input('father_name');
        $cnic=$req->input('cnic');
        $mobile_number=$req->input('mobile_number');
        $address=$req->input('address');
        $email=$req->input('email');
        $user_name=$req->input('user_name');
        $password=$req->input('password');


        $update=DB::update("update register_client SET client_name='$client_name',father_name='$father_name',cnic='$cnic',mobile_number='$mobile_number',address='$address',email='$email',user_name='$user_name' where id='$id'");

        return redirect('client-profile');
        
    } 


//Client Add Meeting Form
	public function add_meeting()
	    {
			return view('client/meeting/add_meeting');
	    }  
//Client Save Meeting 
	public function save_meeting(Request $req)
	    {
	    	$client_id=session()->get('client_login_id',['id']);
	    	$lawyer_id=$req->input('lawyer_id');
	    	$meeting_date=$req->input('meeting_date');
	    	$meeting_time=$req->input('meeting_time');

	    	$insert=DB::insert('insert into client_meeting values(?,?,?,?,?,?,?,?,?)',[null,$client_id,$lawyer_id,$meeting_date,$meeting_time,"sent","pending",null,null]);

			return redirect('/view-meeting');
	    } 	    
//Client View Meeting
	public function view_meeting()
	    {
	    	$getSession=session()->get('client_login_id',['id']);
        	$meeting_data=DB::select("select * from client_meeting where client_id='$getSession'");

		return view('client/meeting/view_meeting')->with('data',$meeting_data);
	    } 

// Client Delete Meeting
	    public function delete_meeting($id)
	    {
	    	$delete=DB::delete("delete from client_meeting where id='$id'");
    		 return redirect('/view-meeting');
	    }

//Client Add Fee Form
	public function add_fee()
	    {
			return view('client/fee/add_fee');
	    }  
//Client Save Meeting 
	public function save_fee(Request $req)
	    {
	    	$client_id=session()->get('client_login_id',['id']);
	    	$lawyer_id=$req->input('lawyer_id');
	    	$amount=$req->input('amount');
	    	$description=$req->input('description');

	    	$insert=DB::insert('insert into client_fee values(?,?,?,?,?,?,?,?)',[null,$client_id,$lawyer_id,$amount,$description,"paid",null,null]);

			return redirect('/view-fee');
	    } 	    
//Client View Meeting
	public function view_fee()
	    {
	    	$getSession=session()->get('client_login_id',['id']);
        	$fee_data=DB::select("select * from client_fee where client_id='$getSession'");

		return view('client/fee/view_fee')->with('data',$fee_data);
	    } 


// Client Search Lawyer
	    public function client_search_lawyer()
	    {
	    	$data=DB::select('select * from register_lawyer');
    		return view('client/search_lawyer/search_lawyer')->with('data',$data);
	    }


// Client Request To admin Change Lawyer
		public function view_change_lawyer ()
		{
			$getSession=session()->get('client_login_id',['id']);
			$data=DB::select("select * from client_request where client_id='$getSession'");
    		return view('client/change_lawyer/view_requests_change_lawyer')->with('data',$data);
		}
		public function delete_request($id)
		{
			 $delete=DB::delete("delete from client_request where id='$id'");
    		 return redirect('/view-client-change-lawyer');	
		}
		public function add_change_lawyer_request()
		{
			return view('/client/change_lawyer/request_change_lawyer');
		}
		public function change_lawyer(Request $req)
		{
			$client_id=session()->get('client_login_id',['id']);
			$message=$req->input('message');

			$insert=DB::insert("insert into client_request values(?,?,?,?)",[null,$client_id,$message,"0"]);

			return redirect('/view-client-change-lawyer');
		}	 


		 public function view_document()
    {
         $getSession=session()->get('client_login_id',['id']);

        $all_document=DB::select("select * from document where client_id='$getSession'");
       return view('client/documents/view_document')->with('all_document',$all_document);
    }   

     public function view_notification()
    {
         $getSession=session()->get('client_login_id',['id']);

        $all_notification=DB::select("select * from client_meeting where client_id='$getSession'");
       return view('client/view_notification')->with('all_notification',$all_notification);
    }   

}
