<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth as FacadesAuth;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Home', function () {
    return view('index');
});

Route::get('/Test', function () {
    return view('test');
});
Route::get('/Test/confirm','App\Http\Controllers\mainController@test');

Route::get('MajorElective/ArtiIntel', function () {
    return view('/MajorElective/ArtiIntel');
});
Route::get('Test/MajorElective/ArtiIntel/confirm','App\Http\Controllers\mainController@artiIntel');

Route::get('/MajorElective/comArch', function () {
    return view('/MajorElective/comArch');
});
Route::get('MajorElective/comArch/confirm','App\Http\Controllers\mainController@comArch');

Route::get('/MajorElective/netSecurity', function () {
    return view('/MajorElective/netSecurity');
});
Route::get('/MajorElective/data', function () {
    return view('/MajorElective/data');
});
Route::get('/MajorElective/ComGraph', function () {
    return view('/MajorElective/ComGraph');
});

Route::get('/MajorElective/softEn', function () {
    return view('/MajorElective/softEn');
});

Route::get('/MajorElective/ScienComp', function () {
    return view('/MajorElective/ScienComp');
});
Route::get('/MajorElective/parallel', function () {
    return view('/MajorElective/parallel');
});

Route::get('/MajorElective', function () {
    return view('Major Elective');
});

Route::get('/result', function () {
    return view('result');
});


// Route::get('/result', 'App\Http\Controllers\mainController@test');
Auth::routes();
Route::post('/userCheck','App\Http\Controllers\registerController@userReg');

Route::get('/', function () {
    return view('auth/login');
});