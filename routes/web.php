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

Route::get('/', 'StudentResultController@index')->name('web');
Route::get('/resultData', 'StudentResultController@resultData');
Route::get('/updateData/{id}', 'StudentResultController@updateData');
Route::post('/saveResult', 'StudentResultController@saveResult');
Route::post('/updateResult/{id}', 'StudentResultController@updateResult');
Route::post('/genReport', 'GenerateReportController@index');