<?php

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

Route::pattern('uid', '[0-9]{3}');

Route::get('/show/{uid?}', function($uid=null){
    // return 'hello';
    return $uid ?? 'hello';
});

Route::group(['prefix'=>'test'], function(){
    Route::get('show', function(){
        return 'test/show';
    });

    Route::get('home', 'HomeController@index');

    Route::resource('students', 'cool\StudentsController');
});


Route::group(['prefix' => 'webpage'], function () {
    Route::get('demo1', 'webpage\Demo1Controller@index');
});

