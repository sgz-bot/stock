{{-- <div class="container-fluid">
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
            <h3 class="text-center mb-3">Paramètres financier</h3>
            <div class="card bg-light mb-1">
                <div class="card-header">Paramètres financier</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title">Taux de TVA</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tva1"> (A) TVA 1</label>
                                <input type="number" class="form-control" id="tva1" value="21">
                                <span class="text-muted">%</span>
                            </div>
                            <div class="form-group">
                                <label for="tva2"> (B) TVA 2</label>
                                <input type="number" class="form-control" id="tva2" value="20">
                                <span class="text-muted">%</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tva3"> (C) TVA 3</label>
                                <input type="number" class="form-control" id="tva3" value="0">
                                <span class="text-muted">%</span>
                            </div>
                            <div class="form-group">
                                <label for="tva4"> (D) TVA 4</label>
                                <input type="number" class="form-control" id="tva4" value="0">
                                <span class="text-muted">%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card bg-light mb-3">
                <div class="card-header">Fidélité</div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="loyalty">
                            <label class="form-check-label" for="loyalty">
                                Activer la fidélité
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bonus">Un bonus de 10</label>
                        <input type="number" class="form-control" id="bonus" value="10">
                        <span class="text-muted">Sera accordé après un total d'achat de 200</span>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button" style="width: 100%;">Button</button>
            </div>

        </div>
    </div>
</div> --}}

<div>
    <div class="d-flex justify-content-between text-white py-2 px-2" style="background-color: rgb(33, 33, 236)">
        <div>Paramètre financier</div>
        <div>Retour</div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-5">
                @if ($message)
                <div class="alert alert-success">{{ $message }}</div>
                @endif
                <h5 class="mb-4">Taux de TVA</h5>

                <div class="mb-4">
                    (A)TVA 1 <input wire:model.live="tva1Db" type="text" class="text-center" style="width: 80px" value="{{ $tva1 }}">% &nbsp;&nbsp;&nbsp;&nbsp;
                    (C)TVA 3 <input wire:model.live="tva3Db" type="text" class="text-center" style="width: 80px" value="{{ $tva3 }}">%
                    {{-- <div>{{ $test }}</div> --}}
                </div>

                <div>
                    (B)TVA 2 <input wire:model.live="tva2Db" wire:model.live="test" type="text" class="text-center" style="width: 80px" value="{{ $tva2 }}">% &nbsp;&nbsp;&nbsp;&nbsp;
                    (D)TVA 4 <input wire:model.live="tva4Db" type="text" class="text-center" style="width: 80px" value="{{ $tva4 }}">%
                </div>

                <h5 class="mt-4">Mode de paiement</h5>

                <button wire:click="enregistrer">Enregistrer</button>
            </div>
        </div>
    </div>
</div>
