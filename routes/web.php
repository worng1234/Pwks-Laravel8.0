<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newstudentm1Controller;
use App\Http\Controllers\newstudentm4Controller;
use App\Http\Controllers\studentcoreController;

use App\Http\Controllers\TestUPController;

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
    return view('index');
});

Route::view('/AddstudentCore','Studentcore.addstudentcore');

//NewstudentRegister
Route::get('/AgreeMentNewstudentRegisterM1', [newstudentm1Controller::class, 'agreementNewstudentm1'] );
Route::get('/AgreeMentNewstudentRegisterM4', [newstudentm1Controller::class, 'agreementNewstudentm4'] );
Route::view('/NewstudentRegisterM1', 'Newstudent.newstudentm1');
Route::view('/NewstudentRegisterM4', 'Newstudent.newstudentm4');
Route::resource('/SortNewstudentM1', newstudentm1Controller::class);
Route::resource('/SortNewstudentM4', newstudentm4Controller::class);

Route::resource('testup', TestUPController::class);

//Studentcore
Route::resource('/StudentCore', studentcoreController::class);
