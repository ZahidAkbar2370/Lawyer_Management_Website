<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CategoryController extends Controller
{
    public function view_category()
    {
    	$data=DB::select('select * from category');
    	return view('category/view_category')->with('data',$data);
    }
    public function delete_category($id)
    {
    	$delete=DB::delete("delete from  category where id='$id'");
    	 return redirect('/view-category');
    }
    public function edit_category($id)
    {
    	$edit=DB::select("select * from category where id='$id'");
    	return view('category/edit_category')->with('data',$edit);
    }
    public function update_category(Request $req,$id)
    {
        $category_name=$req->input('category_name');
    	$update=DB::update("update category SET category_name='$category_name' where id='$id'");
    	return redirect('/view-category');
    }

     public function add_category()
    {
        return view('category/add_category');
    }
    public function save_category(Request $req)
    {
        
        $category_name=$req->input('category_name');

        $insert=DB::insert('insert into category values(?,?)',[null,$category_name]);

        return redirect('/view-category');
    }
}
