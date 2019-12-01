<<<<<<< current
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



/*
 * =========================================
 * Start of CMS route
 *
 * =========================================
 * */

// Hoste Resource route Ramazan
use App\Address;

Route::resource('hostel','HostelController');
// Food Resource route 'Ramazan'
Route::resource('food','FoodController');
// Room resource route 'Ramazan'
Route::resource('room','RoomController');

Route::get('/test', function () {
    return view('cms.hostel.test');
});
// Route::get('hostel', 'HostelController@index');
 Route::get('/profile', function(){
     return view('cms.hostel.profile');
 })->name('profile');


/*
 * Enf of CMS route
 * */




/*
 * =====================================
 * Start of Front Routes
 * =====================================
 * */

//foto route

//form for uploading hostel images
Route::get('/form',function(){
  return view('front/form');
});
Route::post('/form', 'AttachmentController@save');

// form for uploading rooms images
Route::get('/room_form',function (){
    return view('front/roomform');
});
Route::post('/room_form','AttachmentController@store');

Route::get('/home','HomeController@index');

// Login User Route
Route::get('login/user','OwnerController@login')->name('registration.create');
// search result
Route::post('/search','HomeController@homeSearch')->name('home_search');

// Do login Route
Route::post('login', 'OwnerController@login')->name('post_login');

// Route::get('home', 'OwnerController@index')->name('home');
Route::post('register', 'OwnerController@store')->name('registration.store');

// khabgah_detailes/khabgah_pages route
Route::any('/hostel_list/{page?}','HostelController@listHostel')->name('hostel.list');
Route::get('/khabgah_details/{hostel_id}','HostelDetailsController@index')->name('hostel_details');

Route::get('/pagination','HostelController@paginate');

// Route::resource('user', 'OwnerController');
//
// Route::get('home', function(){
//   return view('front/default');
// });
// Route::post('login')
// Route::resource('home', 'OwnerController');
// Route::post('registration', 'OwnerController')->name('')
// Route::post('registration', 'OwnerController')->name('registration.create');

// Route::get('login/create','OwnerController@create')->name('post_login');
// Route::post('login','OwnerController@login')->name('post_login');
//Route::get('/', function () {
//    return view('front/welcome');
//});
//Route::get('adminUser', function () {
//    return view('front/adminUser');
//});
//Route::get('/demo', function () {
//
//    return view('front/demo');
//
//});
//Route::get('/myHome', function () {
//
//    return view('front/myHome');
//
//});
//Route::get('/home', function () {
//
//    return view('front/home');
//
//});
//Route::get('/kh_page', function () {
//
//    return view('front/kh_page');
//
//});
//Route::get('/khabgah_search', function () {
//
//    return view('front/khabgah_search');
//
//});
//Route::get('/khabgah_details', function () {
//
//    return view('front/khabgah_details');
//
//});
//Route::get('/khabgah_list', function () {
//
//    return view('front/khabgha_list');
//
//});
//Route::post('adminUser','hostelOwnerController@store');
//
//
//
//Route::get('my-home', 'HomeController@myHome');
//
//Route::get('my-users', 'HomeController@myUsers');
//
//use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('front/welcome');
//});
//Route::get('adminUser', function () {
//    return view('front/adminUser');
//});
// Route::get('/demo', function () {

//     return view('front/demo');
// });
//
//Route::get('/myHome', function () {
//
//    return view('front/myHome');
//
//});
//Route::get('/home', function () {
//
//    return view('front/home');
//
//});
// Route::get('/kh_page', function () {

//     return view('front/kh_page');
// });
//
//Route::get('/khabgah_search', function () {
//
//    return view('front/khabgah_search');
//
//});


//
//Route::get('/khabgah_list', function () {
//
//    return view('front/khabgha_list');
//
//});
//Route::post('adminUser','hostelOwnerController@store');


//
// Route::get('my-home', 'HomeController@myHome');
//
// Route::get('my-users', 'HomeController@myUsers');
//
=======
<?php

use App\Address;
use Illuminate\Support\Facades\Input;

/*
 * =========================================
 * Start of CMS route
 *
 * =========================================
 * */

route::group(['prefix' => 'admin'] , function() {
    route::get('/hostel/', 'HostelController@index')->name('hostel.index');
    route::get('/hostel/create', 'HostelController@create')->name('hostel.create');
    route::post('/hostel/create', 'HostelController@store')->name('hostel.store');
    Route::get('/hostel/delete/{hostel_id}', 'HostelController@delete')->name('hostel.delete');
    route::get('/hostel/edit/{hostel_id}', 'HostelController@edit')->name('hostel.edit');
    route::post('/hostel/edit/{hostel_id}', 'HostelController@update')->name('hostel.update');
// rooms route .. 'ramazan'
//    route::get('/room' , 'HostelController@index')->name('hostel.index');
    route::get('/room/create', 'RoomController@create')->name('room.create');
    route::post('/room/create', 'RoomController@store')->name('room.store');
    route::get('/room/{id}/delete', 'RoomController@delete')->name('room.delete');
    route::get('/room/edit/{id}', 'RoomController@edit')->name('room.edit');
    route::post('/room/edit/{id}', 'RoomController@update')->name('room.update');
});

// Hostel Resource route Ramazan
    Route::resource('hostel', 'HostelController');
// Food Resource route 'Ramazan'
    Route::resource('food', 'FoodController');
// Room resource route 'Ramazan'
    Route::resource('room', 'RoomController');

    Route::get('/test', function () {
        return view('cms.hostel.test');
    });

// Route::get('hostel', 'HostelController@index');
    Route::get('/profile', function () {
        return view('cms.hostel.profile');
    })->name('profile');

    /*
     * Enf of CMS route
     * */


    /*
     * =====================================
     * Start of Front Routes
     * =====================================
     * */

//front route

//form for uploading hostel images
    Route::get('/form', function () {
        return view('front/form');
    });
    Route::post('/form', 'AttachmentController@save');

// form for uploading rooms images
    Route::get('/room_form', function () {
        return view('front/roomform');
    });

    Route::post('/room_form', 'AttachmentController@store');

    Route::get('/home', 'HomeController@index')->name('home');

// Login User Route
    Route::get('login/user', 'OwnerController@login')->name('registration.create');
// search result
    Route::post('/search', 'HomeController@homeSearch')->name('home_search');

// Do login Route
    Route::post('login', 'OwnerController@login')->name('post_login');

// Route::get('home', 'OwnerController@index')->name('home');
    Route::post('register', 'OwnerController@store')->name('registration.store');

// khabgah_detailes/khabgah_pages route

    Route::any('/hostel_list/{page?}', 'HostelController@listHostel')->name('hostel.list');
    Route::get('/khabgah_details/{hostel_id}', 'HostelDetailsController@index')->name('hostel_details');

    Route::get('/pagination', 'HostelController@paginate');

    Route::get('room_filter', function () {
        return view('front/roomFilter');
    })->name('roomFilter');

Route::get('room_d', function () {
    return view('front/roomDetail_index');
});

>>>>>>> before discard
