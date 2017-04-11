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

Route::get('/','ProjectController@welcome');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('project/create', 'ProjectController@create');
Route::post('project', 'ProjectController@store');

Route::get('project/all', 'ProjectController@all');
Route::get('project/edit/{id}', 'ProjectController@edit');
Route::any('project/{id}' ,['as' => 'project.update', 'uses' => 'ProjectController@update']);

Route::get('project/delete/{id}', 'ProjectController@delete');

