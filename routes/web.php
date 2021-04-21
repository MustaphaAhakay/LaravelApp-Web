<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//pour l espace client 

//Route::get('{any}', function () { return view('app');})->where('any', '.*');

Route::get('/', function () { return view('app');});
Route::get('/store', function () { return view('app');});
Route::get('/question', function () { return view('app');});
// Route::get('/reponse', function () { return view('app');});
Route::get('/panier', function () { return view('app');});
Route::get('/avisClient', function () { return view('app');});

Route::get('/welcome', function () { return view('welcome');});
//------

//pour lauthentification
Route::get('/register', 'Auth\AuthController@register')->name('register');
Route::post('/register', 'Auth\AuthController@storeUser');

Route::get('/login', 'Auth\AuthController@login')->name('login');
Route::post('/login', 'Auth\AuthController@authenticate');
Route::get('logout', 'Auth\AuthController@logout')->name('logout');

Route::get('/dashboard', 'Auth\AuthController@dashboard')->name('dashboard');
//-------


// pour l' espace admn 
Route::resource('/dashboard/questionview','QuestionviewController');
Route::resource('/dashboard/avisclientview','AvisclientviewController');
//-----------













/*
Route::get('/store', ['as' => 'store', 'uses' => 'HomeController@store']);


Route::get('/showStore', ['as' => 'showStore', 'uses' => 'ExempleController@showStore']);
*/
/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/produit/{id}', ['as' => 'produit', 'uses' => 'HomeController@produit'])->name('produit');
*/

/*
Route::get('/store','layouts.header');
Route::get('/question','layouts.header');
Route::get('/avisClient','layouts.header');
*/



