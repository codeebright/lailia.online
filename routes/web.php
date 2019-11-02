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
route::group(['prefix' => 'admin'] , function(){
    route::get('/hostel' , 'HostelController@index')->name('hostel.index');
    route::get('/hostel/create' , 'HostelController@create')->name('hostel.create');
    route::post('/hostel/create' , 'HostelController@store')->name('hostel.store');
    Route::get('/hostel/delete/{hostel_id}' ,'HostelController@delete')->name('hostel.delete');
    route::get('/hostel/edit/{hostel_id}' , 'HostelController@edit')->name('hostel.edit');
    route::post('/hostel/edit/{hostel_id}' , 'HostelController@update')->name('hostel.update');
// rooms route .. 'ramazan'
//    route::get('/room' , 'HostelController@index')->name('hostel.index');
    route::get('/room/create' , 'RoomController@create')->name('room.create');
    route::post('/room/create' , 'RoomController@store')->name('room.store');
    route::get('/room/{id}/delete' , 'RoomController@delete')->name('room.delete');
    route::get('/room/edit/{id}' , 'RoomController@edit')->name('room.edit');
    route::post('/room/edit/{id}' , 'RoomController@update')->name('room.update');

    //owner routes .. 'ramazan'
    route::get('/Owner' , 'OwnerController@index')->name('Owner.index');
    route::get('/Owner/create' , 'OwnerController@create')->name('Owner.create');
    route::post('/Owner/create' , 'OwnerController@store')->name('Owner.store');
//    Route::get('/Owner/delete/{Owner_id}' ,'OwnerController@delete')->name('Owner.delete');
    route::get('/Owner/edit/{Owner_id}' , 'OwnerController@edit')->name('Owner.edit');
    route::post('/Owner/edit/{Owner_id}' , 'OwnerController@update')->name('Owner.update');
});

Route::get('/adminLogin', function () {
    return view('cms.hostel.login');
});


// Hostel Resource route Ramazan
//Route::resource('hostel','HostelController');
//dropdown routes create 'ramazan'
Route::post('hostel/photos' ,'AttachmentController@addphotos')->name('add_photos');
//photos delete route "ramazan"
Route::post('hostel/photos/delete' ,'AttachmentController@fileDestroy')->name('fileDestroy');
//delet the room  ... 'ramazan'
//Route::get('rooms/delete/{room_id}' ,'RoomController@delete')->name('room.delete');
 //Room resource route 'Ramazan'
//Route::resource('room','RoomController');
 //Food Resource route 'Ramazan'
Route::resource('food','FoodController');


Route::get('/test', function () {
    return view('cms.hostel.test');
});
//// Route::get('hostel', 'HostelController@index');
// Route::get('/profile', function(){
//     return view('cms.hostel.profile');
// })->name('profile');


Route::get('/example', function(){
    return view('cms.hostel.example');
})->name('example');


/*
 * Enf of CMS route
 * */


/*
 * =====================================
 * Start of Front Routes
 * =====================================
 * */

//photo route
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

Route::get('hostel/list','hostelController@listHostel')->name('hostel.list');

// Room Filtering
// Route::get('hostel_detials', function(){
//   return view('front/hostel_detials');
// });

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
