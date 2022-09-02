<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{

    //* Fonction qui renvoit tous les agents qui sont dans la BDD
    public function listAgent()
    {
        $title = 'Liste de tous les agents';
        $agents = Agent::all();
        // dd($agents);
        return view('agent/listAgents', [
            'title' => $title,
            'agents' => $agents,
        ]);
    }

    //* Fonction pour renvoyer la vue de la page de création d'un agent
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
        $agent = new Agent();
        $agent->nom_agent = $request->nom_agent;
        $agent->prenom_agent = $request->prenom_agent;
        $agent->save();
        $nom_agent = $agent->nom_agent;
        return view('agent/addAgentOk', [
            'title' => 'Agent ajouté !',
            'nom_agent' => $nom_agent
        ]);
    }

    //* Fonction qui renvoie les informations d'un agent en particulier
    public function viewAgent($id_agent)
    {
        $agent = Agent::findOrFail($id_agent);
        $title =`Agent {{ $agent->nom_agent }}`;

        return view('agent/modifyAgent', [
            'title' => $title,
            'agent' => $agent
        ]);
    }

    //* Fonction qui gère la modification d'un agent
    public function modifyAgent($id, Request $request)
    {
        $title =`Agent {{ $request->nom_agent }} modifié`;


        $agent = Agent::findOrFail($id);

        //! Ne fonctionne pas mais une idée
        // $agent = Agent::where('nom_agent', '=', $request->nom_agent)->get();

        $agent->update([
            'nom_agent' => $request->nom_agent,
            'prenom_agent' => $request->prenom_agent,
        ]);

        $nom_agent = $request->nom_agent;

        return view('agent/modifyAgentOK', [
            'title' => $title,
            'nom_agent' => $nom_agent
        ]);
    }

    //* Fonction qui gère la suppression d'un agent
    public function deleteAgent($id)
    {

        $agent = Agent::findOrFail($id);

        $nom_agent = $agent->nom_agent;
        $title =`Agent {{ $nom_agent }} supprimé`;

        $agent->delete();

        return view('agent/deleteAgentOK', [
            'title' => $title,
            'nom_agent' => $nom_agent
        ]);
    }
}
