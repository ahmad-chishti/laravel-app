<?php

    /*
    |--------------------------------------------------------------------------
    | Application Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register all of the routes for an application.
    | It's a breeze. Simply tell Laravel the URIs it should respond to
    | and give it the controller to call when that URI is requested.
    |
    */

    Route::get('/', function ()
    {
        return view('welcome');
    });

    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/tasks', 'TaskController@index');
    Route::get('/task/create', 'TaskController@create');
    Route::post('/task/save', 'TaskController@save');
    Route::get('/task/edit/{task}', 'TaskController@edit');
    Route::post('/task/update/{task}', 'TaskController@update');
    Route::get('/task/delete/{task}', 'TaskController@destroy');
