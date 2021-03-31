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

Route::get("/accueil-admin", 'App\Http\Controllers\TemplateController@accueilAdmin')->name('Accueil-Admin');

Route::any('/association-admin', "App\Http\Controllers\TemplateController@associationAdmin")->name('Association-Admin');

Route::put('/association-admin', 'App\Http\Controllers\PagesController@saveEdit');


Route::get('/galerie-admin', 'App\Http\Controllers\TemplateController@galerieAdmin')->name('Galerie-Admin');

Route::get('/coup-coeur-admin', 'App\Http\Controllers\TemplateController@coups_de_coeurAdmin')->name('coupDeCoeur-Admin');

Route::get('/prestation-admin/{prestation}', 'App\Http\Controllers\TemplateController@prestationsAdmin')->name('TemplateController.prestationsAdmin');

Route::get('/Oneteam-admin/{id}','App\Http\Controllers\TemplateController@getOneteamAdmin')->name('TemplateController.getOneteamAdmin');

Route::put('/Oneteam-admin/{id}', 'App\Http\Controllers\MembreController@saveEdit');


Route::get("/album-admin/{nom}" , "App\Http\Controllers\TemplateController@albumAdmin")->name("TemplateController.albumAdmin");


// Route::get("/suppression-catalogues/{id}","App\Http\Controllers\TemplateController@confirmationSuppression")->name("TemplateController.confirmationSuppression");

// Route::delete("/action-admin","App\Http\Controllers\TemplateController@deleteCatalogue");

Route::delete('/catalogueDelete{id}', "App\Http\Controllers\TemplateController@deleteCatalogue")->name("TemplateController.deleteCatalogue");

// Route::delete('/accueil-admin', "App\Http\Controllers\TemplateController@deleteMembre")->name("TemplateController.deleteMembre");

// Route::delete('/galerie-admin', "App\Http\Controllers\TemplateController@deleteAlbum")->name("TemplateController.deleteAlbum");

// Route::delete('/album-admin', "App\Http\Controllers\TemplateController@deletePhoto")->name("TemplateController.deletePhoto");

Route::delete('/moduleDelete{id}', "App\Http\Controllers\TemplateController@deleteModule")->name("TemplateController.deleteModule");

Route::delete('/actionDelete{id}', "App\Http\Controllers\TemplateController@deleteActionM")->name("TemplateController.deleteAction");

Route::delete('/catcdcDelete{id}', "App\Http\Controllers\TemplateController@deleteCategorieCoupCoeur")->name("TemplateController.deleteCategorieCoupCoeur");

Route::delete('/cdcDelete{id}', "App\Http\Controllers\TemplateController@deleteCoupCoeur")->name("TemplateController.deleteCoupCoeur");

// Route::delete('/prestation-admin/{prestation}', "App\Http\Controllers\TemplateController@deleteEtiquette")->name("TemplateController.deleteEtiquette");


// Route::put('/accueil', ["", '']);
