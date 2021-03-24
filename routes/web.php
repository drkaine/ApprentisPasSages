<?php

use App\Models\Album;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\TemplateController;
;

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

// Route::get('/', function () {
//     return view('template');
// });

Route::get('/', 'App\Http\Controllers\TemplateController@accueil');

Route::get('/association', "App\Http\Controllers\TemplateController@association");

Route::get('/accueil', 'App\Http\Controllers\TemplateController@accueil');

Route::get('/galerie', 'App\Http\Controllers\TemplateController@galerie');

Route::get('/coup-coeur', 'App\Http\Controllers\TemplateController@coups_de_coeur');

Route::get('/Formations', 'App\Http\Controllers\TemplateController@formations');

Route::get('/admin', 'App\Http\Controllers\TemplateController@admin');
// ->middleware('auth.basic')

Route::get('/Animations', 'App\Http\Controllers\TemplateController@animations');

Route::get('/Soutien-scolaire', 'App\Http\Controllers\TemplateController@soutienScolaire');

Route::post('/', 'App\Http\Controllers\TemplateController@accueil');

Route::get('/Oneteam/{id}','App\Http\Controllers\TemplateController@getOneteam')->name('TemplateController.getOneteam');


Route::get("/album/{nom}" , "App\Http\Controllers\TemplateController@getPhoto")->name("TemplateController.getPhoto");

