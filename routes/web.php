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
Route::get('adminUser', function () {
    return view('adminUser');
});
// Route::get('/demo', function () {

//     return view('demo');
// });

Route::get('/myHome', function () {

    return view('myHome');

});
Route::get('/home', function () {

    return view('home');

});
// Route::get('/kh_page', function () {

//     return view('kh_page');
// });

Route::get('/khabgah_search', function () {

    return view('khabgah_search');

});

// khabgah_detailes/khabgah_pages route 
Route::get('/khabgah_details', [
'uses' => 'HostelDetailsController@index',
'as'   => 'khabgah_details'
]);


Route::get('/khabgah_list', function () {

    return view('khabgha_list');

});
Route::post('adminUser','hostelOwnerController@store');



Route::get('my-home', 'HomeController@myHome');

Route::get('my-users', 'HomeController@myUsers');


