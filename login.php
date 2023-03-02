<?php
require './admin/middlewares/variables.php';

$email = $_SESSION['signin-data']['email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;


unset($_SESSION['signin-data']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Usine-Ecole 4.0</title>
    <meta content="L'Usine-Ecole 4.0 accompagne depuis son inauguration une trentaine d’étudiants en alternance au brevet de techniciens supérieur CPRP en partenariat avec le lycée Leonard-de-Vinci de Melun et près de 200 demandeurs d'emploi." name="description">
    <meta content="Usine, école, usinage, mécanique, accompagnements, apprentissages, LMS" name="keywords">

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicons -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/svg+xml">
    <!-- Bundle CSS file -->
    <link href="./assets/css/bundle.css" rel="stylesheet" />
    <!-- font awesome icons -->
    <link rel="stylesheet" href="./assets/css/font-awesome.css">
</head>

<body>
    <header id="header" class="header clearfix">
        <div class="header-box">
            <!-- Logo & Nav -->
            <div class="clearfix logo-nav-box pd-left-right-50px">
                <div class="container-fluid">
                    <div class="logo-nav-box-container">
                        <!-- Logo -->
                        <a href="#" class="logo d-flex align-items-center k-hover">
                            <img src="./assets/images/logo-1.png" srcset="./assets/images/logo-1@2x.png 2x" class="logo-dark" alt="">
                            <img src="./assets/images/logo-3.png" srcset="./assets/images/logo-3@2x.png 2x" class="logo-dark-2" alt="">
                            <h1 class="d-none">Usine-Ecole 4.0</h1>
                        </a>
                        <!-- Logo -->
                        <!-- Nav menu -->
                        <nav id="navbar" class="navbar">
                            <ul>
                                <li class="dropdown active">
                                    <a href="#" class="k-hover">
                                        <span>Accueil</span>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="k-hover">
                                        <span>Nous connaitre</span>
                                        <i class="ficon ficon-thin-arrow-down dropdown-indicator"></i>
                                    </a>
                                    <ul>
                                        <li><a href="#" class="k-hover">Partenaires</a></li>
                                        <li><a href="#" class="k-hover">Inscription</a></li>
                                        <li><a href="#" class="k-hover">Galerie</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="k-hover"><span>Accompagnement</span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="k-hover"><span>Actualités</span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="k-hover">
                                        <span>Plateforme</span>
                                        <i class="ficon ficon-thin-arrow-down dropdown-indicator"></i>
                                    </a>
                                    <ul>
                                        <li><a href="#" class="k-hover">E-Learning</a></li>
                                    </ul>
                                </li>
                                <!-- <li class="dropdown">
                                    <a href="soft.php" class="k-hover"><span>Soft-Skills</span></a>
                                </li> -->
                                <li class="dropdown has-icon">
                                    <a href="#" class="k-hover">
                                        <span>Contact</span>
                                    </a>
                                </li>

                            </ul>
                        </nav>
                        <!-- Nav menu -->
                        <!-- Mobile toggle -->
                        <i class="mobile-nav-toggle mobile-nav-show ficon ficon-hamburger-menu"></i>
                        <i class="mobile-nav-toggle mobile-nav-hide d-none ficon ficon-x-icon"></i>
                        <!-- Mobile toggle -->
                    </div>
                </div>
            </div>
            <!-- Logo & Nav -->
        </div>
    </header>

    <!--MAIN-->
    <main id="main">
        <!-- LOGIN -->
        <section id="register" class="clearfix register-box pd-left-right-50px bg-light pd-top-600 pd-bottom-600">
            <div class="register">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-7 col-lg-8 col-lg-9">
                            <div class="card">
                                <div class="card-body p-4">
                                    <!-- Register Form -->
                                    <form action="<?= ROOT_URL ?>login-logic.php" class="form-sign contact-form needs-validation p-3" enctype="multipart/form-data" method="POST" novalidate>
                                        <h1 class="h2" style="color: #24262b;">Accès au site : Connexion</h1>
                                        <hr>
                                        <?php

                                        if (isset($_SESSION['signup-success'])) : ?>
                                            <div class="alert__message success">
                                                <p>
                                                    <?= $_SESSION['signup-success'];
                                                    unset($_SESSION['signup-success']);
                                                    ?>
                                                </p>
                                            </div>

                                        <?php elseif (isset($_SESSION['signin'])) : ?>
                                            <div class="alert__message error">
                                                <p>
                                                    <?= $_SESSION['signin'];
                                                    unset($_SESSION['signin']);
                                                    ?>
                                                </p>
                                            </div>

                                        <?php endif ?>
                                        <p class="text-danger fst-italic fs-16">Les champs marqués d'un * sont obligatoires</p>
                                        <!-- Register -->
                                        <div class="row">
                                            <div class="mb-3">
                                                <label for="txtUsername2" class="form-label">Email<span class="text-danger">*</span></label>
                                                <input class="form-control form-control-lg" type="text" id="txtUsername2" name="email" value="<?= $email ?>" placeholder="Email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="txtPassword2" class="form-label">Mot de passe<span class="text-danger">*</span></label>
                                                <input type="password" class="form-control form-control-lg" id="txtPassword2" name="password" value="<?= $password ?>" placeholder="Mot de passe">
                                            </div>
                                            
                                        </div>
                                        <!-- <div class="form-check mb-4">
                                            <input class="form-check-input" type="checkbox" value="" id="chckAgree3" required checked>
                                            <label class="form-check-label" for="chckAgree3"> J'accepte les <a href="#" class="hover">termes et la politique <span class="text-danger">*</span></a>. </label>
                                        </div> -->

                                        <div>
                                            <button type="submit" name="submit" class="btn btn-lg btn-ht-primary btn-send mb-3 pe-4 ps-4 k-hover" id="btnSubmit3">
                                                <i class="las la-lock"></i>
                                                <span>Se connecter</span>
                                            </button>
                                        </div>
                                        <!-- Register -->
                                    </form>
                                    <!-- Register Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- LOGIN -->


    </main>

    <!-- MAIN -->
    <!-- FOOTER -->
    <footer id="footer" class="footer pd-left-right-50px">
        <div class="container-fluid">
            <!-- Block -->
            <!-- Footer top -->
            <div class="footer-top">
                <div class="row">
                    <div class="col-12 col-xl-3 col-lg-12 col-md-6">
                        <!-- Brand -->
                        <div class="footer-widget">
                            <h4 class="widget-title">Usine-Ecole 4.0</h4>
                            <p>
                                Pôle de ressources et d'accompagnement vers les métiers mécaniques aéronautiques et
                                industriels soutenu par l'Europe.
                            </p>
                        </div>
                        <!-- Brand -->
                    </div>
                    <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                        <!-- Contact Info -->
                        <div class="footer-widget">
                            <h4 class="widget-title">Informations</h4>
                            <div class="contact-box">
                                <p>
                                    <span>
                                        Aérodrome de Melun Villaroche <br> 77950 Montereau-sur-le-Jard
                                    </span>
                                </p>
                                <p>
                                    <span> <a href="tel:+330160681144"></a> 01 60 68 11 44</span>
                                </p>
                                <p>
                                    <a href="mailto:trainingcenter@parisvillaroche.com" class="k-hover">trainingcenter@parisvillaroche.com
                                    </a>
                                </p>
                            </div>
                        </div>
                        <!-- Contact Info -->
                    </div>
                    <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                        <!-- Quick Links -->
                        <div class="footer-widget">
                            <h4 class="widget-title">Liens rapides</h4>
                            <div class="row g-3">
                                <div class="col-6">
                                    <ul class="list-unstyled footer-list">
                                        <li>
                                            <a href="#" class="k-hover">Accueil</a>
                                        </li>
                                        <li>
                                            <a href="#" class="k-hover">Partenaires</a>
                                        </li>
                                        <li>
                                            <a href="#" class="k-hover">Inscriptions</a>
                                        </li>
                                        <li>
                                            <a href="#" class="k-hover">Galerie</a>
                                        </li>
                                        <li>
                                            <a href="#" class="k-hover">Accompagnement</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="list-unstyled footer-list">
                                        <li>
                                            <a href="#" class="k-hover">Actualités</a>
                                        </li>
                                        <li>
                                            <a href="#" class="k-hover">E-learning</a>
                                        </li>
                                        <li>
                                            <a href="#" class="k-hover">Plateforme</a>
                                        </li>
                                        <!-- <li class="dropdown">
                                    <a href="soft.php" class="k-hover"><span>Soft-Skills</span></a>
                                </li> -->
                                        <li>
                                            <a href="#" class="k-hover">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Quick Links -->
                    </div>
                    <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                        <!-- Subscribe & Social -->
                        <div class="footer-widget">
                            <div class="footer-social">
                                <!-- Social -->
                                <h5 class="social-title">Réseaux-Sociaux</h5>
                                <div class="social-list">
                                    <a href="https://m.facebook.com/trainingcentersympav/" class="btn-social btn-facebook k-hover"><i class="pe-so-facebook"></i></a>
                                    <a href="https://twitter.com/TCenter4_0/" class="btn-social btn-twitter k-hover"><i class="pe-so-twitter"></i></a>
                                    <a href="https://www.instagram.com/trainingcenter4.0/" class="btn-social btn-youtube-1 k-hover"><i class="pe-so-youtube-1"></i></a>
                                    <a href="https://www.youtube.com/channel/UCqan073e4fkLA_HtG_uWk8Q" class="btn-social btn-vimeo k-hover"><i class="pe-so-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/tcenter-sympav-28bb571a3/" class="btn-social btn-linkedin k-hover"><i class="pe-so-linkedin"></i></a>
                                </div>
                                <!-- Social -->
                            </div>
                        </div>
                        <!-- Subscribe & Social -->
                    </div>
                </div>
            </div>
            <!-- Footer top -->
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <!-- Copyright -->
                        <p>© 2023 Usine-Ecole 4.0 Tous droits réservés.</p>
                        <!-- Copyright -->
                    </div>
                    <!-- <div class="col-12 col-md-6"> -->
                    <!-- Bottom links -->
                    <!-- <div class="bottom-link text-start text-md-end">
                                <ul class="list-inline">
                                    <li class="list-inline-item me-4 k-hover">
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li class="list-inline-item k-hover">
                                        <a href="#">Terms of Use</a>
                                    </li>
                                </ul>
                            </div> -->
                    <!-- Bottom links -->
                    <!--</div>-->
                </div>
            </div>
            <!-- Footer Bottom -->
            <!-- Block -->
        </div>
    </footer>
    <!-- FOOTER -->
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center k-hover"><i class="ficon ficon-thin-arrow-up"></i></a>

    <div id="preloader"></div>

    <!-- Bundle JS Files -->
    <script src="./assets/js/bundle.js"></script>

</body>

</html>