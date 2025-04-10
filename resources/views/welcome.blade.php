<!DOCTYPE html>
<html lang="hu">

    <head>
        <meta charset="utf-8">
        <title>GearUpRental</title>
        <link rel="icon" href="img/car-alt-solid.png" type="image/png" sizes="16x16"> 
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>
            /* Egyedi stílusok */
form {
    max-width: 500px;
    margin: auto;
    background-color: #f9f9f9;
}

form .form-label {
    font-weight: bold;
}

form .btn-warning {
    background-color: #ff6600;
    border: none;
}

form .btn-success {
    background-color: #28a745;
    border: none;
}
        </style>
    </head>

    <body>

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="{{ route('welcome') }}" class="navbar-brand p-0">
                        <h1 class="display-6 text-primary"><i class="fas fa-car-alt me-3"></i></i>GearUpRental</h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav mx-auto py-0">
        <a href="{{ route('welcome') }}" class="nav-item nav-link active">Főoldal</a> 
        <a href="{{ route('szolgaltatasok') }}" class="nav-item nav-link">Szolgáltatások</a>
        <a href="{{ route('kontakt') }}" class="nav-item nav-link">Kapcsolat</a>
        <a href="{{ route('flotta') }}" class="nav-item nav-link">Flotta</a>
    </div>

    @auth
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu m-0">
                <a href="{{ route('foglalasaim') }}" class="dropdown-item">Foglalásaim</a>
                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Kijelentkezés
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    @else
        <a href="{{ route('login') }}" class="btn btn-primary rounded-pill py-2 px-4">Bejelentkezés</a>
        <a href="{{ route('register') }}" class="btn btn-primary rounded-pill py-2 px-4">Regisztráció</a>
    @endauth
</div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

       <!-- Carousel Start -->
