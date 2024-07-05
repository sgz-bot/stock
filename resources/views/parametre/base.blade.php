<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- bootstrap --}}
     <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
     <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
     {{-- font awesome --}}
     <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <title>Document</title>
</head>
<body>

    <div class="" style="min-height: 100vh;">
        <div class="container-fluid">
            <div class="row">
                <div class="px-0 col-lg-2 text-white text-center" style="min-height: 100vh; background-color:rgb(116, 111, 111);">
                    <h5 class="bg-dark py-2">Paramètre</h5>
                    <h5 class="mt-3"><a href="{{ route("parametre.utilisateur") }}" class="text-white text-decoration-none">Utilisateur</a></h5>
                    <h5 class="mt-4"><a href="{{ route("parametre.parametreFinancier") }}" class="text-white text-decoration-none">Paramètres financiers</a></h5>
                    <h5 class="mt-4"><a href="{{ route("parametre.gestionDroits") }}" class="text-white text-decoration-none">Gestion des droits</a></h5>
                </div>
                <div class="col-lg-10 px-0">
                    @yield('contenu')
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('fontawesome/js/all.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>

