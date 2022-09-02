{{-- On explique à Laravel que ce bout de code est une extension d'un layout --}}
@extends('layouts.app')


{{-- On remplace dans le layout la partie yield('content') par ce qui se trouve ci-dessous --}}
@section('content')

<h1>{{ $title }}</h1>
<h2> {{ $title2 }}</h2>
<ul>
{{-- Grâce à Blade, on peut simplifier certaines choses. Comme l'intégration de PHP --}}
    @foreach ($tableau as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>

@endsection



