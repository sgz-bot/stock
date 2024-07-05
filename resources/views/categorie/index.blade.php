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

    <title>Gestion des catégories</title>
    <style>
        /* Réinitialisation des marges et paddings */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Conteneur principal prenant toute la hauteur de la fenêtre */
        .main-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Exemple de contenu flexible */
        .content {
            flex: 1;
            overflow: hidden; /* Assurer qu'aucun débordement ne provoque de défilement */
        }

        
    </style>
</head>

<body>

    <div class="main-container">
        <div class="content">
            <livewire:categorie />
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
