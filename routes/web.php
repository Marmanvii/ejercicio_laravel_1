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

Route::get('/', 'InfoController@index');

Route::resource('infos', 'InfoController');
Route::get('/infosbyclassification/{id}', 'InfoController@getInfosByClassification');
Route::get('/infosbytag/{id}', 'InfoController@getInfosByTag');


Route::resource('classifications', 'ClassificationController');
Route::get('/classificationbymanager/{id}', 'ClassificationController@getClassificationByManager');
Route::get('/classificationbyinfo/{id}', 'ClassificationController@getClassificationByInfo');

Route::resource('managers', 'ManagerController');
Route::get('/managerbyclassification/{id}', 'ManagerController@getManagerByClassification');


Route::resource('tags', 'TagController');
Route::get('/tagsbyinfo/{id}', 'TagController@getTagsByInfo');


