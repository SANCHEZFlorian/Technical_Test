@extends('layouts.app')

@section('content')
<h1>{{ $title }}</h1>

<a href="{{ route('createAgent') }}"><input type="button" value="Créer un nouvel agent"/></a>


<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
        </tr>
    </thead>
    <tbody>

@if ($agents->count() > 0)

        @foreach ($agents as $agent)
        <tr>
            <td>{{ $agent->nom_agent }}</td>
            <td>{{ $agent->prenom_agent }}</td>
            <td><a href="{{ route('viewAgent', ['id_agent' => $agent->id]) }}"><input type="button" value="Modifier l'agent"/></a></td>
            <td><a href="{{ route('deleteAgent', ['id_agent' => $agent->id]) }}"><input type="button" value="Supprimer l'agent"/></a></td>
        </tr>
        @endforeach

        @else
        <p>Aucun agent trouvé</p>
        @endif

    </tbody>
</table>

@endsection
