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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('welcome/hello', 'WelcomeController@hello');

// MyProfile
Route::get('/my', 'MyprofileController@index');
Route::get('profile', 'MyprofileController@profile');
Route::get('education', 'MyprofileController@education');
Route::get('talent', 'MyprofileController@talent');
Route::get('profession', 'MyprofileController@profession');
Route::get('teacher', 'MyprofileController@teacher');
Route::get('contact', 'MyprofileController@contact');

Route::get('hello', function(){
    return 'Hello Laravel';
});

//Route::get('/', 'App\Http\Controllers\WelcomeController@index');
