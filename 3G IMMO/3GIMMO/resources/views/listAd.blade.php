@extends('layouts.app')

@section('content')
<h1>{{ $title }}</h1>

<a href="{{ route('createAd') }}"><input type="button" value="Créer une nouvelle annonce"/></a>


<table>
    <thead>
        <tr>
            <th>Référence</th>
            <th>Prix</th>
            <th>Surface habitable</th>
            <th>Nombre de pièce</th>
            <th>Agent</th>
        </tr>
    </thead>
    <tbody>

        {{--* On teste si il y a des annonces. Si oui, on les affiche, sinon on le dit --}}
        @if ($annonces->count() > 0)

        @foreach ($annonces as $annonce)
        <tr>
            <td>{{ $annonce->ref_annonce }}</td>
            <td>{{ $annonce->prix_annonce }}</td>
            <td>{{ $annonce->surface_habitable }}</td>
            <td>{{ $annonce->nombre_de_piece }}</td>
            <td>{{ $annonce->agent_ID }}</td>
            <td><a href="{{ route('viewAd', ['id_Ad' => $annonce->id]) }}"><input type="button" value="Modifier l'annonce"/></a></td>
            <td><a href="{{ route('deleteAd', ['id_Ad' => $annonce->id]) }}"><input type="button" value="Supprimer l'annonce"/></a></td>
        </tr>
        @endforeach

        @else
        <p>Aucune annonce trouvée</p>
        @endif

    </tbody>
</table>

@endsection
