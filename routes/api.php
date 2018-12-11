<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', 'API\PassportController@login');

Route::post('register', 'API\PassportController@register');

Route::group(['middleware' => 'auth:api'], function(){

    Route::post('get-details', 'API\PassportController@getDetails');

});

Route::post('customerContactRequest','PassportController@logCustomerContactRequest');

Route ::post('customerQuoteReuqest','PassportController@customerQuoteRequest');

Route::post('customerContactResponse','PassportController@customerContactResponse');

#Route::post('','');

/*Route::post('customerContactRequest',function (){
    return response()->json(['response' =>  "Test response",'Status_code' => 200]);
});*/