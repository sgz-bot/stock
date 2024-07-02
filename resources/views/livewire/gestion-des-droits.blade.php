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
            <h3 class="text-center mb-3">Gestion des droits</h3>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Mot de passe utilisateurs</div>
                        <div class="card-body">
                            <select style="width: 100%;" class="form-select" multiple
                                aria-label="Multiple select example">
                                @foreach ($utilisateurs as $utilisateur)
                                    <option value="{{ $utilisateur->id }}" class="border py-2">
                                        @if ($utilisateur->nom != 'Admin')
                                            <div class="border">{{ $utilisateur->nom }}
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                {{ $utilisateur->motDePasse }}</div>
                                        @endif
                                    </option>
                                @endforeach
                            </select>
                            {{-- <div class="form-group">
                                <label for="ancien">Ancien</label>
                                <input type="text" class="form-control" id="ancien">
                            </div>
                            <div class="form-group">
                                <label for="nouveau">Nouveau</label>
                                <input type="text" class="form-control" id="nouveau">
                            </div>
                            <button class="btn btn-primary" type="submit">Changer</button> --}}
                        </div>
                    </div>
                </div>




                {{-- ------------------Ajout------------------------- --}}
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Ajouter utilisateurs</div>
                        <form wire:submit.prevent="ajouterUtilisateur">
                            <div class="card-body">
                                @if ($message)
                                    <div class="alert alert-success">
                                        {{ $message }}
                                    </div>
                                @endif
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Passe</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="nom" class="form-control"
                                                    wire:model="nom"></td>
                                            <td><input type="password" name="motDePasse" class="form-control"
                                                    wire:model="motDePasse"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-primary" type="submit">Ajouter</button>
                            </div>
                        </form>

                        @if($messageAdmin)
                            <div class="alert alert-success">
                                {{ $messageAdmin }}
                            </div>
                        @endif
                        <div class="card-header">Mot de passe administrateur</div>
                        <div class="card-header">
                            <form wire:submit.prevent="changerMotDePasseAdmin">
                                <div class="form-group">
                                    <label for="ancienMotDePasse">Ancien</label>
                                    <input type="text" class="form-control" id="ancienMotDePasse"
                                        wire:model="ancienMotDePasseAdmin">
                                </div>
                                <div class="form-group">
                                    <label for="nouveauMotDePasse">Nouveau</label>
                                    <input type="text" class="form-control" id="nouveauMotDePasse"
                                        wire:model="nouveauMotDePasseAdmin">
                                </div>
                                <button class="btn btn-primary" type="submit">Changer</button>
                            </form>
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
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="flexSwitchCheckChecked" wire:click="acces1"
                                    {{ in_array($droitsAcces[0], $autorisations) ? 'checked':'' }}>
                                <label class="form-check-label" for="flexSwitchCheckChecked">{{ $droitsAcces[0] }}</label>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                wire:click="acces2"
                                    id="flexSwitchCheckChecked" {{ in_array($droitsAcces[1], $autorisations) ? 'checked':'' }}>
                                <label class="form-check-label" for="flexSwitchCheckChecked">{{ $droitsAcces[1] }}</label>
                            </div>

                        </li>

                        <li class="list-group-item">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                wire:click="acces3"
                                    id="flexSwitchCheckChecked" {{ in_array($droitsAcces[2], $autorisations) ? 'checked':'' }}>
                                <label class="form-check-label" for="flexSwitchCheckChecked">{{ $droitsAcces[2] }}</label>
                            </div>

                        </li>

                        <li class="list-group-item">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                wire:click="acces4"
                                    id="flexSwitchCheckChecked" {{ in_array($droitsAcces[3], $autorisations) ? 'checked':'' }}>
                                <label class="form-check-label" for="flexSwitchCheckChecked">{{ $droitsAcces[3] }}</label>
                            </div>

                        </li>

                        <li class="list-group-item">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                wire:click="acces5"
                                    id="flexSwitchCheckChecked" {{ in_array($droitsAcces[4], $autorisations) ? 'checked':'' }}>
                                <label class="form-check-label" for="flexSwitchCheckChecked">{{ $droitsAcces[4] }}</label>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                wire:click="acces6"
                                    id="flexSwitchCheckChecked" {{ in_array($droitsAcces[5], $autorisations) ? 'checked':'' }}>
                                <label class="form-check-label" for="flexSwitchCheckChecked">{{ $droitsAcces[5] }}</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
