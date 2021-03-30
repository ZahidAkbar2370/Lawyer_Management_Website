<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ChangeLawyerRequestController extends Controller
{
    public function view_client_requests()
    {
    	$data=DB::select("select * from client_request");
    		return view('/admin/client_requests/view_client_requests')->with('data',$data);
    }
    public function accept_request($id)
        {
            
            $update=DB::update("UPDATE client_request SET status='1' where id='$id'");

            return redirect('view-client-requests');   
        }
    public function reject_request($id)
        {
            $update=DB::update("UPDATE client_request SET status='0' where id='$id'");

            return redirect('view-client-requests');   
        } 
}
