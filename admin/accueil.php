<?php
require './middlewares/data.php';

// fetch current user from database
if (isset($_SESSION['user-id'])) {
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM users WHERE id=$id ";
    $result = mysqli_query($connexion, $query);

}

//check login status
if (!isset($_SESSION['user-id'])) {
    header('location: ' . ROOT_URL . 'login.php');
}



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
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/svg+xml">
    <!-- Bundle CSS file -->
    <link href="../assets/css/bundle.css" rel="stylesheet" />
</head>

<body>
    <header id="header" class="header clearfix">
        <div class="header-box">
            <!-- Logo & Nav -->
            <div class="clearfix logo-nav-box pd-left-right-50px">
                <div class="container-fluid">
                    <div class="logo-nav-box-container">
                        <!-- Logo -->
                        <a href="index.php" class="logo d-flex align-items-center k-hover">
                            <img src="../assets/images/logo-1.png" srcset="../assets/images/logo-1@2x.png 2x" class="logo-dark" alt="">
                            <img src="../assets/images/logo-3.png" srcset="../assets/images/logo-3@2x.png 2x" class="logo-dark-2" alt="">
                            <h1 class="d-none">Usine-Ecole 4.0</h1>
                        </a>
                        <!-- Logo -->
                        <!-- Nav menu -->
                        <nav id="navbar" class="navbar">
                            <ul>
                                <li class="dropdown active">
                                    <a href="index.php" class="k-hover">
                                        <span>Accueil</span>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="k-hover">
                                        <span>Nous connaitre</span>
                                        <i class="ficon ficon-thin-arrow-down dropdown-indicator"></i>
                                    </a>
                                    <ul>
                                        <li><a href="about.php" class="k-hover">A propos</a></li>
                                        <li><a href="partenaires.php" class="k-hover">Partenaires</a></li>
                                        <li><a href="inscription.php" class="k-hover">Inscription</a></li>
                                        <li><a href="galerie.php" class="k-hover">Galerie</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="apprenti.php" class="k-hover"><span>Accompagnement</span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="actu.php" class="k-hover"><span>Actualités</span></a>
                                </li>
                                <li class="dropdown">
                                    <a href="https://www.paris-villaroche-training-center.parcours.pro/" target="_blank" class="k-hover">
                                        <span>Plateforme</span>
                                        <i class="ficon ficon-thin-arrow-down dropdown-indicator"></i>
                                    </a>
                                    <ul>
                                        <li><a href="learning.php" class="k-hover">E-Learning</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="soft-user.php" class="k-hover"><span>Soft-Skills</span></a>
                                </li>
                                <li class="dropdown has-icon">
                                    <a href="contact.php" class="k-hover">
                                        <span>Contact</span>
                                    </a>
                                </li>
                                <?php if (isset($_SESSION['user-id'])) : ?>
                                    <li><a href="<?= ROOT_URL ?>logout.php">Déconnexion</a></li>

                                <?php endif ?>


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
        <section id="hero" class="clearfix hero hero-fullwidth hero-light-content">
            <div class="container-fluid">
                <div class="hero-container">
                    <!-- Caption -->
                    <div class="hero-caption" data-aos-delay="1000" data-aos="fade-up">
                        <div class="hero-caption-container">
                            <span class="hero-sub-title">Bonjour, <?php echo $_SESSION['user_prenom'] ?>Depuis Juillet 2022</span>
                            <h2 class="hero-title">Le Training Center 4.0 devient l'Usine-Ecole 4.0</h2>
                            <p class="hero-desc">Un accompagnement principalement orienté vers le secteur aéronautique, en liens étroits avec les entreprises.</p>
                        </div>
                    </div>
                    <!-- Caption -->
                    <!-- Slider -->
                    <div class="hero-slider" data-aos-delay="500" data-aos="fade-up">
                        <div class="hero-slider-container">
                            <div class="swiper">
                                <div class="swiper-wrapper" style="filter: brightness(50%);">
                                    <div class="swiper-slide bg-image" data-image-src="../assets/images/home/home-1.jpg">
                                    </div>
                                    <div class="swiper-slide bg-image" data-image-src="../assets/images/home/home-2.jpg">
                                    </div>
                                    <div class="swiper-slide bg-image" data-image-src="../assets/images/home/home-3.jpg">
                                    </div>
                                </div>
                                <div class="hero-prev swiper-button-prev k-hover"></div>
                                <div class="hero-next swiper-button-next k-hover"></div>
                                <div class="hero-pagination swiper-pagination"></div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Slider -->
                    <!-- Check rooms -->
                   
                    <!-- Check rooms -->
                </div>
            </div>
        </section>
        <!-- HERO -->
        <!-- LOCATION -->
        <section id="location" class="clearfix bg-transparent-top pd-top-1000 pd-bottom-1000">
            <!-- Title & Description -->
            <div class="title-box mg-bottom-400 pd-left-right-50px">
                <div class="container-fluid">
                    <div class="pd-left-30pc">
                        <div class="heading heading-sub" data-aos-delay="300" data-aos="fade-up">
                            <span class="sub-title line-before" style="color: white;">Un accompagnement</span>
                            <h2 class="title title-lg fw-light" style="color: white;">Au cœur du centre aéronautique
                            </h2>
                        </div>
                        <div class="description" data-aos-delay="500" data-aos="fade-up">
                            <!-- <p style="color: white;">Situé au cœur du Centre de technologie aéronautique, qui emploie
                                actuellement environ 8 500 personnes et emploiera plus de 10 000 personnes à l'avenir,
                                l'Usine-Ecole 4.0 a été inauguré le 18 avril 2019 par le Président de la Communauté
                                d'agglomérations Melun-Val-de-Seine et du SYMPAV (Syndicat Mixte du Pôle d'Activites de
                                Villaroche), Monsieur Louis Vogel. L'Usine-Ecole 4.0 propose un accompagnement flexible
                                et adapté au parcours de chacun.</p> -->
                               
                            <p style="color: white;">Cet accompagnement s'adresse en priorité aux demandeurs d'emploi et
                                aux jeunes, sans niveau spécifique pour une véritable opportunité d'emploi sur notre
                                territoire.</p>
                                <p style="color: white;">L'Usine-Ecole 4.0 accompagne par une pédagogie adaptée toute personne qui souhaite découvrir les métiers de la mécanique de précision.</p>
                        </div>
                        <div>
                            <a href="#about" class="btn btn-lg btn-ht-primary btn-send mb-3 k-hover">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Title & Description -->
            <!-- Image -->
            <div class="localtion-home-box-image info-box vh-65 bg-image bg-image-wrapper" data-image-src="../assets/images/about/about.jpg">
                <div class="container-fluid">
                    <div class="localtion-home-box-image-container info-box-container pd-left-right-50px">
                        <div class="info-box-content pd-left-30pc" data-aos-delay="500" data-aos="fade-down">
                            <div class="content">
                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50236.83156661273!2d2.6484609497713203!3d48.56679442490831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5fb7b3824bca1%3A0xcb4dffb41c4ad580!2sA%C3%A9rodrome%20de%20Melun%20Villaroche!5e0!3m2!1sfr!2sfr!4v1646993857757!5m2!1sfr!2sfr" class="glightbox btn btn-lg btn-location btn-square-icon btn-square-icon-xxl k-hover">
                                    <i class="ficon ficon-flights-pin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image -->
        </section>
        <!-- LOCATION -->
        <!-- ABOUT -->
        <section id="about" class="clearfix about-home-box pd-bottom-200 bg-light pd-left-right-50px">
            <!-- Title & Description -->
            <div class="title-box mg-bottom-400 pd-right-30pc">
                <div class="container-fluid">
                    <div class="clearfix">
                        <div class="heading heading-sub" data-aos="fade-up" data-aos-delay="300">
                            <span class="sub-title line-before"  style="color: white;">Usine-Ecole 4.0</span>
                            <h2 class="title title-lg fw-light"  style="color: white;">Trouvez votre voie aérienne</h2>
                        </div>
                        <div class="description" data-aos="fade-up" data-aos-delay="500">
                            <p style="color: #fff;">L'Usine-Ecole 4.0 accompagne depuis son inauguration une trentaine
                                d’étudiants en alternance au brevet de techniciens supérieurs CPRP en partenariat avec le
                                lycée Léonard-de-Vinci de Melun et près de 200 demandeurs d'emploi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Title & Description -->
            <!-- About home 1 -->
            <div class="clearfix about-home-1 info-box pd-bottom-800">
                <div class="container-fluid">
                    <div class="about-home-1-container info-box-container">
                        <div class="info-box-content image-left">
                            <!-- Image -->
                            <figure class="image" data-aos-delay="300" data-aos="fade-up">
                                <img src="../assets/images/about/about-1.jpg" srcset="../assets/images/about/about-1@2x.jpg 2x" class="img-fluid" alt="">
                            </figure>
                            <!-- Image -->
                            <!-- Description -->
                            <div class="content" data-aos-delay="800" data-aos="fade-up">
                                <div class="heading heading-sub">
                                    <span class="sub-title line-before line-before-50" style="color: #24262b;">01</span>
                                    <h3 class="title fw-light" style="color: #24262b;">Quel est l'objectif de
                                        l'Usine-Ecole 4.0 ?</h3>
                                </div>
                                <div class="info-box-desc">
                                    <p>Proposer aux apprenants des modules de formation directement adaptés aux besoins
                                        très spécifiques des entreprises de la mécanique de précision. L'Usine-Ecole 4.0
                                        s'associe au lycée Léonard-de-Vinci de Melun pour l'ouverture de la section BTS
                                        CPRP en alternance et au Greta MTI 77, CFA Académique de Créteil pour le bac pro
                                        technicien d'usinage.</p>
                                </div>
                            </div>
                            <!-- Description -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- About home 1 -->
            <!-- About home 2 -->
            <div class="clearfix about-home-2 info-box pd-bottom-800">
                <div class="container-fluid">
                    <div class="about-home-2-container info-box-container">
                        <div class="info-box-content image-right justify-content-end">
                            <!-- Image -->
                            <figure class="image" data-aos-delay="300" data-aos="fade-up">
                                <img src="../assets/images/about/about-2.jpg" srcset="../assets/images/about/about-2@2x.jpg 2x" class="img-fluid" alt="">
                            </figure>
                            <!-- Image -->
                            <div class="content" data-aos-delay="800" data-aos="fade-up">
                                <!-- Title & Description -->
                                <div class="heading heading-sub">
                                    <span class="sub-title line-before line-before-50" style="color: #24262b;">02</span>
                                    <h3 class="title fw-light" style="color: #24262b;">À qui est destiné l'Usine-Ecole
                                        4.0 ?</h3>
                                </div>
                                <div class="info-box-desc">
                                    <p>Aux demandeurs d'emploi et aux jeunes inactifs ou étudiants, et sans niveau
                                        spécifique. Cet accompagnement constitue une véritable opportunité vers un
                                        emploi sur notre territoire. Fort de son partenariat avec les industriels du
                                        technopôle et du lycée professionnel Léonard-de-Vinci de Melun, l'Usine-Ecole
                                        4.0 continue de proposer un apprentissage flexible et adapté au parcours de
                                        chaque apprenant.</p>
                                </div>
                                <!-- Title & Description -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About home 2 -->
            <!-- About home 3 -->
            <div class="clearfix about-home-3 info-box pd-bottom-800">
                <div class="container-fluid">
                    <div class="info-box-container">
                        <div class="about-home-3-container info-box-content image-left">
                            <!-- Image -->
                            <figure class="image" data-aos-delay="300" data-aos="fade-up">
                                <img src="../assets/images/about/about-3.jpg" srcset="../assets/images/about/about-3@2x.jpg 2x" class="img-fluid" alt="">
                            </figure>
                            <!-- Image -->
                            <!-- Title & Description -->
                            <div class="content" data-aos-delay="800" data-aos="fade-up">
                                <div class="heading heading-sub">
                                    <span class="sub-title line-before line-before-50" style="color: #24262b;">03</span>
                                    <h3 class="title fw-light" style="color: #24262b;">Comment s'inscrire à
                                        l'Usine-Ecole ?</h3>
                                </div>
                                <div class="info-box-desc">
                                    <p>Il suffit de nous contacter par notre formulaire de contact puis nous vons
                                        contacterons dans les plus brefs délais pour vous inscrire au sein de
                                        l'Usine-Ecole 4.0.</p>
                                </div>
                                <div class="clearfix">
                                    <a href="contact.php" class="btn btn-lg btn-expand btn-ht-primary k-hover">
                                        <span>Contactez-nous</span>
                                        <i class="ficon ficon-plus-thin"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Title & Description -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- About home 3 -->
        </section>
        <!-- ABOUT -->
        <!-- FACILITIES -->
        <section id="facilities" class="clearfix facilities-box pd-bottom-1000 bg-light overflow-hidden">
            <!-- Title & Description -->
            <div class="clearfix title-box mg-bottom-500 pd-bottom-1000 pd-left-right-50px">
                <div class="container-fluid">
                    <div class="pd-left-30pc">
                        <div class="heading heading-sub" data-aos-delay="300" data-aos="fade-up">
                            <span class="sub-title line-before"  style="color: white;">Usine-Ecole 4.0</span>
                            <h2 class="title title-lg fw-light"  style="color: white;">Nos Chiffres</h2>
                        </div>
                        <!-- <div class="description" data-aos-delay="500" data-aos="fade-up">
                            <p>Falli accumsan ad cum, cu duo nulla errem evertitur, qui scaevola reformidans te. Omnes graeco est at. An vim lorem delenit voluptatibus ut persequeris.</p>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Title & Description -->
            <!-- Facility box list -->
            <div class="clearfix facilities-box-list info-box bg-image bg-image-wrapper rounded-0 pd-left-right-50px" data-image-src="../assets/images/about/about-4.jpg">
                <div class="container-fluid">
                    <div class="facilities-box-list-container info-box-container pd-left-30pc" data-aos-delay="300" data-aos="fade-up">
                        <div class="info-box-content">
                            <div class="content content-absolute bg-content-white">
                                <!-- Facility list -->
                                <div class="row g-0 g-xl-5">
                                    <div class="col-12 col-lg-6">
                                        <!-- Facility item -->
                                        <div class="icon-box icon-box-left mb-5 mb-xl-0">
                                            <div class="icon-box-container">
                                                <div class="icon-box-img">
                                                    <span><i class="ficon ficon-24hour-frontdesk"></i></span>
                                                </div>
                                                <div class="icon-box-info">
                                                    <h3 class="icon-box-title" style="color: #24262b;">300</h3>
                                                    <p class="icon-box-desc">Personnes rencontrées (environ) </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Facility item -->
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <!-- Facility item -->
                                        <div class="icon-box icon-box-left mb-5 mb-xl-0">
                                            <div class="icon-box-container">
                                                <div class="icon-box-img">
                                                    <span><i class="ficon ficon-adults-line"></i></span>
                                                </div>
                                                <div class="icon-box-info">
                                                    <h3 class="icon-box-title" style="color: #24262b;">2500</h3>
                                                    <p class="icon-box-desc">Dont 1500 élèves reçus lors du FrenchFab Tour.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Facility item -->
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <!-- Facility item -->
                                        <div class="icon-box icon-box-left mb-5 mb-xl-0">
                                            <div class="icon-box-container">
                                                <div class="icon-box-img">
                                                    <span><i class="ficon ficon-city-view"></i></span>
                                                </div>
                                                <div class="icon-box-info">
                                                    <h3 class="icon-box-title" style="color: #24262b;">48%</h3>
                                                    <p class="icon-box-desc">De retour à l'emploi.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Facility item -->
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <!-- Facility item -->
                                        <div class="icon-box icon-box-left mb-5 mb-xl-0">
                                            <div class="icon-box-container">
                                                <div class="icon-box-img">
                                                    <span><i class="ficon ficon-group-travelers"></i></span>
                                                </div>
                                                <div class="icon-box-info">
                                                    <h3 class="icon-box-title" style="color: #24262b;">13</h3>
                                                    <p class="icon-box-desc">Dont 9 stagiaires et 4 alternants dans
                                                        l'équipe de l'Usine-Ecole 4.0</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Facility item -->
                                    </div>
                                </div>
                                <!-- Facility list -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Facility box list -->
        </section>
        <!-- FACILITIES -->
        <!-- NEWS & EVENTS -->
        <section id="news" class="clearfix news-home-box pd-bottom-1000 bg-light pd-left-right-50px">
            <!-- Title & Description -->
            <div class="title-box mg-bottom-400 pd-right-30pc">
                <div class="container-fluid">
                    <div class="pd-right-95px">
                        <div class="heading heading-sub" data-aos-delay="300" data-aos="fade-up">
                            <span class="sub-title line-before"  style="color: white;">Actualités</span>
                            <h2 class="title title-lg fw-light"  style="color: white;">Nos actualités du moment</h2>
                        </div>
                        <div class="description" data-aos-delay="500" data-aos="fade-up">
                            <p style="color: #fff;">Découvrez toutes les actualités de l'Usine-Ecole 4.0 et de ses
                                partenaires.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Title & Description -->
            <!-- Post list -->
           
            <!-- Post list -->
        </section>
        <!-- NEWS & EVENTS -->


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
                                            <a href="index.php" class="k-hover">Accueil</a>
                                        </li>
                                        <li>
                                            <a href="partenaires.php" class="k-hover">Partenaires</a>
                                        </li>
                                        <li>
                                            <a href="inscriptions.php" class="k-hover">Inscriptions</a>
                                        </li>
                                        <li>
                                            <a href="galerie.php" class="k-hover">Galerie</a>
                                        </li>
                                        <li>
                                            <a href="apprenti.php" class="k-hover">Accompagnement</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="list-unstyled footer-list">
                                        <li>
                                            <a href="actu.php" class="k-hover">Actualités</a>
                                        </li>
                                        <li>
                                            <a href="learning.php" class="k-hover">E-learning</a>
                                        </li>
                                        <li>
                                            <a href="https://www.paris-villaroche-training-center.parcours.pro/" class="k-hover">Plateforme</a>
                                        </li>
                                        <!-- <li class="dropdown">
                                    <a href="soft.php" class="k-hover"><span>Soft-Skills</span></a>
                                </li> -->
                                        <li>
                                            <a href="contact.php" class="k-hover">Contact</a>
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
                    <div class="col-12 col-md-6">
                        <!-- Bottom links -->
                        <div class="bottom-link text-start text-md-end">
                            <ul class="list-inline">
                                <li class="list-inline-item me-4 k-hover">
                                    <a href="mentions.php" target="_blank">Mentions légales</a>
                                </li>
                                <li class="list-inline-item k-hover">
                                    <a href="politique.php" target="_blank">Politique de confidentialité</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Bottom links -->
                    </div>
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
    <script src="../assets/js/bundle.js"></script>

</body>

</html>