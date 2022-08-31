@extends('layouts.app')

@section('content')

<p> {{ $agents }} </p>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>

        </tr>
    </thead>
    <tbody>
@foreach ($agents as $agent)
        <tr>
            <td>{{ $agent->nom_agent }}</td>
            <td>{{ $agent->prenom_agent }}</td>
        </tr>
@endforeach
    </tbody>
</table>


@endsection



