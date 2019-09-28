<?php

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

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// route for attachment files
Route::get('/form',function(){
  return view('form.form');
});

Route::any('/search','HomeController@homeSearch')->name('homeseach');


//Route::get('/kh_page', function(){
//  return view();
//});

Route::get('/khabgah_list','HostelController@index'); //khabgah_list page route
Route::post('/form','AttachmentController@store');  //store image route
//khabgah_details route getting with hostel_id
Route::get('/khabgah_details/{hostel_id}','HostelDetailsController@index')->name('khabgah_detailes.goToDetails');
Route::get('/search','myHomeController@filter');

Route::get('adminUser', function () {
    return view('adminUser');
});


Route::get('/home','HomeController@show')->name('homepage');

Route::get('/khabgah_search', function () {

    return view('khabgah_search');
});

Route::post('adminUser','hostelOwnerController@store');
