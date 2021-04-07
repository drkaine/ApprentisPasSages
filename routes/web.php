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

Route::get('/', 'App\Http\Controllers\TemplateController@accueil')->name('Accueil');

//contact
if(isset($_POST['contactCacher'])){
    Route::post('/', 'App\Http\Controllers\mailController@send')->name('envoiMail');
     }

 // liens morts
if(isset($_POST['liensCacher'])){
Route::post('/', 'App\Http\Controllers\mailController@liensMortsSend')->name('envoiLiensMort');
}

Route::get('/association', "App\Http\Controllers\TemplateController@association")->name('Association');



Route::get('/galerie', 'App\Http\Controllers\TemplateController@galerie')->name('Galerie');

Route::get('/coup-coeur', 'App\Http\Controllers\TemplateController@coups_de_coeur')->name('coupDeCoeur');

Route::get('/prestation/{prestation}', 'App\Http\Controllers\TemplateController@prestations')->name('TemplateController.prestations');

Route::get('/Oneteam/{id}','App\Http\Controllers\TemplateController@getOneteam')->name('TemplateController.getOneteam');

Route::get("/album/{nom}" , "App\Http\Controllers\TemplateController@album")->name("TemplateController.album");


Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

// ->middleware('auth.basic')

//ADMIN

Route::get('/admin', 'App\Http\Controllers\TemplateController@admin');

Route::get("/accueil-admin", 'App\Http\Controllers\TemplateController@accueilAdmin')->name('Accueil-Admin');

Route::get('/association-admin', "App\Http\Controllers\TemplateController@associationAdmin")->name('Association-Admin');


Route::get('/prestation-admin/{prestation}', 'App\Http\Controllers\TemplateController@prestationsAdmin')->name('TemplateController.prestationsAdmin');

Route::get('/galerie-admin', 'App\Http\Controllers\TemplateController@galerieAdmin')->name('Galerie-Admin');

Route::get('/coup-coeur-admin', 'App\Http\Controllers\TemplateController@coups_de_coeurAdmin')->name('coupDeCoeur-Admin');

Route::get('/prestation-admin/{prestation}', 'App\Http\Controllers\TemplateController@prestationsAdmin')->name('TemplateController.prestationsAdmin');





Route::get("/album-admin/{nom}" , "App\Http\Controllers\TemplateController@albumAdmin")->name("TemplateController.albumAdmin");





//AJOUT

Route::get('/ajoutCatalogue', 'App\Http\Controllers\TemplateController@CatalogueAjout')->name("TemplateController.ajoutCatalogue");

if(isset($_POST['ajoutCatalogue'])){
Route::post('/ajoutCatalogue', 'App\Http\Controllers\CatalogueController@add');
}

Route::get('/ajoutCoup-Coeur/{id}', 'App\Http\Controllers\TemplateController@coups_de_coeurAjout')->name("TemplateController.ajoutCoup-Coeur");

if(isset($_POST['ajoutCC'])){
Route::post('/ajoutCoup-Coeur/{id}', 'App\Http\Controllers\CoupDeCoeurController@add');
}

Route::get('/ajoutCategorieCoup-Coeur', 'App\Http\Controllers\TemplateController@categorie_coups_de_coeurAjout')->name("TemplateController.ajoutCategorieCoup-Coeur");

if(isset($_POST['ajoutCategorieCC'])){
Route::post('/ajoutCategorieCoup-Coeur', 'App\Http\Controllers\CategorieCoupDeCoeurController@add');
}



Route::get('/ajoutOneteam', 'App\Http\Controllers\TemplateController@ajoutOneteamAdmin')->name('TemplateController.ajoutOneteamAdmin');
if(isset($_POST['ajoutMembres'])){
Route::post('/ajoutOneteam', 'App\Http\Controllers\MembreController@add');
}



Route::get('/ajoutEvenement', 'App\Http\Controllers\TemplateController@EvenementAjout')->name("TemplateController.ajoutEvenement");

if(isset($_POST['ajoutEV'])){
Route::post('/ajoutEvenement', 'App\Http\Controllers\ProgrammationController@add');
}




//EDIT


Route::get('/Oneteam-admin/{id}','App\Http\Controllers\TemplateController@getOneteamAdmin')->name('TemplateController.getOneteamAdmin');

if(isset($_POST['membres'])){
Route::put('/Oneteam-admin/{id}', 'App\Http\Controllers\MembreController@saveEdit');
}

if(isset($_POST['membresStatuts'])){
Route::put('/Oneteam-admin/{id}', 'App\Http\Controllers\MembreStatutController@saveEdit');
}


Route::put('/association-admin', 'App\Http\Controllers\PagesController@saveEdit');



Route::get('/editCoup-Coeur/{idCC}/{idC}', 'App\Http\Controllers\TemplateController@coups_de_coeurEdit')->name("TemplateController.editCoup-Coeur");

if(isset($_POST['editCC'])){
Route::post('/editCoup-Coeur/{idCC}/{idC}', 'App\Http\Controllers\CoupDeCoeurController@saveEdit');
}

Route::get('/editCategorieCoup-Coeur/{idCC}', 'App\Http\Controllers\TemplateController@categorie_coups_de_coeurEdit')->name("TemplateController.editCategorieCoup-Coeur");

if(isset($_POST['editCategorieCC'])){
Route::post('/editCategorieCoup-Coeur/{idCC}', 'App\Http\Controllers\CategorieCoupDeCoeurController@saveEdit');
}



Route::get('/editEvenement/{pid}/{aid}/{mid}', 'App\Http\Controllers\TemplateController@EvenementEdit')->name("TemplateController.editEvenement");

if(isset($_POST['editEV'])){
Route::post('/editEvenement/{pid}/{aid}/{mid}', 'App\Http\Controllers\ProgrammationController@saveEdit');
}



Route::post("/retour", "App\Http\Controllers\TemplateController@retour");

Route::post("/demande-suppression/{choix}","App\Http\Controllers\TemplateController@demandeSuppression")->name("TemplateController.demandeSuppression");

Route::delete("/confirmation-suppression/{choix}","App\Http\Controllers\TemplateController@confirmationSuppression")->name("TemplateController.confirmationSuppression");


