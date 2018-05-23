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

Route::post('/alarmMov1', 'AlarmController@createAlarmMov1');
Route::post('/alarmMov2', 'AlarmController@createAlarmMov2');
Route::post('/alarmFlame', 'AlarmController@createAlarmFlame');
Route::post('/alarmGas', 'AlarmController@createAlarmGas');
