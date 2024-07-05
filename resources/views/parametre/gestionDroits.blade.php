@extends('parametre.base')

@section('titre')
    Gestion des droits
@endsection

@section('contenu')
    <style>
         .scrollable-container {
            width: 360px; /* Largeur du conteneur */
            height: 250px; /* Hauteur du conteneur */
            overflow: auto; /* Activer les barres de défilement */
            border: 1px solid #ccc; /* Optionnel : pour une meilleure visibilité */
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #eeecec;
            padding: 2px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    <livewire:gestionDesDroits />
@endsection
