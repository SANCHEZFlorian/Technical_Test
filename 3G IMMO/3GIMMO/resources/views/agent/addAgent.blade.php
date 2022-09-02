@extends('layouts.app')

@section('content')
<h1> Création d'un nouvel agent :</h1>

<form method="POST" action="{{ route('saveAgent') }}">

    {{--! ATTENTION : Laravel refuse le formulaire si on ne rajoute pas de jeton CSRF --}}
    {{--! Ce jeton protège des failles  --}}
    @csrf

    <label for="nom_agent">Nom de l'agent</label>
    <input type="text" name="nom_agent" /><br>

    <label for="prenom_agent">Prénom de l'agent</label>
    <input type="text" name="prenom_agent" /><br>



    <input type="submit" value="Créer l'agent" />
</form>

@endsection
