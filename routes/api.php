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


Route::group(['middleware' => ['api', 'cors'],'namespace' => '\App\Http\Controllers\api\v1'], function()
{
    Route::post('/getAnswers', 'QandAController@getAnswers');
});
