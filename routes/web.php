<?php

use Illuminate\Support\Facades\Route;

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


