<div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 p-0 text-center" style="min-height: 100vh; background-color:rgb(82, 67, 67);">
                <h4 class="bg-dark text-white fw-bold py-2">CATEGORIES</h4>

                <div>
                    @foreach ($categories as $categorie)
                        <div style="cursor: pointer;" class="py-2 text-white" wire:key="{{ $categorie->id }}"
                            wire:click="selectionnerCategorie({{ $categorie->id }})">{{ $categorie->libelle }}</div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-10 px-0">
                <div class="d-flex justify-content-between text-white py-2 px-2"
                    style="background-color: rgb(33, 33, 236)">
                    <div>Catégories de produits</div>
                    <div>Retour</div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col px-0">
                            <div class="py-4 px-2" style="background-color: rgb(223, 215, 215)">
                                <label for="">Nouvelle catégorie</label>
                                <div>
                                    <input type="text" wire:model="designationNouvelleCategorie"> <button
                                        class="px-3 border-1" wire:click="enregistrerNouvelCategorie">Ajouter</button>
                                </div>
                            </div>

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h6>Catégorie actuelle</h6>
                                        <div class="mb-2 mt-5">
                                            @if ($libelleCategorieSelectionner)
                                                <span class="text-danger">
                                                    {{ $libelleCategorieSelectionner }}
                                                </span><br>
                                            @endif

                                            <button class="px-2 border-1"
                                                wire:click="supprimerCategorie">Supprimer</button>
                                        </div>
                                        <div>
                                            <button class="px-2 border-1" wire:click="renommer">Renommer</button>
                                            <input type="text" wire:model="libelleCategorieRenomme">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6 class="mb-2">TVA par défaut</h6>
                                        Appliquée {{ $tvaChoisie }} %
                                        <select name="" id="" class="mt-4" style="width: 80px"
                                            wire:model.live="tvaChoisie">
                                            <option value="{{ $tva1 }}">1</option>
                                            <option value="{{ $tva2 }}">2</option>
                                            <option value="{{ $tva3 }}">3</option>
                                            <option value="{{ $tva4 }}">4</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <h6>Sous Catégorie</h5>
                                            <select name="" id="" class=""
                                                style="height:140px; width:200px" multiple wire:model="idSousCategorieASupp">

                                                @if ($categorieSelectionner)
                                                    @foreach ($categorieSelectionner->sousCategories as $sousCategorie)
                                                        <option class="border" style="width: 95%" value="{{ $sousCategorie->id }}">{{ $sousCategorie->libelle }}</option>
                                                    @endforeach
                                                @endif


                                            </select>

                                            <input type="text" class="mt-2" style="width:200px"
                                                wire:model="libelleSousCategorie">

                                            <div class="mt-2">
                                                <button class="px-2 border-1"
                                                    wire:click="ajouterSousCategorie">Ajouter</button>

                                                <button class="px-2 border-1" wire:click="supprimerSousCategorie">Supprimer</button>
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

</div>
