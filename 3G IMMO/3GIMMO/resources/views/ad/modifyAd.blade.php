@extends('layouts.app')

@section('content')
<h1> Modification de l'annonce {{ $annonce->ref_annonce }} :</h1>

<form method="POST" action="{{ route('modifyAd', ['id_Ad' => $annonce->id]) }}">

    @csrf

    <label for="ref_annonce">Nouvelle référence de l'annonce</label>
    <input type="text" name="ref_annonce" /><br>

    <label for="prix_annonce">Nouveau prix</label>
    <input type="text" name="prix_annonce" /><br>

    <label for="surface_habitable">Nouvelle surface habitable</label>
    <input type="text" name="surface_habitable" /><br>

    <label for="nombre_de_piece">Nouveau nombre de pièce</label>
    <input type="text" name="nombre_de_piece" /><br>

    <label for="agent_ad">Nouvel agent attitré</label>
    <select name="agent_ad" id="agent_ad">
        @foreach ($agents as $agent)
            <option value="{{ $agent->id }}">{{ $agent->nom_agent }} {{ $agent->prenom_agent }}</option>
        @endforeach
    </select>

    <input type="submit" value="Modifier l'agent" />
</form>

@endsection
