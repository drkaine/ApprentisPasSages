<?php

use App\Models\Album;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CKEditorController;
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

// accueil
Route::get('/', 'App\Http\Controllers\TemplateController@accueil')->name('Accueil');

//contact
if(isset($_POST['contactCacher'])){
    Route::post('{catchall}', 'App\Http\Controllers\mailController@send')->name('envoiMail')->where('catchall', '.*');
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

// Route::resource('User', UserController::class);

Route::post('/mdp-oublie', "App\Http\Controllers\UserController@edit")->name('UserController.edit');

Route::get('/mdp-oublie', 'App\Http\Controllers\TemplateController@mdpOublie');

Route::get("/accueil-admin", 'App\Http\Controllers\TemplateController@accueilAdmin')->name('Accueil-Admin');

Route::get('/association-admin', "App\Http\Controllers\TemplateController@associationAdmin")->name('Association-Admin');


Route::get('/prestation-admin/{prestation}', 'App\Http\Controllers\TemplateController@prestationsAdmin')->name('TemplateController.prestationsAdmin');

Route::get('/all-prestation-admin', 'App\Http\Controllers\TemplateController@allPrestationsAdmin')->name('TemplateController.allPrestationsAdmin');

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

Route::get('/ajoutAlbum', 'App\Http\Controllers\TemplateController@albumAjout')->name("TemplateController.ajoutAlbum");

if(isset($_POST['ajoutAlbum'])){
Route::post('/ajoutAlbum', 'App\Http\Controllers\AlbumController@add');
}

Route::get('/ajoutPhoto', 'App\Http\Controllers\TemplateController@photoAjout')->name("TemplateController.ajoutPhoto");

if(isset($_POST['ajoutPhoto'])){
Route::post('/ajoutPhoto', 'App\Http\Controllers\PhotoController@add');
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

Route::get('/ajoutAction/{prestation}', 'App\Http\Controllers\TemplateController@ActionAjout')->name("TemplateController.ajoutAction");

if(isset($_POST['ajoutAction'])){
Route::post('/ajoutAction/{prestation}', 'App\Http\Controllers\ActionController@add');
}

Route::get('/ajoutModule/{prestation}', 'App\Http\Controllers\TemplateController@ModuleAjout')->name("TemplateController.ajoutModule");

if(isset($_POST['ajoutModule'])){
Route::post('/ajoutModule/{prestation}', 'App\Http\Controllers\ModuleController@add');
}

Route::get('/ajoutEtiquette', 'App\Http\Controllers\TemplateController@EtiquetteAjout')->name("TemplateController.ajoutEtiquette");

if(isset($_POST['ajoutEtiquette'])){
Route::post('/ajoutEtiquette', 'App\Http\Controllers\EtiquetteController@add');
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

Route::get('/editModule/{prestation}/{moduleId}', 'App\Http\Controllers\TemplateController@ModuleEdit')->name("TemplateController.editModule");

if(isset($_POST['editModule'])){
Route::post('/editModule/{prestation}/{moduleId}', 'App\Http\Controllers\ModuleController@saveEdit');
}

Route::get('/editEtiquette/{eid}', 'App\Http\Controllers\TemplateController@EtiquetteEdit')->name("TemplateController.editEtiquette");

if(isset($_POST['editEtiquette'])){
Route::post('/editEtiquette/{eid}', 'App\Http\Controllers\EtiquetteController@saveEdit');
}

Route::get('/editAction/{prestation}/{aid}', 'App\Http\Controllers\TemplateController@ActionEdit')->name("TemplateController.editAction");

if(isset($_POST['editAction'])){
Route::post('/editAction/{prestation}/{aid}', 'App\Http\Controllers\ActionController@saveEdit');
}


// supression

Route::post("/retour/{choix}", "App\Http\Controllers\TemplateController@retour")->name("TemplateController.retour");

Route::get("/demande-suppression/{choix}","App\Http\Controllers\TemplateController@demandeSuppression")->name("TemplateController.demandeSuppression");

Route::delete("/confirmation-suppression/{choix}","App\Http\Controllers\TemplateController@confirmationSuppression")->name("TemplateController.confirmationSuppression");


