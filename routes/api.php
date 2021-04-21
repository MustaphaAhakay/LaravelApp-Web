<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('user', function (Request $request) {
    return $request->user();
});
// pour les questions
Route::get('question', 'QuestionController@index');
// Route::group(['prefix' => 'question'], function () {
//     Route::post('add', 'QuestionController@add');
//     Route::get('edit/{id}', 'QuestionController@edit');
//     Route::post('update/{id}', 'QuestionController@update');
//     Route::delete('delete/{id}', 'QuestionController@delete');
// });
// ------------
//pour avis clients
Route::get('avisClient', 'AvisclientController@index');
//----------
/*
Route::get('homes', 'HomeController@index');
Route::group(['prefix' => 'home'], function () {
    Route::get('store', 'HomeController@store');

});
*/

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
/*

Route::group(['prefix' => 'produit'], function () {
    Route::post('store', 'HomeController@index');
    Route::get('question', 'HomeController@store');
    Route::post('avisClient', 'HomeController@produits');
});
*/