@extends('layouts.app')

@section('content')
<h1> Modification de l'agent {{ $agent->nom_agent }} {{ $agent->prenom_agent }} :</h1>

<form method="POST" action="{{ route('modifyAgent', ['id_agent' => $agent->id]) }}">

    @csrf

    <label for="nom_agent">Nouveau nom de l'agent</label>
    <input type="text" name="nom_agent" /><br>

    <label for="prenom_agent">Nouveau prénom de l'agent</label>
    <input type="text" name="prenom_agent" /><br>



    <input type="submit" value="Modifier l'agent" />
</form>

@endsection
