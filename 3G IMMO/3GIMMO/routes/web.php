<?php

use Illuminate\Support\Facades\Route;

// Importation des controlleurs
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdController;


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

//* Création des différentes routes qui sont nécessaires

//* Ne pas oublier de rajouter le contrôlleur qui gérera la vue, et la méthode utilisée
//* On peut donner un nom à nos routes, pour pouvoir y faire appel plus simplement
//* (voir resources/views/partials/navbar.blade.php)
//! ATTENTION : Si une route à une clé (par ex : annonce/{{annonce}},
//! et qu'on a une autre route qui commence pareil (par ex : annonce/creation),
//! il faut passer celle ayant un paramètre d'URL en dernier pour éviter les erreurs)

Route::get('/', [AdController::class, 'index'])->name('accueil');
Route::get('/creation', [AdController::class, 'create'])->name('createAd');
Route::post('/creation', [AdController::class, 'save'])->name('saveAd');
Route::get('/annonce/{annonce}', [AdController::class, 'show'])->name('annonce');


// Route de tests
Route::get('/test', [TestController::class, 'test'])->name('testAccueil');
Route::get('/test/agents', [TestController::class, 'data'])->name('testAgent');
Route::get('/test/{id}', [TestController::class, 'show'])->name('testAnnonce');
Route::get('/creation-agent', [TestController::class, 'create'])->name('createAgent');
Route::post('/creation-agent', [TestController::class, 'save'])->name('saveAgent');

//TODO Tester le where après
Route::get('/where', [TestController::class, 'where'])->name('testWhere');
Route::get('/where/{recherche}', [TestController::class, 'where'])->name('testWhere');



