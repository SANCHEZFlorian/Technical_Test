@extends('layouts.app')

@section('content')
<h1> Création d'une nouvelle annonce :</h1>

<form method="POST" action="{{ route('saveAd') }}">

    {{-- //! ATTENTION : Laravel refuse le formulaire si on ne rajoute pas de jeton CSRF --}}
    {{-- //! Ce jeton protège des failles  --}}
    @csrf

    <label for="ref_annonce">Référence de l'annonce</label>
    <input type="text" name="ref_annonce" /><br>

    <label for="prix_annonce">Prix</label>
    <input type="text" name="prix_annonce" /><br>

    <label for="surface_habitable">Surface habitable</label>
    <input type="text" name="surface_habitable" /><br>

    <label for="nombre_de_piece">Nombre de pièce</label>
    <input type="text" name="nombre_de_piece" /><br>

    <input type="submit" value="Créer l'annonce" />
</form>

@endsection
