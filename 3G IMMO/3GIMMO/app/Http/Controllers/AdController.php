<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Annonce;
use Illuminate\Http\Request;

class AdController extends Controller
{

    //* Fonction qui renvoit toutes les annonces dans la BDD
    public function listAd()
    {
        $title = 'Liste de toutes les annonces';
        $annonces = Annonce::all();
        // dd($annonces);
        return view('listAd', [
            'title' => $title,
            'annonces' => $annonces,
        ]);
    }

    //* Fonction qui renvoie sur la page de création d'une annonce
    public function createAd()
    {
        $agents = Agent::all();
        $title = 'Création d\'une nouvelle annonce';
        return view('ad/addAd', [
            'title' => $title,
            'agents' => $agents
        ]);
    }

    //! A CORRIGER pour la relation foreign key
    //* Fonction qui créera une nouvelle annonce dans la table annonces
    public function saveAd(Request $request)
    {
        $annonce = new Annonce();
        $annonce->ref_annonce = $request->ref_annonce;
        $annonce->prix_annonce = $request->prix_annonce;
        $annonce->surface_habitable = $request->surface_habitable;
        $annonce->nombre_de_piece = $request->nombre_de_piece;
        $annonce->save();

        return view('ad/addAdOk', [
            'title' => 'Annonce ajoutée !',
            'nom_agent' => $annonce->ref_annonce
        ]);
    }

    //* Fonction qui renvoie les informations d'une annonces en particulier
    public function viewAd($id_Ad)
    {
        $annonce = Annonce::findOrFail($id_Ad);
        $agents = Agent::all();
        $title =`Annonce {{ $annonce->ref_annonce }}`;

        return view('ad/modifyAd', [
            'title' => $title,
            'annonce' => $annonce,
            'agents' => $agents
        ]);
    }

    //* Fonction qui gère la modification d'une annonce
    public function modifyAd($id, Request $request)
    {
        $title =`Annonce {{ $request->nom_agent }} modifié`;
        $annonce = Annonce::findOrFail($id);
        $annonce->update([
            $annonce->ref_annonce = $request->ref_annonce,
            $annonce->prix_annonce = $request->prix_annonce,
            $annonce->surface_habitable = $request->surface_habitable,
            $annonce->nombre_de_piece = $request->nombre_de_piece,
            $annonce->agent_ID = $request->agent_ID
        ]);

        return view('agent/modifyAgentOK', [
            'title' => $title,
            'nom_agent' => $annonce->ref_annonce
        ]);
    }

    //* Fonction qui gère la suppression d'une annonce
    public function deleteAd($id)
    {

        $annonce = Annonce::findOrFail($id);

        $ref_annonce = $annonce->ref_annonce;
        $title =`Annonce {{ $ref_annonce }} supprimée`;

        $annonce->delete();

        return view('ad/deleteAdOK', [
            'title' => $title,
            'ref_annonce' => $ref_annonce
        ]);
    }
}
