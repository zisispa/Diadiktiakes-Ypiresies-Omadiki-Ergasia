@extends('layouts.welcome')

@section('content')
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">SearchAid</a><button
                class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">ΠΛΗΡΟΦΟΡΙΕΣ</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">ΥΠΗΡΕΣΙΕΣ</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#search">ΑΝΑΖΗΤΗΣΗ</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">ΟΜΑΔΑ</a></li>

                    @auth
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="./user_settings.php">Settings User</a>
                                <a class="dropdown-item" href="./includes/logout.php">Log out</a>
                            </div>
                        </li> --}}
                    @else
                        <li class="nav-item"><a class="nav-link js-scroll-trigger bg-primary text-white rounded mr-2"
                                href="/login">ΣΥΝΔΕΣΗ</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger bg-dark text-white rounded pr-2"
                                href="/register">ΕΓΓΡΑΦΗ</a>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>

    <!-- MAIN Section-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-white font-weight-bold">Επέλεξε το <strong class="text-primary">προϊόν</strong> που
                        επιθυμείς και την <strong class="text-primary">περιοχή</strong> σου
                    </h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Μαθε Περισσοτερα</a>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#search">ΑΝΑΖΗΤΗΣΗ</a>
                </div>
            </div>
        </div>
    </header>

    <!-- ΠΛΗΡΟΦΟΡΙΕΣ Section-->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Βρες τώρα το προϊόν που επιθυμείς στο κοντινότερο κατάστημα με ένα κλικ
                    </h2>
                    <hr class="divider light my-4" />
                    <p class="text-white-50 mb-4">To <strong class="text-dark">SearchAid</strong>
                        είναι μια πρωτότυπη εφαρμογή που εντοπίζει το προϊόν της επιλογής σου στα πλησιέστερα
                        καταστήματα. Σε ενημερώνει για το απόθεμα του προϊόντος σου σε πραγματικό χρόνο και σε βοηθάει
                        να αποφύγεις τον
                        συνοστισμό στο κατάστημα. </p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#search">αναζητηση</a>
                </div>
            </div>
        </div>
    </section>


    <!-- ΥΠΗΡΕΣΙΑ Section-->
    <section class="page-section" id="services">
        <div class="container">
            <h2 class="text-center mt-0">Υπηρεσίες</h2>
            <hr class="divider my-4" />
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-search-location text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Η τοποθεσία σου</h3>
                        <p class="text-muted mb-0">Βρες την τοποθεσία σου στο χάρτη.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-utensils text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Το προϊόν σου</h3>
                        <p class="text-muted mb-0">Επέλεξε το προϊόν που επιθυμείς απο τη λίστα.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-users text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Eπισκέπτες</h3>
                        <p class="text-muted mb-0">Ενημερώσου για τους επισκέπτες που έχει το κατάστημα σε real time.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <i class="fas fa-4x fa-info-circle text-primary mb-4"></i>
                        <h3 class="h4 mb-2">Απόθεμα προϊόντος</h3>
                        <p class="text-muted mb-0">Ενήμερωσου για το απόθεμα προϊόντος στο κατάστημα της επιλογής σου.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ΑΝΑΖΗΤΗΣΗ Section-->
    <section class="page-section" id="search">
        <div class="container justify-content-center">
            <h2 class="text-center mt-0">Κάνε την αναζήτηση που θέλεις</h2>
            <hr class="divider my-4" />
            <div id="alerted">
            </div>
            <div class="row mb-4">
                <div class="col">
                    <form method="post">
                        <div class="form-group">
                            <label for="basic-url">Επέλεξε την περιοχή σου: </label>
                            <select id="select_address" name="select_address" class="form-control">
                                <option value="#">Περιοχή</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="basic-url">Δώσε το προϊόν που επιθυμείς:</label>
                            <select id="select_product" name="select_product" class="form-control">
                                <option value="#">Προϊόν</option>

                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row" id="show_products">

            </div>
        </div>
    </section>

    <!-- ΟΜΑΔΑ Section-->
    <section class=" page-section" id="contact">
        <div class="container justify-content-center">
            <h2 class="text-center mt-0">Η ομάδα μας</h2>
            <hr class="divider my-4" />
            <div class="row">
                <div class="col text-center">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/img/spatis.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Σπάτης Ζήσης</h5>
                            <p class="card-text text-dark">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/img/mpampis.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Χαράλαμπος Γ. Γεωργιάδης</h5>
                            <p class="card-text text-dark">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/img/smpilias.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Βασίλης Σμπήλιας</h5>
                            <p class="card-text text-dark">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright © 2020</div>
        </div>
    </footer>
@endsection
