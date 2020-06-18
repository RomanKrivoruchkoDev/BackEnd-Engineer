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

Route::post('properties', 'PropertyController@store');
Route::post('properties/{uiid}/analytics', 'PropertyController@storeAnalytics');
Route::put('properties/{uiid}/analytics/{id}', 'PropertyController@updateAnalytics');
Route::get('properties/{uiid}/analytics', 'PropertyController@showAnalytics');
Route::get('properties/summary', 'PropertyController@showSummary');
