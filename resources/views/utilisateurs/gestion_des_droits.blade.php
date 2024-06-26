@extends('base')

@section('title', 'Gestion des droits')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 bg-dark text-white p-3">
            <h3 class="text-center">PARAMETRES</h3>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">Utilisateur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Paramètres financier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gestion des droits</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 p-3 bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Entreprise</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="nom" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="nom" value="Data-Concept SPRL">
                                    </div>
                                    <div class="mb-3">
                                        <label for="adresse" class="form-label">Adresse</label>
                                        <input type="text" class="form-control" id="adresse"
                                            value="Avenue Bel-air, 1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="ville" class="form-label">Ville</label>
                                        <input type="text" class="form-control" id="ville" value="Rixensart">
                                    </div>
                                    <div class="mb-3">
                                        <label for="code-postal" class="form-label">Code postal</label>
                                        <input type="text" class="form-control" id="code-postal" value="1330">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tel" class="form-label">Tel</label>
                                        <input type="text" class="form-control" id="tel" value="0495 222 888">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fax" class="form-label">Fax</label>
                                        <input type="text" class="form-control" id="fax" value="02 537124040">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-Mail</label>
                                        <input type="email" class="form-control" id="email"
                                            value="info@data-concept.be">
                                    </div>
                                    <div class="mb-3">
                                        <label for="n-tva" class="form-label">N° TVA</label>
                                        <input type="text" class="form-control" id="n-tva" value="BE0666777888">
                                    </div>
                                    <div class="mb-3">
                                        <label for="banque" class="form-label">Banque</label>
                                        <input type="text" class="form-control" id="banque"
                                            value="Banque AXA - IBAN: BE72 7777 4444 3333">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Paramètre régional</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="decimals">Décimales</label>
                                            <input type="number" class="form-control" id="decimals" value="2">
                                        </div>
                                        <div class="form-group">
                                            <label for="symbol">Symbole monétaire</label>
                                            <input type="text" class="form-control" id="symbol" value="€">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 my-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Objectif journalier</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="ca">C.A</label>
                                            <input type="number" class="form-control" id="ca" value="1000">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 my-3">
                                <div class="card">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="button">Button</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>
    
@endsection