<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\Hello;
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

Route::get('changepass', function () {
    return view('welcome');
})->name('changepass');

Route::post('changepass', 'ChangePass@approve')->name('changepass');

Route::post('register', 'RegisterController@redirectTo')->name('register');

 
Route::get('testemail', function () {
    \Mail::to(['tom@myspace.com'])->send(new Hello);
});

Route::get('verify', 'ApproveController@approve')->name('verify');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('/changestatus/{id}', 'HomeController@status')->name('changestatus');
