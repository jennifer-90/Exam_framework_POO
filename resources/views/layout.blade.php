<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--TITLE-->
    <title>@yield('title')</title>
</head>


<body>
<div style="text-align: center; font-size: 2rem">* * POO FRAMEWORK EXAMEN * *</div>

<!-- MENU -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('welcome') }}">Accueil</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('routelescours') }}">Nos cours</a>
            </li>

            @if(session('userId'))

                @if(session('admin')== 1)
                    <!-- pas obligatoire " ==1" car le test est de base booléen, et renvoie
                true(=1) si c'est vrai-->

                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('routelescopains') }}">Admin</a>
                    </li>

                @endif

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('profil', session('userId')) }}">Mon profil</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('logout') }}">Déconnexion</a>
                </li>

            @else

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            @endif

        </ul>
    </div>
</nav>

<!-- GESTION DES MESSAGES-->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!--CONTENT -->
<main>
    @yield('content')
</main>

<!--BOOTSTRAP SCRIPT-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
