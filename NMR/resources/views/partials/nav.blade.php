<nav>
    <a href="/"><span>{{ config('app.name') }}</span><img src="" alt=""></a>
    <a href="/">Accueil</a>
    <a href="{{ route('recette.index') }}">Recettes</a>
    <a href="/users">Users</a>
    <a href="{{ route('user.create') }}">User Create</a>
    <a href="{{ route('login') }}">Login
</nav>
