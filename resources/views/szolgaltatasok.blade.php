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
    </head>

    <body>

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="{{ route('welcome') }}" class="navbar-brand p-0">
                        <h1 class="display-6 text-primary"><i class="fas fa-car-alt me-3"></i></i>GearUpRental</h1>
                        <!-- <img src="img/car-alt-solid.png" alt="Logo"> --> 
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto py-0">
                            <a href="{{ route('welcome') }}" class="nav-item nav-link ">Főoldal</a> 
                            <a href="{{ route('szolgaltatasok') }}" class="nav-item nav-link active">Szolgáltatások</a>
                            <a href="{{ route('kontakt') }}" class="nav-item nav-link">Kapcsolat</a>
                             <a href="{{ route('flotta') }}" class="nav-item nav-link">Flotta</a>
                        </div>
                        <!-- Ide kerül a bejelentkezett felhasználó kezelése -->
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
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Szolgáltatásaink</h4>
            </div>
        </div>
        <!-- Header End -->

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
        <br><br>
        <!-- Fact Counter -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Ügyfeleink<span class="text-primary"> Visszajelzései</span></h1>
                    <p class="mb-0">Nálunk fontos vélemenye, épp ezért törekszünk arra, hogy minél barátibb áron biztosítsunk járművet ügyfelünk számára.</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="img/kep2.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Nagy Lajos</h4>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0"> Az autóbérlés folyamata gyors és egyszerű volt, minden információ egyértelműen fel volt tüntetve.</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="img/kep1.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Kiss Péter</h4>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0">A járműválaszték széles, könnyen találtam az igényeimnek megfelelő autót. Elégedett vagyok a céggel.</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="img/kep4.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Varga Tamás</h4>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0">Az oldal összességében jól használható, az autóbérlés folyamata egyszerű viszont kicsit lassú volt míg megkaptam a járművet.</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="img/kep3.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Kovács Géza</h4>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0">A foglalási folyamat egyszerű, ami megkönnyíti az autóbérlést. Az árak korrektek, és nem voltak rejtett költségek, ami nagy pozitívum.</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="img/kep6.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Szűcs Anita</h4>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0">Nagyszerű élmény volt az autóbérlés! Az oldalon pillanatok alatt sikerült lefoglalnom a kívánt járművet.</p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="img/kep5.jpg" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>Gergely Lili</h4>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top rounded-bottom p-4">
                            <p class="mb-0">Egyszerűen sikerült megoldanom a foglalást, viszont nem találtam számomra megfelelő autót.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

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
                    <div class="col-md-6 text-center text-md-end text-body">
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