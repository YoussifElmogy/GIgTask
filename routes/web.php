<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpController;

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

Route::get('/emps', 'App\Http\Controllers\EmpController@index');
Route::get('/showq', 'App\Http\Controllers\EmpController@showq');
Route::get('/create', 'App\Http\Controllers\EmpController@create');
Route::post('','App\Http\Controllers\EmpController@store')->name('emp.store');

Route::get('/', function () {
    return view('home');
});