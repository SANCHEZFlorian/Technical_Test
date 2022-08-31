{{-- Ces parties nous permettent d'avoir un fichier plus lisible qui pourra être modifier rapidement --}}
{{-- Dans notre cas, si on avait placer la navbar dans le layout, mais que le layout faisait 10.000 lignes de code --}}
{{-- On serait facilement perdu. Là, cela nous permet de remplacer facilement les routes si besoin --}}


<ul>
{{-- Le  {{ route('accueil') }} est possible car on a donné un nom dans le fichier des routes à cette route --}}
<li><a href="{{ route('accueil') }}">Accueil</a></li>
</ul>

<h3>/!\ TEST /!\ Route de test /!\ TEST /!\</h3>
<ul>
<li><a href="{{ route('testAccueil') }}">Test Accueil</a></li>
<li><a href="{{ route('testAgent') }}"> Test affichage des agents</a></li>
<li><a href="{{ route('createAgent') }}"> Test création d'agent</a></li>

</ul>