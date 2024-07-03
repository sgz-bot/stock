@extends('base')

@section('title', 'Gestion des droits')

@section('content')

<<<<<<< HEAD
    <livewire:gestionDesDroits />
=======
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-dark text-white p-3" style="min-height: 100vh">
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
                <h3 class="text-center mb-3">Gestion des droits</h3>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Mot de passe utilisateurs</div>
                            <div class="card-body">
                                <select style="width: 100%;" class="form-select" multiple
                                    aria-label="Multiple select example">
                                    <option selected>Les utilisateurs</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="form-group">
                                    <label for="ancien">Ancien</label>
                                    <input type="text" class="form-control" id="ancien">
                                </div>
                                <div class="form-group">
                                    <label for="nouveau">Nouveau</label>
                                    <input type="text" class="form-control" id="nouveau">
                                </div>
                                <button class="btn btn-primary" type="submit">Changer</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Ajouter utilisateurs </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Passe</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control"></td>
                                            <td><input type="text" class="form-control"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-primary" type="submit">Ajouter</button>
                            </div>
                            <div class="card-header">Mot de passe administrateur</div>
                            <div class="card-header">
                                <div class="form-group">
                                    <label for="ancien">Ancien</label>
                                    <input type="text" class="form-control" id="ancien">
                                </div>
                                <div class="form-group">
                                    <label for="nouveau">Nouveau</label>
                                    <input type="text" class="form-control" id="nouveau">
                                </div>
                                <button class="btn btn-primary" type="submit">Changer</button>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="text-center mb-3">Droits</h3>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Accès aux produits</label>
                                  </div>
                                  
                            </li>
                            <li class="list-group-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Accès aux clients</label>
                                  </div>
                                  
                            </li>
                            <li class="list-group-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Accès aux fournisseurs</label>
                                  </div>
                                  
                            </li>
                            <li class="list-group-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Accès aux Ventes</label>
                                  </div>
                                  
                            </li>
                            <li class="list-group-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Accès au Dossiers</label>
                                  </div>
                                  
                            </li>
                            <li class="list-group-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Paramètres - Aide</label>
                                  </div>
                                  
                            </li>
                            <li class="list-group-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Accès aux Outils</label>
                                  </div>
                                  
                            </li>
                            <li class="list-group-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Gérer le stock</label>
                                  </div>
                                  
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Clôture caisse</label>
                                  </div>
                                  
                            </li>
                            <li class="list-group-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Modifier prix et remises</label>
                                  </div>
                                  
                            </li>
                            <li class="list-group-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Ouverture tiroir sans vente</label>
                                  </div>
                                  
                            </li>
                            <li class="list-group-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Acces au Réparations</label>
                                  </div>
                                  
                            </li>
                            <li class="list-group-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Rappel ticket</label>
                                  </div>
                                  
                            </li>
                            <li class="list-group-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Ajouter fiche produit</label>
                                  </div>
                                  
                            </li>
                            <li class="list-group-item">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Modif/Suppr fiche produit</label>
                                  </div>
                                  
                            </li>
                        </ul>
                    </div>
                </div>
>>>>>>> a7a62c06bf49be2881ce42d42f682d5de285d84e

@endsection
