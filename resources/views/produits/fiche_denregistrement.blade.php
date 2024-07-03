@extends('base')

@section('title', 'Fiche d\'enrégistremet d\'un produit')

@section('content')

<div class="container">
    <h1 class="mb-4">Nouvelle fiche</h1>
    <!-- Formulaire d'enregistrement -->
    <form>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="code-article">Code article</label>
            <input type="text" class="form-control" id="code-article" placeholder="101">
          </div>
          <div class="form-group">
            <label for="designation">Désignation</label>
            <input type="text" class="form-control" id="designation" placeholder="">
          </div>
          <div class="form-group">
            <label for="categorie">Catégorie</label>
            <input type="text" class="form-control" id="categorie" placeholder="">
          </div>
          <div class="form-group">
            <label for="code-tva">Code TVA</label>
            <input type="number" class="form-control" id="code-tva" placeholder="0">
          </div>
          <div class="form-group">
            <label for="sous-categorie">Sous catégorie</label>
            <input type="text" class="form-control" id="sous-categorie" placeholder="">
          </div>
          <div class="form-group">
            <label for="marque">Marque</label>
            <input type="text" class="form-control" id="marque" placeholder="">
          </div>
          <div class="form-group">
            <label for="qte-stock">Qte stock</label>
            <input type="number" class="form-control" id="qte-stock" placeholder="">
          </div>
          <div class="form-group">
            <label for="qte-min">Qte Min.</label>
            <input type="number" class="form-control" id="qte-min" placeholder="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="gerer-stock">Gérer stock</label>
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="gerer-stock">
              <label class="custom-control-label" for="gerer-stock">On</label>
            </div>
          </div>
          <div class="form-group">
            <label for="fournisseur">Fournisseur</label>
            <input type="text" class="form-control" id="fournisseur" placeholder="">
          </div>
          <div class="form-group">
            <label for="ref-art-fournie">Ref art fournie</label>
            <input type="text" class="form-control" id="ref-art-fournie" placeholder="">
          </div>
          <div class="form-group">
            <label for="px-achat-ht">Px achat HT</label>
            <input type="number" class="form-control" id="px-achat-ht" placeholder="">
          </div>
          <div class="form-group">
            <label for="existe-aussi">Existe aussi emballé par</label>
            <input type="text" class="form-control" id="existe-aussi" placeholder="">
          </div>
          <div class="form-group">
            <label for="code-article-emballe">Code article emballé</label>
            <input type="text" class="form-control" id="code-article-emballe" placeholder="">
          </div>
          <div class="form-group">
            <label for="qte-emballee">Qte emballée</label>
            <input type="number" class="form-control" id="qte-emballee" placeholder="">
          </div>
          <div class="form-group">
            <label for="exclude-remises">Exclure des remises</label>
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="exclude-remises">
              <label class="custom-control-label" for="exclude-remises">Off</label>
            </div>
          </div>
          <div class="form-group">
            <label for="demander-serie">Demander n° de série</label>
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="demander-serie">
              <label class="custom-control-label" for="demander-serie">Off</label>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-group">
            <label for="vignette">Vignette</label>
            <textarea class="form-control my-2" id="remarques" rows="5"></textarea>
            <button type="button" class="btn btn-primary btn-block mb-2">Créer</button>
            <button type="button" class="btn btn-danger btn-block">Supprimer</button>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-danger">Tarif 1 (défaut)</h5>
              <div class="form-group">
                <label for="px-vente-tc-1">Px vente TC</label>
                <input type="number" class="form-control" id="px-vente-tc-1" placeholder="">
              </div>
              <div class="form-group">
                <label for="px-vente-ht-1">Px vente HT</label>
                <input type="number" class="form-control" id="px-vente-ht-1" placeholder="">
              </div>
              <div class="form-group">
                <span>Marge % : <span class="text-primary">Francs CFA</span> </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tarif 2</h5>
              <div class="form-group">
                <label for="px-vente-tc-2">Px vente TC</label>
                <input type="number" class="form-control" id="px-vente-tc-2" placeholder="">
              </div>
              <div class="form-group">
                <label for="px-vente-ht-2">Px vente HT</label>
                <input type="number" class="form-control" id="px-vente-ht-2" placeholder="">
              </div>
              <div class="form-group">
                <span>Marge % : <span class="text-primary">Francs CFA</span> </span>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tarif dégressif</h5>
              <div class="form-group">
                <label for="qte-degressif">si Qte &gt;</label>
                <input type="number" class="form-control" id="qte-degressif" placeholder="">
              </div>
              <div class="form-group">
                <label for="px-vente-tc-degressif">Px vente TC</label>
                <input type="number" class="form-control" id="px-vente-tc-degressif" placeholder="">
              </div>
              <div class="form-group">
                <label for="px-vente-ht-degressif">Px vente HT</label>
                <input type="number" class="form-control" id="px-vente-ht-degressif" placeholder="">
              </div>
              <div class="form-group">
                <span>Marge % : <span class="text-primary">Francs CFA</span> </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="px-min-tc">Px min. TC</label>
            <input type="number" class="form-control" id="px-min-tc" placeholder="">
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="remarques">Remarques</label>
            <textarea class="form-control" id="remarques" rows="5"></textarea>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="articles-associes">Articles associés</label>
            <div class="list-group my-2" id="articles-associes">
              <select class="form-select" size="3" aria-label="Size 3 select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <button type="button" class="btn btn-secondary btn-block">Gérer</button>
          </div>

        </div>
        <div class="col-md-4">
          <label for="conditionnement">Information pour étiquetage</label>
          <input type="text" class="form-control mb-2" id="conditionnement" placeholder="Conditionnement">
          <input type="number" class="form-control" id="qte-cond" placeholder="Qte Cond">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Sauver</button>
    </form>
  </div>
    
@endsection