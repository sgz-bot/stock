<div>
    <div class="d-flex justify-content-between text-white py-2 px-2" style="background-color: rgb(33, 33, 236)">
        <div>Nouvelle fiche</div>
        <div>
            <span class="" wire:click="enregistrer" style="cursor: pointer;">Sauver</span> &nbsp;
            <span class="">Retour</span>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <div>
                    <label for="">Code article</label> <br>
                    <input type="text" wire:model="codeArticle">
                </div>

                <div>
                    <label for="">Désignation</label> <br>
                    <input type="text" wire:model="designation">
                </div>

                <div class="d-flex justify-content-between">
                    <div>
                        <label for="">Catégorie</label> <br>
                        <select name="" id="" wire:model="idCategorie">
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->libelle }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div>
                        <label for="">Code TVA</label> <br>
                        <select name="" id="" class="w-100">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div>
                        <label for="">Sous catégorie</label> <br>
                        <select name="" id="" class="w-100">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Marque</label> <br>
                        <select name="" id="" style="width: 200px">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label for="">Stock</label>
                    <div class="d-flex justify-content-between">
                        <div>
                            <label for="">Qte stock</label> <br>
                            <input type="text" class="w-50">
                        </div>
                        <div>
                            <label for="">Qte Min.</label> <br>
                            <input type="text" class="w-50">
                        </div>
                        <div>
                            <div class="toggle-container">
                                <span class="toggle-label">Gérer stock</span>
                                <label class="toggle-switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <div>
                            <label for="">Fournisseur</label> <br>
                            <input type="text" class="w-50">
                        </div>
                        <div>
                            <label for="">Ref art fourni.</label> <br>
                            <input type="text" class="w-50">
                        </div>
                        <div>
                            <label for="">Prix achat HT</label> <br>
                            <input type="text" class="w-50">
                        </div>
                    </div>
                </div>


                <div>
                    <label for="" class="text-primary">Existe aussi emballé par</label>


                    <div class="d-flex justify-content-between">
                        <div>
                            <label for="">Qte stock</label> <br>
                            <input type="text" class="w-50">
                        </div>
                        <div>
                            <label for="">Qte Min.</label> <br>
                            <input type="text" class="w-50">
                        </div>
                        <div class="w-50">

                        </div>
                    </div>
                </div>

                <div>
                    <div class="toggle-container d-inline-block">
                        <span class="toggle-label">Exclure des remises</span>
                        <label class="toggle-switch" style="display: inline-block">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="toggle-container d-inline-block">
                        <span class="toggle-label">Demander num de serie</span>
                        <label class="toggle-switch" style="display: inline-block">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 border d-flex flex-column justify-content-between">
                <div>
                    <label for="" class="fw-bold">Vignette</label>
                    <div class="d-flex">
                        <div class="mt-4">
                            <button class="d-inline-block mb-3">Créer</button> <br>
                            <button>Supprimer</button>
                        </div>

                        <div class="border" style="height: 100px; width: 150px;" class=" border border-dark">
                        </div>
                    </div>
                </div>

                <div class="border">
                    <div>
                        <label for="">Tarif 1 (défaut)</label>
                        <div class="d-flex">
                            <div>
                                <label for="">Prix vente TC</label><br>
                                <input type="text" class="w-50">
                            </div>
                            <div>
                                <label for="">Prix vente HT</label> <br>
                                <input type="text" class="w-50">
                            </div>
                            <div>
                                <label for="">Marge</label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="">Tarif 2</label>
                        <div class="d-flex">
                            <div>
                                <label for="">Prix vente TC</label><br>
                                <input type="text" class="w-50">
                            </div>
                            <div>
                                <label for="">Prix vente HT</label> <br>
                                <input type="text" class="w-50">
                            </div>
                            <div>
                                <label for="">Marge</label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="d-flex justify-content-between">
                            <label for="" class="d-inline-block">Tarif dégressif</label>
                            <div>Si Qte ></div>
                            <div style="height: 20px; width:30px" class="border border-2"></div>
                        </div>
                        <div class="d-flex">
                            <div>
                                <label for="">Prix vente TC</label><br>
                                <input type="text" class="w-50">
                            </div>
                            <div>
                                <label for="">Prix vente HT</label> <br>
                                <input type="text" class="w-50">
                            </div>
                            <div>
                                <label for="">Marge</label>
                            </div>
                        </div>

                        <div>
                            <label for="">Prix min.TC</label> <br>
                            <input type="text" class="w-25">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
