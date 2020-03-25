<?php require 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SearchAid - App</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
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
                        επιθυμείς και την <strong class="text-primary">τοποθεσία</strong> σου
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
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">αναζητηση</a>
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

    <!-- //Προιοντα πρωτης αναγκης
// //αλευρι
// νερο
// ζυμαρικα
// γαλα
// αντισειπτικα
// μασκες
// γαντια
// χαρτι υγειας
// λαδι
// οινοπνευμα -->

    <!-- ΑΝΑΖΗΤΗΣΗ Section-->
    <section class="page-section" id="search">
        <div class="container">
            <h2 class="text-center mt-0">Κάνε την αναζήτηση που θέλεις</h2>
            <hr class="divider my-4" />
            <div class="row mb-4">
                <div class="col">
                    <div class="form-group">
                        <label for="basic-url">Δώσε την τοποθεσία σου:</label>
                        <input type="text" placeholder="Τοποθεσία" id="searchInput" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="basic-url">Δώσε το προϊόν που επιθυμείς: </label>
                        <ul class="list-group">
                            <?php 

                            $sql = "SELECT DISTINCT productsName FROM markets ORDER BY productsName";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                
                            ?>
                            <li class="list-group-item">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input product_check"
                                            value="<?=  $row['productsName']; ?>" id="productName">
                                        <?= $row['productsName']; ?>
                                    </label>
                                </div>

                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="form-group">
                        <button id="btnSearch" class="btn btn-primary">Αναζήτηση</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div id="map">

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- ΟΜΑΔΑ Section-->
    <section class="page-section" id="contact">
        <div class="container justify-content-center">
            <h2 class="text-center mt-0">Η ομάδα μας</h2>
            <hr class="divider my-4" />
            <div class="row">
                <div class="col text-center">
                    <div class="card" style="width: 18rem;">
                        <img src="http://localhost/Diadiktiakes-Ypiresies-Omadiki-Ergasia/assets/spatis.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Σπάτης Ζήσης</h5>
                            <p class="card-text text-dark">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card" style="width: 18rem;">
                        <img src="http://localhost/Diadiktiakes-Ypiresies-Omadiki-Ergasia/assets/mpampis.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Χαράλαμπος Γ. Γεωργιάδης</h5>
                            <p class="card-text text-dark">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card" style="width: 18rem;">
                        <img src="http://localhost/Diadiktiakes-Ypiresies-Omadiki-Ergasia/assets/smpilias.jpg"
                            class="card-img-top" alt="...">
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


    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?callback=initMap&libraries=places&key=AIzaSyBofP1jK4vfOQyqqaw7mItm624ehpOb5NY"
        type="text/javascript"></script>
    <!-- <script async defer
        src="https://maps.googleapis.com/maps/api/staticmap?center=Brooklyn+Bridge,New+York,NY&zoom=13&size=600x300&maptype=roadmap&markers=color:blue%7Clabel:S%7C40.702147,-74.015794"
        type="text/javascript"></script> -->
</body>

</html>


<!-- <select class="form-control form-control search-slt" id="selectProduct" name="product">
                            <!-- <option value="default">Προϊόν</option>
                            <option value="nero">Νερό</option>
                            <option value="zymarika">Ζυμαρικά</option>
                            <option value="gala">Γάλα</option>
                            <option value="aleuri">Αλεύρι</option>
                            <option value="ladi">Λάδι</option>
                            <option value="antiseiptika">Αντισειπτικά</option>
                            <option value="maskes">Μάσκες</option>
                            <option value="xarti ygeias">Χαρτί Υγείας</option>
                            <option value="oinopneuma">Οινόπνευμα</option> -->