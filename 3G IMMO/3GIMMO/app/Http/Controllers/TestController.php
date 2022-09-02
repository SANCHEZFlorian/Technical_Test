<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{

    //* Les fonctions sont appelées par le routeur, qui ensuite renvoit une vue Blade.

    //* Petit test de renvoie de donnée simple et brut, pour tester la syntaxe et la logique de Laravel
    public function test()
    {
        $title = '/!\ TEST /!\ Liste de toutes les annonces';
        $title2 = '/!\ TEST /!\ Annonces';
        $tableau = [
            '/!\ TEST /!\ premier index',
            '/!\ TEST /!\ deuxième index'
        ];

        return view('test/test', compact('title', 'title2', 'tableau'));

        //* On peut aussi utiliser :
        // return view('test')->with('title', $title);
        //* ou
        // return view('test', [
        //     'title' => $title,
        //     'title2' => $title2,
        // ]);
    }


    //* Fonction qui permet d'afficher une annonce "brute" en particulier
    public function show($id)
    {
        $annonces = [
            1 => '/!\ TEST /!\ Annonce 1',
            2 => '/!\ TEST /!\ Annonce 2'
        ];

        //* Expression ternaire qui permet d'envoyer une string si l'annonce n'existe pas
        $annonce = $annonces[$id] ?? 'L\'annonce /!\ TEST /!\ n\'existe pas';
        $title = $annonce;

        return view('test/testAnnonce', [
            'title' => $title,
            'annonce' => $annonce
        ]);

    }


    //* Test de select de la BD
    //! Ne fonctionne pas vraiment, erreur de "htmlspecialchars() expects parameter 1 to be string, object given"
    // public function data()
    // {
    //     $agents = DB::select('SELECT * FROM agents');

    //     return view('test/testAgent', [
    //         'agents' => $agents
    //     ]);
    // }

    //* Récupération fonctionnelle de la liste des agents de la base de donnée ! :D
    public function data()
    {
        $title = '/!\ TEST /!\ Test de récupération de la liste de tout les agents';
        $agents = Agent::all();
        //* On peut directement trier les données récupérées :
        // $agents = Agent::orderBy('nom_agent')->get();
        //* Donnera tout les agents trier par ordre alphabétique du nom des agents

        // dd($agents);
        return view('test/testAgent', [
            'agents' => $agents,
            'title' => $title
        ]);
    }


    //* Fonction pour renvoyé la vue de la page de création d'un agent
    public function create()
    {
        $title = 'Création d\'un nouvel agent';
        return view('agent/addAgent', [
            'title' => $title
        ]);
    }

    //* Fonction qui créera un nouvel agent dans la table agents
    public function save(Request $request)
    {
        // dd($request);
        $agent = new Agent();
        $agent->nom_agent = $request->nom_agent;
        $agent->prenom_agent = $request->prenom_agent;
        $agent->save();

        //* On peut aussi faire :
        //! ATTENTION : Cela va faire une erreur si on ne rajoute pas dans le models
        //! protected $fillable = ['nom_agent', 'prenom_agent'];
        //! cela permet de dire que la fonction create peut créer quand on le demande les champs dans l'array
        // Agent::create([
        //     'nom_agent' => $request->nom_agent,
        //     'prenom_agent' => $request->prenom_agent
        // ]);

        $nom_agent = $agent->nom_agent;
        return view('agent/addAgentOk', [
            'title' => 'Agent ajouté !',
            'nom_agent' => $nom_agent
        ]);
    }

    //* Test de fonction pour modifier un agent déjà créer
    public function update(Request $request)
    {
        
    }


    //* Test du ::where pour trouver une donnée en particulier
    //TODO faire un test plus tard
    public function testWhere($recherche)
    {
        $agent = Agent::where('nom_agent', '=', $recherche)->firstOrFail();

        return view('', [
            'agent' => $agent
        ]);
}
}