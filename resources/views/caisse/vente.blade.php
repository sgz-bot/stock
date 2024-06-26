@extends('base')

@section('title', 'Caisse')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar">
            <h4 style="text-align: center;">Catégorie</h4>
            <div class="nav flex-column">
                <button class="nav-link text-dark active">PC</button>
                <button class="nav-link text-dark fw-bold">Claviers</button>
                <button class="nav-link text-dark fw-bold">Memoires</button>
                <button class="nav-link text-dark fw-bold">Disque Dur</button>
                <button class="nav-link text-dark fw-bold">Ecrans</button>
                <button class="nav-link text-dark fw-bold">Sacs/Housses</button>
                <button class="nav-link text-dark fw-bold">Accessoires</button>
                <button class="nav-link text-dark fw-bold">Adaptateurs</button>
                <button class="nav-link text-dark fw-bold">Reseau</button>
            </div>
        </div>
        <div class="col-md-7 content">
            <div class="row">

                <!-- formulaire de recherche -->
                <div class="container">
                    <form class="row g-3">
                        <div class="col-auto">
                            <input type="password" class="form-control" id="inputSearch" placeholder="Recherche">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>


                <!-- Example product card -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">ASUS PK22</h5>
                            <p class="card-text">320</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">ASUS PK22</h5>
                            <p class="card-text">320</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">ASUS PK22</h5>
                            <p class="card-text">320</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">ASUS PK22</h5>
                            <p class="card-text">320</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">ASUS PK22</h5>
                            <p class="card-text">320</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">ASUS PK22</h5>
                            <p class="card-text">320</p>
                        </div>
                    </div>
                </div>
                <!-- Add more product cards similarly -->
            </div>
        </div>
        <div class="col-md-3 sales">
            <h4>Ventes caisse</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Article</th>
                        <th>Qte</th>
                        <th>Px Total</th>
                        <th>%</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sales items go here -->
                    <tr>
                        <td>PC</td>
                        <td>10</td>
                        <td>100 Francs</td>
                        <td>18%</td>
                    </tr>
                </tbody>
            </table>
            <div class="">
                <form action="">
                    <select style="width: 100%;" class="form-select" multiple aria-label="Multiple select example">
                        <option selected style="text-align: center;">Liste des produits</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="action mt-3 mb-3 my-3">
                        <button class="btn btn-danger"><i class="fa-solid fa-minus"></i></button>
                        <button class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                        <button class="btn btn-warning"><span class="text-light fw-bold">%</span></button>
                        <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </form>
            </div>
            <div class="total mt-3">
                <h5>Total: 0,00 Francs</h5>
            </div>
            <div class="buttons mt-3" style="text-align: center;">
                <button class="btn btn-light"><i class="fa-solid fa-money-bill-1-wave"></i><br> Rap. ticket</button>
            </div>
        </div>
    </div>
</div>
    
@endsection