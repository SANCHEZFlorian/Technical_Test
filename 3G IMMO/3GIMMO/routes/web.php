<?php

use Illuminate\Support\Facades\Route;

// Importation des controlleurs
use App\Http\Controllers\AdController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AgentController;


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
//! ATTENTION : Si une route à une clé (par ex : annonce/{{annonce}}),
//! et qu'on a une autre route qui commence pareil (par ex : annonce/creation),
//! il faut passer celle ayant un paramètre d'URL en dernier pour éviter les erreurs.



//* --------------------------------------------------------------------------
//* Routes liées aux annonces
//* --------------------------------------------------------------------------

//* Liste de tout les annonces et accueil
Route::get('/', [AdController::class, 'listAd'])->name('listAd');

//* Vue de la création d'une annonce
Route::get('/creation-Ad', [AdController::class, 'createAd'])->name('createAd');

//* Création d'une annonce avec vue OK annonce créé
Route::post('/creation-Ad/Ad-created', [AdController::class, 'saveAd'])->name('saveAd');

//* Vue de la modification d'une annonce existante
Route::get('/annonces/modify/{id_Ad}', [AdController::class, 'viewAd'])->name('viewAd');

//* Modification d'une annonce avec vue OK annonce modifiée
Route::post('/annonces/update/{id_Ad}', [AdController::class, 'modifyAd'])->name('modifyAd');

//* Suppression d'une annonce
Route::get('/annonces/delete/{id_Ad}', [AdController::class, 'deleteAd'])->name('deleteAd');




//* --------------------------------------------------------------------------
//* Routes liées aux agents
//* --------------------------------------------------------------------------

//* Liste de tout les agents
Route::get('/agents', [AgentController::class, 'listAgent'])->name('listAgent');

//* Vue de la création d'un agent
Route::get('/creation-agent', [AgentController::class, 'create'])->name('createAgent');

//* Création d'un agent avec vue OK agent créé
Route::post('/creation-agent/agent-created', [AgentController::class, 'save'])->name('saveAgent');

//* Vue de la modification d'un agent existant
Route::get('/agents/modify/{id_agent}', [AgentController::class, 'viewAgent'])->name('viewAgent');

//* Modification d'un agent avec vue OK agent modifié
Route::post('/agents/update/{id_agent}', [AgentController::class, 'modifyAgent'])->name('modifyAgent');

//* Suppression d'un agent
Route::get('/agents/delete/{id_agent}', [AgentController::class, 'deleteAgent'])->name('deleteAgent');


//* --------------------------------------------------------------------------
//* Route de tests
//* --------------------------------------------------------------------------

Route::get('/test', [TestController::class, 'test'])->name('testAccueil');
Route::get('/test/agents', [TestController::class, 'data'])->name('testAgent');
Route::get('/test/{id}', [TestController::class, 'show'])->name('testAnnonce');
//TODO Tester le where après
Route::get('/where', [TestController::class, 'where'])->name('testWhere');
Route::get('/where/{recherche}', [TestController::class, 'where'])->name('testWhere');



