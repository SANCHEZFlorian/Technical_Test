<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AdController extends Controller
{

    //* Fonction qui renvoit toutes les annonces dans la BDD
    public function index()
    {
        $title = 'Liste de toutes les annonces';
        $annonce = Annonce::all();
        // dd($annonces);
        return view('allAd', [
            'title' => $title,
            'annonces' => $annonce,
        ]);
    }

    //* Fonction qui renvoie les informations d'une annonce en particulier
    public function show($annonce)
    {
        $annonce = Annonce::findOrFail($annonce);
        $title =`Annonce {{ $annonce->ref_annonce }}`;
        // dd($annonce);

        return view('Ad', [
            'title' => $title,
            'annonce' => $annonce
        ]);
    }

    //* Fonction qui renvoie sur la page de création d'une annonce
    public function create()
    {
        $title = 'Création d\'une nouvelle annonce';
        return view('addAd', [
            'title' => $title
        ]);
    }

    public function save(Request $request)
    {
        // dd($request);

        $annonce = new Annonce();
        $annonce->ref_annonce = $request->ref_annonce;
        $annonce->prix_annonce = $request->prix_annonce;
        $annonce->surface_habitable = $request->surface_habitable;
        $annonce->nombre_de_piece = $request->nombre_de_piece;
        $annonce->save();
    }
}
