<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/', 'App\Http\Controllers\VisiteurController@accueil')->name('Accueil');

//Mail
if(isset($_POST['contactCacher'])){
    Route::post('{catchall}', 'App\Http\Controllers\mailController@send')->name('envoiMail')->where('catchall', '.*');
     }

if(isset($_POST['mdp'])){
    Route::post('{catchall}', 'App\Http\Controllers\UserController@edit')->name('envoiMDP');
     }

 // liens morts
 if(isset($_POST['liensCacher'])){
    Route::post('/', 'App\Http\Controllers\mailController@liensMortsSend')->name('envoiLiensMort');
    }
    
    Route::get('/association', "App\Http\Controllers\VisiteurController@association")->name('Association');


Route::get('/galerie', 'App\Http\Controllers\VisiteurController@galerie')->name('Galerie');

Route::get('/coup-coeur', 'App\Http\Controllers\VisiteurController@coups_de_coeur')->name('coupDeCoeur');

Route::get('/prestation/{prestation}', 'App\Http\Controllers\VisiteurController@prestations')->name('VisiteurController.prestations');

Route::get('/Oneteam/{id}','App\Http\Controllers\VisiteurController@getOneteam')->name('VisiteurController.getOneteam');

Route::get("/album/{nom}" , "App\Http\Controllers\VisiteurController@album")->name("VisiteurController.album");

Route::get("/plan-site", "App\Http\Controllers\VisiteurController@planSite")->name('VisiteurController.planSite');

//ADMIN
//Modifié
Route::get('/admin', 'App\Http\Controllers\AdminController@admin')->name("login");
//Modifié
if(isset($_POST['confirmeCompte'])){
    Route::post('/admin', 'App\Http\Controllers\UserController@authenticate')->name("verifCon");
}
// Route::resource('User', UserController::class);
//Modifié
Route::post('/mdp-oublie', "App\Http\Controllers\UserController@edit")->name('UserController.edit');
//Modifié
Route::get('/mdp-oublie', 'App\Http\Controllers\AdminController@mdpOublie')->name('AdminController.editAdmin');

//Admin Groupe Authentifié !!

//Route::group(['middleware' => 'auth'], function () {
    
//Modifié    
Route::post('/mdp-changement', "App\Http\Controllers\UserController@change")->name('UserController.change');
//Modifié
Route::get('/mdp-changement', 'App\Http\Controllers\AdminController@changement_mdp')->name('AdminController.changeAdmin');
//
Route::get("/accueil-admin", 'App\Http\Controllers\AdminController@accueilAdmin')->name('Accueil-Admin');

Route::get('/user-gestion', 'App\Http\Controllers\AdminController@userGestion');

Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

Route::get('/association-admin', "App\Http\Controllers\AdminController@associationAdmin")->name('Association-Admin');

Route::get('/prestation-admin/{prestation}', 'App\Http\Controllers\AdminController@prestationsAdmin')->name('AdminController.prestationsAdmin');

Route::get('/all-prestation-admin', 'App\Http\Controllers\AdminController@allPrestationsAdmin')->name('AdminController.allPrestationsAdmin');

Route::get('/galerie-admin', 'App\Http\Controllers\AdminController@galerieAdmin')->name('Galerie-Admin');

Route::get('/coup-coeur-admin', 'App\Http\Controllers\AdminController@coups_de_coeurAdmin')->name('coupDeCoeur-Admin');

Route::get('/prestation-admin/{prestation}', 'App\Http\Controllers\AdminController@prestationsAdmin')->name('AdminController.prestationsAdmin');

Route::get("/album-admin/{nom}" , "App\Http\Controllers\AdminController@albumAdmin")->name("AdminController.albumAdmin");
    
if(isset($_POST['deconnection'])){
    Route::post('{catchall}', 'App\Http\Controllers\userController@deconnection')->name('deconnect')->where('catchall', '.*');
     }

//AJOUT
Route::get('/ajoutAdmin', 'App\Http\Controllers\AjoutController@adminAjout')->name("AdminController.ajoutAdmin");

if(isset($_POST['ajoutAdmin']))
{
   Route::post('/ajoutAdmin', 'App\Http\Controllers\UserController@create');
}

Route::get('/ajoutCatalogue', 'App\Http\Controllers\AjoutController@CatalogueAjout')->name("AjoutController.ajoutCatalogue");

if(isset($_POST['ajoutCatalogue'])){
Route::post('/ajoutCatalogue', 'App\Http\Controllers\CatalogueController@add');
}

Route::get('/ajoutCoup-Coeur/{id}', 'App\Http\Controllers\AjoutController@coups_de_coeurAjout')->name("AjoutController.ajoutCoup-Coeur");

if(isset($_POST['ajoutCC'])){
Route::post('/ajoutCoup-Coeur/{id}', 'App\Http\Controllers\CoupDeCoeurController@add');
}

Route::get('/ajoutAlbum', 'App\Http\Controllers\AjoutController@albumAjout')->name("AjoutController.ajoutAlbum");

if(isset($_POST['ajoutAlbum'])){
Route::post('/ajoutAlbum', 'App\Http\Controllers\AlbumController@add');
}

Route::get('/ajoutPhoto', 'App\Http\Controllers\AjoutController@photoAjout')->name("AjoutController.ajoutPhoto");

if(isset($_POST['ajoutPhoto'])){
Route::post('/ajoutPhoto', 'App\Http\Controllers\PhotoController@add');
}

