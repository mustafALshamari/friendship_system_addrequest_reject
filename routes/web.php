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
    
    return view('welcome');
});

// Route::get('/add', function () {

//     return \App\User::first()->adduser(3);
// });





// Route::get('/accept', function () {

//        return \App\User::find(3)->acceptinvitation(1);
//    });


//    Route::get('/reject', function () {

//     return \App\User::find(3)->reject(1);
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
