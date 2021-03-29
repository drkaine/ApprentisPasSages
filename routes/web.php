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

if(isset($_POST['contactCacher'])){
    Route::post('/', 'App\Http\Controllers\mailController@send')->name('envoiMail');
     }

    // liens morts
    if(isset($_POST['liensCacher'])){
    Route::post('/', 'App\Http\Controllers\mailController@liensMortsSend')->name('envoiLiensMort');
    }

Route::get('/association', "App\Http\Controllers\TemplateController@association");

Route::get('/galerie', 'App\Http\Controllers\TemplateController@galerie');

Route::get('/coup-coeur', 'App\Http\Controllers\TemplateController@coups_de_coeur');

Route::get('/prestation/{prestation}', 'App\Http\Controllers\TemplateController@prestations')->name('TemplateController.prestations');

Route::get('/Oneteam/{id}','App\Http\Controllers\TemplateController@getOneteam')->name('TemplateController.getOneteam');

Route::get("/album/{nom}" , "App\Http\Controllers\TemplateController@album")->name("TemplateController.album");

// ->middleware('auth.basic')

Route::get('/admin', 'App\Http\Controllers\TemplateController@admin');

Route::get("/accueil-admin", 'App\Http\Controllers\TemplateController@accueilAdmin');

Route::get('/association-admin', "App\Http\Controllers\TemplateController@associationAdmin");

Route::get('/galerie-admin', 'App\Http\Controllers\TemplateController@galerieAdmin');

Route::get('/coup-coeur-admin', 'App\Http\Controllers\TemplateController@coups_de_coeurAdmin');

Route::get('/prestation-admin/{prestation}', 'App\Http\Controllers\TemplateController@prestationsAdmin')->name('TemplateController.prestationsAdmin');

Route::get('/Oneteam-admin/{id}','App\Http\Controllers\TemplateController@getOneteamAdmin')->name('TemplateController.getOneteamAdmin');

Route::get("/album-admin/{nom}" , "App\Http\Controllers\TemplateController@albumAdmin")->name("TemplateController.albumAdmin");

Route::delete('/accueil/{id}', [TemplateController::class, 'deleteCatalogue']);
