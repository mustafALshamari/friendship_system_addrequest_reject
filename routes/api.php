<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::post('signup','userApiController@signup' );


Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');


Route::group(['middleware' => 'auth:api'], function(){
//to get detailes about logged in user
Route::post('details', 'API\UserController@details');


//to add user 
Route::post('adduser/{receiver_id}','FriendshipController@addNewFriend');
//to accept new friend
Route::post('acceptNewFriend/{sender}','FriendshipController@acceptNewFriend');
//to reject new friend request 
Route::post('reject/{sender}','FriendshipController@reject');




});