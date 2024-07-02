@extends('base')

@section('title', 'Accueil-dashbord')

@section('content')

    <section class="bg-dark text-light">
        <div class="container-fluid p-4">

            <div class="row mt-4">
                <div class="col-1">
                    <div class="d-flex flex-column align-items-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/467/467652.png" alt="Poste Icon" width="25px"
                            height="25px">
                        <span>Poste n° 1</span>
                    </div>
                </div>
                <div class="col-11 d-flex justify-content-end align-items-center">
                    <div class="d-flex flex-column align-items-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/3236/3236550.png" alt="User Icon" width="25px"
                            height="25px">
                        <span>Inconnu</span>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <h1>Accueil</h1>
                </div>

            </div>



            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-center">
                        <div class="container-fluid p-4">
                            <div class="row mt-4">
                                <div class="col-3">
                                    <a href="#" style="text-decoration: none;">
                                        <div class="card bg-warning text-dark">
                                            <div class="card-body d-flex flex-column align-items-center">
                                                <i class="fa-solid fa-cash-register fa-3x"></i>
                                                <h5 class="card-title mt-3">Aujourd'hui</h5>
                                                <p class="card-text">0 tickets créés</p>
                                                <p class="card-text">0,00 CA</p>
                                                <p class="card-text">Ventes caisse & Gestion</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="#" style="text-decoration: none;">
                                        <div class="card bg-primary text-light">
                                            <div class="card-body d-flex flex-column align-items-center">
                                                <i class="fa-solid fa-cart-plus fa-3x"></i>
                                                <h5 class="card-title mt-3">Fournisseurs</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="#" style="text-decoration: none;">
                                        <div class="card bg-secondary text-light">
                                            <div class="card-body d-flex flex-column align-items-center">
                                                <i class="fa-solid fa-basket-shopping fa-3x"></i>
                                                <h5 class="card-title mt-3">Produits</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="#" style="text-decoration: none;">
                                        <div class="card bg-info text-light">
                                            <div class="card-body d-flex flex-column align-items-center">
                                                <i class="fa-solid fa-hand-holding-dollar fa-3x"></i>
                                                <h5 class="card-title mt-3">Dernière clôture</h5>
                                                <p class="card-text">Clôture de caisse</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-3">
                                    <a href="#" style="text-decoration: none;">
                                        <div class="card bg-secondary text-light">
                                            <div class="card-body d-flex flex-column align-items-center">
                                                <i class="fa-solid fa-right-left fa-3x"></i>
                                                <h5 class="card-title mt-3">Gestion stock</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="#" style="text-decoration: none;">
                                        <div class="card bg-secondary text-light">
                                            <div class="card-body d-flex flex-column align-items-center">
                                                <i class="fa-solid fa-right-left fa-3x"></i>
                                                <h5 class="card-title mt-3">Paramètre</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <div class="card bg-dark text-light">
                                        <div class="card-body d-flex flex-column align-items-center">
                                            <h1 class="card-title mt-3">{{ now()->toTimeString() }}</h1>
                                            <p class="card-text">{{ now()->locale('fr')->isoFormat('dddd, D MMMM YYYY') }}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <div class="row mt-4">
                                <div class="col-12">
                                    <p class="text-center">Obligation de conservation de vos données : pour votre sécurité,
                                        effectuer un
                                        backup externe de vos données</p>
                                </div>
                            </div>
                            <div class="row mt-4 d-flex justify-content-end align-items-center">
                                <div class="col-1">
                                    <div class="d-flex flex-column align-items-center">
                                        <img src="https://cdn-icons-png.flaticon.com/512/3236/3236551.png"
                                            alt="Document Icon" width="25px" height="25px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4"></div>


                </div>
            </div>

    </section>

@endsection