<div class="header-carousel">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="First slide" />
                <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5">
                            <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                <div class="     rounded p-5">
                                    <h1 class="display-5 text-white">Szerezzen most 15% kedvezményt első bérléskor</h1>
                                    <p>Megbízhatóság Mátészalkáról</p>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                <div class="text-start">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Second slide" />
                <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5">
                            <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">  
                            <h1 class="display-5 text-white">Szerezzen most 15% kedvezményt első bérléskor</h1>
                                    <p>Megbízhatóság Mátészalkáról</p>
                                </div>
                            <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                <div class="text-start">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
        <!-- Features Start -->
        <div class="container-fluid feature py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">GearUp <span class="text-primary">Jellemzői</span></h1>
                    <p class="mb-0">Cégünk biztonságos autóbérlést biztosít ügyfeleink számára, minden szempontot nézve.
                    </p>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-xl-4">
                        <div class="row gy-4 gx-0">
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <span class="fa fa-trophy fa-2x"></span>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-3">Első osztályú szolgáltatás</h5>
                                        <p class="mb-0">"Prémium élmény, ahol az ügyfél az első. Nálunk minden részlet számít!"</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <span class="fa fa-road fa-2x"></span>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-3">Pálya matrica</h5>
                                        <p class="mb-0">"Ne aggódj az autópályadíjak miatt  mi gondoskodunk róla helyetted!"</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <img src="img/features-img.png" class="img-fluid w-100" style="object-fit: cover;" alt="Img">
                    </div>
                    <div class="col-xl-4">
                        <div class="row gy-4 gx-0">
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="feature-item justify-content-end">
                                    <div class="text-end me-4">
                                        <h5 class="mb-3">Alacsony árak</h5>
                                        <p class="mb-0">"Minőség megfizethető áron  nálunk a legjobb ajánlatot kapod!"</p>
                                    </div>
                                    <div class="feature-icon">
                                        <span class="fa fa-tag fa-2x"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="feature-item justify-content-end">
                                    <div class="text-end me-4">
                                        <h5 class="mb-3">Ingyen felvétel & Letétel</h5>
                                        <p class="mb-0">"Rugalmas megoldások  vedd át és add le az autót, ahol csak szeretnéd, extra költségek nélkül!"</p>
                                    </div>
                                    <div class="feature-icon">
                                        <span class="fa fa-map-pin fa-2x"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->

        <!-- About Start -->
        <div class="container-fluid overflow-hidden about py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-item">
                            <div class="pb-5">
                                <h1 class="display-5 text-capitalize">GearUp <span class="text-primary">Rólunk</span></h1>
                                <p class="mb-0">
                                </p>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="about-item-inner border p-4">
                                        <div class="about-icon mb-4">
                                            <img src="img/about-icon-1.png" class="img-fluid w-50 h-50" alt="Icon">
                                        </div>
                                        <h5 class="mb-3">Nézetünk</h5>
                                        <p class="mb-0">"Hiszünk abban, hogy az autóbérlés lehet egyszerű, gyors és stresszmentes. Az ügyfélélmény nálunk az első!"</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-item-inner border p-4">
                                        <div class="about-icon mb-4">
                                            <img src="img/about-icon-2.png" class="img-fluid h-50 w-50" alt="Icon">
                                        </div>
                                        <h5 class="mb-3">Célunk</h5>
                                        <p class="mb-0">"Célunk, hogy minden utazásodhoz a legjobb autót biztosítsuk – kényelmesen, rugalmasan és megfizethető áron."</p>
                                    </div>
                                </div>
                            </div>
                            <p class="text-item my-4"> "Évtizedes szakértelem, amelyre mindig számíthatsz. Bízd ránk magad, és élvezd a gondtalan utazást!"
                            </p>
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="text-center rounded bg-secondary p-4">
                                        <h1 class="display-6 text-white">20</h1>
                                        <h5 class="text-light mb-0">Év Tapasztalat</h5>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="rounded">
                                        <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Szakértelem minden részletben</p>
                                        <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Megbízhatóság, amire számíthatsz</p>
                                        <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Rugalmas és ügyfélközpontú megoldások</p>
                                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-1"></i> Minőség kompromisszumok nélkül</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="about-img">
                            <div class="img-1">
                                <img src="img/about-img.jpg" class="img-fluid rounded h-100 w-100" alt="">
                            </div>
                            <div class="img-2">
                                <img src="img/about-img-1.jpg" class="img-fluid rounded w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Fact Counter -->
        <div class="container-fluid counter bg-secondary py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="counter-item text-center">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-thumbs-up fa-2x"></i>
                            </div>
                            <div class="counter-counting my-3">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">50</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                            <h4 class="text-white mb-0">Elégedett Ügyfél</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="counter-item text-center">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-car-alt fa-2x"></i>
                            </div>
                            <div class="counter-counting my-3">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">15</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                            <h4 class="text-white mb-0">Autók száma</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="counter-item text-center">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-building fa-2x"></i>
                            </div>
                            <div class="counter-counting my-3">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">3</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                            <h4 class="text-white mb-0">Székhely</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="counter-item text-center">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-clock fa-2x"></i>
                            </div>
                            <div class="counter-counting my-3">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">1200</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                            <h4 class="text-white mb-0">Megtett Kilométerek</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Counter -->

        <!-- Services Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">GearUp <span class="text-primary">Szolgáltatások</span></h1>
                    <p class="mb-0">Nálunk egyszerúen elintézheti a foglalását, alacsony árértékben. Illetve utasbiztosítást, és tesztevezetést kaphat első ügyfélként.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-phone-alt fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Foglalások</h5>
                            <p class="mb-0">Könnyedén lefoglalhatja autóját az online rendszerünkön keresztül. A foglalási folyamatunk egyszerű és felhasználóbarát, így gyorsan és kényelmesen elintézheti a járműbérlését.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-money-bill-alt fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Különleges Árak</h5>
                            <p class="mb-0">Fedezze fel különleges árainkat és ajánlatainkat, amelyekkel még kedvezőbbé teheti az autóbérlést. Rendszeresen kínálunk akciós árakat és kedvezményeket is.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-road fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Egy Utas Bérlés</h5>
                            <p class="mb-0"> Az egyutas bérlés ideális megoldás, ha nem tervezi visszavinni az autót ugyanarra a helyre. Rugalmasan tervezheti meg útvonalát, és mi gondoskodunk a logisztikáról.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-umbrella fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Biztonságos vezetés</h5>
                            <p class="mb-0">Az Ön biztonsága a legfontosabb számunkra. Minden autónk rendszeresen karbantartott és biztonságtechnikai ellenőrzésen esik át. Ezenkívül számos biztonsági kiegészítőt is kínálunk.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-building fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Várostól Városig</h5>
                            <p class="mb-0">Fedezze fel az országot autóval, és élvezze a városok közötti utazás szabadságát. Kényelmesen eljuthat egyik városból a másikba, megállva az Önt érdeklő helyeken. 
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item p-4">
                            <div class="service-icon mb-4">
                                <i class="fa fa-car-alt fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Ingyenes tesztvezetések</h5>
                            <p class="mb-0">Próbálja ki autóinkat ingyenes tesztvezetés keretében, mielőtt döntést hozna. Ismerje meg a különböző modelleket, és győződjön meg róla, hogy a választott autó megfelel az igényeinek.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

       

        <!-- Car Steps Start -->
        <div class="container-fluid steps py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize text-white mb-3">Bérlés<span class="text-primary">Folyamata</span></h1>
                    <p class="mb-0 text-white">Könnyedén bérelhetsz autót nálunk! Először válaszd ki a bérlés időpontját, majd böngészd át autóválasztékunkat, és válaszd ki a számodra legmegfelelőbb modellt.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                       <div class="steps-item p-4 mb-4">
                            <h4>Válassz Autót</h4>
                            <p class="mb-0">Böngészd át széles autóválasztékunkat, és találd meg a számodra legmegfelelőbb modellt. Kínálatunkban megtalálható minden típusú jármű.</p>
                            <div class="setps-number">01.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="steps-item p-4 mb-4">
                            <h4>Válaszd ki az időpontot</h4>
                            <p class="mb-0">Válaszd ki a felvétel és leadás dátumát és időpontját a naptárunkban, hogy biztosan elérhető legyen a kiválasztott jármű.</p>
                            <div class="setps-number">02.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="steps-item p-4 mb-4">
                            <h4>Élvezd A Vezetést</h4>
                            <p class="mb-0">Vedd át a kiválasztott autót, és élvezd a gondtalan utazást. Fedezd fel a környéket, és élvezd a szabadságot. Jó utat kívánunk!</p>
                            <div class="setps-number">03.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Car Steps End -->

        <!-- Banner Start -->
        <br><br>
        <div class="container-fluid banner pb-5 wow zoomInDown" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="banner-item rounded">
                    <img src="img/banner-1.jpg" class="img-fluid rounded w-100" alt="">
                    <div class="banner-content">
                        <h2 class="text-primary">Béreld Ki Autódat</h2>
                        <h1 class="text-white">Érdeklődsz a bérlés iránt?</h1>
                        <p class="text-white">Küldj nekünk E-Mailt/Üzenetet!</p>
                        <div class="banner-btn">
                            <a href="{{ route('kontakt') }}" class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2">Kapcsolat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">Rólunk</h4>
                                <p class="mb-3">Nálunk egyszerűen és gyorsan bérelhetsz autót bármilyen alkalomra. Fedezd fel széles járműkínálatunkat, és indulj útnak még ma!</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4"></h4>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Hétfő - Péntek:</h6>
                                <p class="text-white mb-0">08:00-14.00</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Szombat:</h6>
                                <p class="text-white mb-0">10:00-14:00</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Munkaszünet:</h6>
                                <p class="text-white mb-0">Minden Vasárnap munkaszünet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Elérhetőségek</h4>
                            <a href="#"><i class="fa fa-map-marker-alt me-2"></i> Mátészalka Széchenyi utca 71.</a>
                            <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i> gearuprental@gmail.com</a>
                            <a href="tel:+012 345 67890"><i class="fas fa-phone me-2"></i>+36 20 332 4122</a>
                            <br>
                            <div class="d-flex">
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-facebook-f text-white"></i></a>
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-tiktok text-white"></i></a>
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-instagram text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="{{ route('fooldal') }}" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>GearUpRental</a>, Minden jog fenntartva.</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>