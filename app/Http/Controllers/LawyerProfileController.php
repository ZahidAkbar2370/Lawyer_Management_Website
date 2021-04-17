<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LawyerProfileController extends Controller
{
    // register lawyer
    //login lawyer
    //change profile
    //add case

//register lawyer    
    public function register()
    {
       return view('lawyer_profile/lawyer_register_form');
    }
// store data of register lawyer    
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

        return redirect('/lawyer-login');  
    }


//lawyer login form
	public function login()
	{
		return view('lawyer_profile/lawyer_login');
	}
//lawyer login checking    
    public function lawyer_login(Request $req)
    {
        $user_name=$req->input('user_name');
        $password=$req->input('password');
        $publication_status="1";

        $select=DB::select("select * from register_lawyer where user_name='$user_name' and password='$password' and publication_status='$publication_status'");

        if($select)
        {
            $session=session()->put('login_id',$select[0]->id);
            // return view('lawyer_profile/lawyer_profile')->with("data",$select);
            return redirect('lawyer-profile')->with("data",$select);
        }
        else
        {
            return view('lawyer_profile/lawyer_login')->with('message',"Invalid User Name or Password");
        }
    }



// lawyer open profile after login    
	public function lawyer_profile()
	{
        $getSession=session()->get('login_id',['id']);
        $lawyer_data=DB::select("select * from register_lawyer where id='$getSession'");

		return view('lawyer_profile/lawyer_profile')->with('data',$lawyer_data);
	}
// lawyer update profile
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


        $update=DB::update("update register_lawyer SET lawyer_name='$lawyer_name',father_name='$father_name',cnic='$cnic',mobile_number='$mobile_number',address='$address',qualification='$qualification',court='$court',user_name='$user_name' where id='$id'");

        return redirect('lawyer-profile');
        
    } 



    
// lawyer open add case form
    public function add_case()
    {
        return view('lawyer_profile/case/add_case');
    }
// lawyer save case of login lawyer    
    public function save_case(Request $req)
    {
        $id=session()->get('login_id',['id']);
        $description=$req->input('description');
        $category=$req->input('category');

        $insert=DB::insert("insert into cases values(?,?,?,?)",[null,$id,$category,$description]);

        return redirect('lawyer-profile');
    }


//Lawyer Meeting
    public function lawyer_meeting()
        {
            $getSession=session()->get('login_id',['id']);
            $meeting_data=DB::select("select * from client_meeting where lawyer_id='$getSession'");
            // dd($getSession);
            return view('lawyer_profile/meeting/meeting')->with('data',$meeting_data);
        } 
    public function accept_meeting($id)
        {
            $update=DB::update("UPDATE client_meeting SET status='1' where id='$id'");

            return redirect('lawyer-meeting');   
        }
    public function reject_meeting($id)
        {
            $update=DB::update("UPDATE client_meeting SET status='0' where id='$id'");

            return redirect('lawyer-meeting');   
        } 


//Lawyer Payment
    public function lawyer_payment()
        {
            $getSession=session()->get('login_id',['id']);
            $payment_data=DB::select("select * from client_fee where lawyer_id='$getSession'");
            // dd($getSession);
            return view('lawyer_profile/payment/view_payment')->with('data',$payment_data);         
        } 

        public function add_document()
        {
            return view('lawyer_profile/documents/add_document');
        } 

        public function save_document(Request $request)
        {
            $client_id=$request->input('client_id');
            $document=$request->input('document');
            $lawyer_id=session()->get('login_id',['id']);

          if($request->hasFile("document"))
        {
            // Upload thumbnail into server
             $document=$request->file("document");
             $document->move("documents",$document->getClientOriginalName());
        }
            $insert=DB::insert('insert into document values(?,?,?,?)',[null,$lawyer_id,$client_id,$document->getClientOriginalName()]);

            return redirect('/lawyer-add-document');
        } 

        public function view_document()
    {
         $getSession=session()->get('login_id',['id']);
        $all_document=DB::select("select * from document where lawyer_id='$getSession'");
       return view('lawyer_profile/documents/view_document')->with('all_document',$all_document);
    }

    public function delete_document($id)
    {
        $delete=DB::delete("delete from  document where id='$id'");
         return redirect('/lawyer-view-document');
    }            

}
