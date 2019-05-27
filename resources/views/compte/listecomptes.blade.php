@include('layout/css')
    @include('layout/header')


    <a href="compReg.blade.php"> <h3>Créer un nouveau compte</h3></a>
<h3>Comptes</h3>
<ul>

    @if ($comptes->count()<1)
    <li>il nya aucun compte crée</li>
    @else @foreach ($comptes as $item)
    <li>compte de <a href="{{ route('compte.show' ,$item )}}">   {{ $item->nom_utilisateur }}</a></li>
    @endforeach @endif

</ul>

