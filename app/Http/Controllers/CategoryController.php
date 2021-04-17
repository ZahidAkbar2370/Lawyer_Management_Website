<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CategoryController extends Controller
{
    public function view_category()
    {
    	$data=DB::select('select * from category');
    	return view('admin/category/view_category')->with('data',$data);
    }
    public function delete_category($id)
    {
    	$delete=DB::delete("delete from  category where id='$id'");
    	 return redirect('/view-category');
    }
    public function edit_category($id)
    {
    	$edit=DB::select("select * from category where id='$id'");
    	return view('admin/category/edit_category')->with('data',$edit);
    }
    public function update_category(Request $req,$id)
    {
        $category_name=$req->input('category_name');
    	$update=DB::update("update category SET category_name='$category_name' where id='$id'");
    	return redirect('/view-category');
    }

     public function add_category()
    {
        return view('admin/category/add_category');
    }
    public function save_category(Request $req)
    {
        
        $category_name=$req->input('category_name');
        $category_regin=$req->input('category_regin');
        $select=DB::select("select * from category where category_name='$category_name'");
        if($select)
        {
            echo "<script>alert('Already Exit')</script>";
            return view('/admin/category/add_category');
        }
        else
        {
            $insert=DB::insert('insert into category values(?,?,?)',[null,$category_name,$category_regin]);

            return redirect('/view-category');
        }
        
    }
}