Route::get('/ajoutCategorieCoup-Coeur', 'App\Http\Controllers\AjoutController@categorie_coups_de_coeurAjout')->name("AjoutController.ajoutCategorieCoup-Coeur");

if(isset($_POST['ajoutCategorieCC'])){
Route::post('/ajoutCategorieCoup-Coeur', 'App\Http\Controllers\CategorieCoupDeCoeurController@add');
}

Route::get('/ajoutOneteam', 'App\Http\Controllers\AjoutController@ajoutOneteamAdmin')->name('AjoutController.ajoutOneteamAdmin');
if(isset($_POST['ajoutMembres'])){
Route::post('/ajoutOneteam', 'App\Http\Controllers\MembreController@add');
}

Route::get('/ajoutEvenement', 'App\Http\Controllers\AjoutController@EvenementAjout')->name("AjoutController.ajoutEvenement");

if(isset($_POST['ajoutEV'])){
Route::post('/ajoutEvenement', 'App\Http\Controllers\ProgrammationController@add');
}

Route::get('/ajoutAction/{prestation}', 'App\Http\Controllers\AjoutController@ActionAjout')->name("AjoutController.ajoutAction");

if(isset($_POST['ajoutAction'])){
Route::post('/ajoutAction/{prestation}', 'App\Http\Controllers\ActionController@add');
}

Route::get('/ajoutModule/{prestation}', 'App\Http\Controllers\AjoutController@ModuleAjout')->name("AjoutController.ajoutModule");

if(isset($_POST['ajoutModule'])){
Route::post('/ajoutModule/{prestation}', 'App\Http\Controllers\ModuleController@add');
}

Route::get('/ajoutEtiquette', 'App\Http\Controllers\AjoutController@EtiquetteAjout')->name("AjoutController.ajoutEtiquette");

if(isset($_POST['ajoutEtiquette'])){
Route::post('/ajoutEtiquette', 'App\Http\Controllers\EtiquetteController@add');
}

Route::get('/ajoutAdmin', 'App\Http\Controllers\AjoutController@adminAjout')->name("AjoutController.ajoutAdmin");

if(isset($_POST['ajoutAdmin'])){
Route::post('/ajoutAdmin', 'App\Http\Controllers\UserController@create');
}

//EDIT
Route::get("edit-user", 'App\Http\Controllers\EditController@editAdmin')->name("EditController.editAdmin");

Route::get('/Oneteam-admin/{id}','App\Http\Controllers\EditController@getOneteamAdmin')->name('EditController.getOneteamAdmin');

if(isset($_POST['membres'])){
Route::put('/Oneteam-admin/{id}', 'App\Http\Controllers\MembreController@saveEdit');
}

if(isset($_POST['membresStatuts'])){
Route::put('/Oneteam-admin/{id}', 'App\Http\Controllers\MembreStatutController@saveEdit');
}

Route::put('/association-admin', 'App\Http\Controllers\PagesController@saveEdit');

Route::get('/editCoup-Coeur/{idCC}/{idC}', 'App\Http\Controllers\EditController@coups_de_coeurEdit')->name("EditController.editCoup-Coeur");

if(isset($_POST['editCC'])){
Route::post('/editCoup-Coeur/{idCC}/{idC}', 'App\Http\Controllers\CoupDeCoeurController@saveEdit');
}

Route::get('/editCategorieCoup-Coeur/{idCC}', 'App\Http\Controllers\EditController@categorie_coups_de_coeurEdit')->name("EditController.editCategorieCoup-Coeur");

if(isset($_POST['editCategorieCC'])){
Route::post('/editCategorieCoup-Coeur/{idCC}', 'App\Http\Controllers\CategorieCoupDeCoeurController@saveEdit');
}


Route::get('/editEvenement/{pid}/{aid}/{mid}', 'App\Http\Controllers\EditController@EvenementEdit')->name("EditController.editEvenement");

if(isset($_POST['editEV'])){
Route::post('/editEvenement/{pid}/{aid}/{mid}', 'App\Http\Controllers\ProgrammationController@saveEdit');
}

Route::get('/editModule/{prestation}/{moduleId}', 'App\Http\Controllers\EditController@ModuleEdit')->name("EditController.editModule");

if(isset($_POST['editModule'])){
Route::post('/editModule/{prestation}/{moduleId}', 'App\Http\Controllers\ModuleController@saveEdit');
}

Route::get('/editEtiquette/{eid}', 'App\Http\Controllers\EditController@EtiquetteEdit')->name("EditController.editEtiquette");

if(isset($_POST['editEtiquette'])){
Route::post('/editEtiquette/{eid}', 'App\Http\Controllers\EtiquetteController@saveEdit');
}

Route::get('/editAction/{prestation}/{aid}', 'App\Http\Controllers\EditController@ActionEdit')->name("EditController.editAction");

if(isset($_POST['editAction'])){
Route::post('/editAction/{prestation}/{aid}', 'App\Http\Controllers\ActionController@saveEdit');
}

// supression
Route::post("/retour/{choix}", "App\Http\Controllers\AdminController@retour")->name("AdminController.retour");

Route::get("/demande-suppression/{choix}","App\Http\Controllers\AdminController@demandeSuppression")->name("AdminController.demandeSuppression");

Route::delete("/confirmation-suppression/{choix}","App\Http\Controllers\AdminController@confirmationSuppression")->name("AdminController.confirmationSuppression");
//});

