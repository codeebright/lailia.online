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

// khabgah_detailes/khabgah_pages route

Route::get('/hostel/list','hostelController@listHostel')->name('hostel.list');



// Room Filtering
Route::get('room_filter', function(){
  return view('front/roomFilter_index');
});

// Room Detail
Route::get('room_detail', function(){
    return view('front/roomDetail_index');
});

// Route::resource('user', 'OwnerController');
//
// Route::get('home', function(){
//   return view('front/home');
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
//Route::get('/khabgah_list', function () {
//
//    return view('front/khabgha_list');
//
//});
//Route::post('adminUser','hostelOwnerController@store');
// Route::get('my-home', 'HomeController@myHome');
//
// Route::get('my-users', 'HomeController@myUsers');
