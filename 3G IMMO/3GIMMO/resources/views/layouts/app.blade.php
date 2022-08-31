{{-- Un layout est un template qu'on peut récupérer et réutiliser où on l'appelle dans les vues Blade--}}

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- On peut récupérer des donées qui sont envoyées du contrôleur avec les doubles accolades --}}
    <title>{{ $title }}</title>
</head>

<body>

    {{-- On inclut un autre bout. Pour le coup, on inclut la navigation --}}
    @include('partials.navbar')

    {{-- On créait un emplacement qui pourra être remplacé dans un autre fichier blade. On donne le nom de l'emplacement, en l'occurence : content --}}
    @yield('content')

</body>
</html>
