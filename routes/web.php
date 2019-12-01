
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
    route::get('/hostel/' , 'HostelController@index')->name('hostel.index');
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

// Hoste Resource route Ramazan
use App\Address;

Route::resource('hostel','HostelController');
// Food Resource route 'Ramazan'
Route::resource('food','FoodController');

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
