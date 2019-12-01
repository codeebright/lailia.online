
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
Route::get('/form',function(){
  return view('front/form');
});
Route::post('/form', 'AttachmentController@save');
Route::get('/','HomeController@index')->name('front.home');
Route::get('/home','HomeController@index');


// Login User Route
Route::get('login/user','OwnerController@login')->name('registration.create');
Route::any('/search','HomeController@homeSearch')->name('homeseach');
// Do login Route
Route::post('login', 'OwnerController@login')->name('post_login');

// Route::get('home', 'OwnerController@index')->name('home');
Route::post('register', 'OwnerController@store')->name('registration.store');
