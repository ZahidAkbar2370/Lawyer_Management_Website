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
    return view('client/dashboard/dashboard');
});



Route::get('/admin/login',"AdminController@login");
Route::post('/admin_login',"AdminController@admin_login");

Route::get('/dashboard','AdminController@show_dashboard');

Route::get('/view-cases',"AdminController@view_cases");
Route::get('/delete_case/{id}','AdminController@delete_case');

//Admin Lawyer Routes
Route::get('/add-lawyer',"LawyerController@add_lawyer");
Route::post('/save-lawyer','LawyerController@save_lawyer');
Route::get('/view-lawyer','LawyerController@view_lawyer');
Route::get('/delete_lawyer/{id}','LawyerController@delete_lawyer');
Route::get('/edit_lawyer/{id}','LawyerController@edit_lawyer');
Route::post('/update-lawyer/{id}','LawyerController@update_lawyer');
Route::get('/approve/{id}','LawyerController@approve_lawyer');
Route::get('/unapprove/{id}','LawyerController@unapprove_lawyer');


// Admin Client Routes
Route::get('/add-client',"ClientController@add_client");
Route::post('/save-client','ClientController@save_client');
Route::get('/view-client','ClientController@view_client');
Route::get('/delete_client/{id}','ClientController@delete_client');
Route::get('/edit_client/{id}','ClientController@edit_client');
Route::post('/update-client/{id}','ClientController@update_client');
// Route::get('/approve/{id}','ClientController@approve_client');
// Route::get('/unapprove/{id}','ClientController@unapprove_client');

// Admin Category Routes
Route::get('/add-category',"CategoryController@add_category");
Route::post('/save-category','CategoryController@save_category');
Route::get('/view-category','CategoryController@view_category');
Route::get('/delete/{id}','CategoryController@delete_category');
Route::get('/edit/{id}','CategoryController@edit_category');
Route::post('/update-category/{id}','CategoryController@update_category');
// Route::get('/approve/{id}','CategoryController@approve_category');
// Route::get('/unapprove/{id}','CategoryController@unapprove_category');


// Admin Check Request
Route::get('view-client-requests',"ChangeLawyerRequestController@view_client_requests");
Route::get('/accept_request/{id}',"ChangeLawyerRequestController@accept_request");
Route::get('/reject_request/{id}',"ChangeLawyerRequestController@reject_request");


						// Lawyer Panel

//lawyer register
Route::get('/register',"LawyerProfileController@register");
Route::post('/save-register','LawyerProfileController@save_register');
//lawyer login
Route::get('/lawyer-login',"LawyerProfileController@login");
Route::post('/lawyer',"LawyerProfileController@lawyer_login");
//lawyer profile
Route::get('/lawyer-profile',"LawyerProfileController@lawyer_profile");
Route::post('/lawyer_update',"LawyerProfileController@lawyer_update");
//lawyer cases
Route::get('/add-case',"LawyerProfileController@add_case");
Route::post('/save-case',"LawyerProfileController@save_case");
//lawyer meeting
Route::get('/lawyer-meeting',"LawyerProfileController@lawyer_meeting");
Route::get('/accept_meeting/{id}',"LawyerProfileController@accept_meeting");
Route::get('/reject_meeting/{id}',"LawyerProfileController@reject_meeting");
//Lawyer Payment
Route::get('/lawyer-payment',"LawyerProfileController@lawyer_payment");


						// Client Panel

//Client Register 
Route::get('/client-register',"ClientController@register");
Route::post('/register-client','ClientController@save_register'); 
// Client Login
Route::get('/client-login',"ClientProfileController@login");
Route::post('/client',"ClientProfileController@client_login");
// Client Profile
Route::get('/client-profile',"ClientProfileController@client_profile");
Route::post('/client_update',"ClientProfileController@client_update");
//Client Meeting
Route::get('/add-meeting',"ClientProfileController@add_meeting");
Route::post('/save-meeting',"ClientProfileController@save_meeting");
Route::get('/view-meeting',"ClientProfileController@view_meeting");
Route::get('/client/delete_meeting/{id}','ClientProfileController@delete_meeting');
// Client Fee
Route::get('/add-fee',"ClientProfileController@add_fee");
Route::post('/save-fee',"ClientProfileController@save_fee");
Route::get('/view-fee',"ClientProfileController@view_fee");
// Client Search Lawyer
Route::get('/client-search-lawyer',"ClientProfileController@client_search_lawyer");
//Client Request to Change Lawyer
Route::get('/view-client-change-lawyer',"ClientProfileController@view_change_lawyer");
Route::get('/client/delete_request/{id}',"ClientProfileController@delete_request");
Route::get('/add-change-lawyer',"ClientProfileController@add_change_lawyer_request");
Route::post('/change-lawyer',"ClientProfileController@change_lawyer");
