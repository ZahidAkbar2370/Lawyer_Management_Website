<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/admin/login',"AdminController@login");
Route::post('/admin_login',"AdminController@admin_login");

Route::get('/dashboard','AdminController@show_dashboard');

Route::get('/view-cases',"AdminController@view_cases");
Route::get('/delete_case/{id}','AdminController@delete_case');

Route::get('/add-lawyer',"LawyerController@add_lawyer");
Route::post('/save-lawyer','LawyerController@save_lawyer');
Route::get('/view-lawyer','LawyerController@view_lawyer');
Route::get('/delete_lawyer/{id}','LawyerController@delete_lawyer');
Route::get('/edit_lawyer/{id}','LawyerController@edit_lawyer');
Route::post('/update-lawyer/{id}','LawyerController@update_lawyer');
Route::get('/approve/{id}','LawyerController@approve_lawyer');
Route::get('/unapprove/{id}','LawyerController@unapprove_lawyer');


Route::get('/add-category',"CategoryController@add_category");
Route::post('/save-category','CategoryController@save_category');
Route::get('/view-category','CategoryController@view_category');
Route::get('/delete/{id}','CategoryController@delete_category');
Route::get('/edit/{id}','CategoryController@edit_category');
Route::post('/update-category/{id}','CategoryController@update_category');
// Route::get('/approve/{id}','CategoryController@approve_category');
// Route::get('/unapprove/{id}','CategoryController@unapprove_category');


Route::get('/register',"LawyerProfileController@register");
Route::post('/save-register','LawyerProfileController@save_register');
Route::get('/login',"LawyerProfileController@login");
Route::post('/lawyer',"LawyerProfileController@lawyer_login");

Route::get('/lawyer_profile',"LawyerProfileController@lawyer_profile");
Route::post('/lawyer_update',"LawyerProfileController@lawyer_update");

Route::post('/add_case',"LawyerProfileController@add_case");