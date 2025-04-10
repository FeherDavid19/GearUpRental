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
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto py-0">
                        <a href="{{ route('welcome') }}" class="nav-item nav-link">Főoldal</a> 
                            <a href="{{ route('szolgaltatasok') }}" class="nav-item nav-link">Szolgáltatások</a>
                            <a href="{{ route('kontakt') }}" class="nav-item nav-link active">Kapcsolat</a>
                             <a href="{{ route('flotta') }}" class="nav-item nav-link">Flotta</a>       
                            </div>
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Kapcsolat</h4>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize text-primary mb-3">Lépjen velünk kapcsolatba</h1>
                    <p class="mb-0">Töltse ki az oldalon található űrlapot, ezáltal üzenetet küldhet nekünk bármilyen problémával vagy kérdéssel kapcsolatban.</p>
                </div>
                <div class="row g-5">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-5">
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="contact-add-item p-4">
                                    <div class="contact-icon mb-4">
                                        <i class="fas fa-map-marker-alt fa-2x"></i>
                                    </div>
                                    <div>
                                        <h4>Cím</h4>
                                        <p class="mb-0">Mátészalka Széchenyi utca 71.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="contact-add-item p-4">
                                    <div class="contact-icon mb-4">
                                        <i class="fas fa-envelope fa-2x"></i>
                                    </div>
                                    <div>
                                        <h4>Email</h4>
                                        <p class="mb-0">gearuprental@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="contact-add-item p-4">
                                    <div class="contact-icon mb-4">
                                        <i class="fa fa-phone-alt fa-2x"></i>
                                    </div>
                                    <div>
                                        <h4>Telefon</h4>
                                        <p class="mb-0">+36 20 332 4122</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="contact-add-item p-4">
                                    <div class="contact-icon mb-4">
                                        <i class="fab fa-opera fa-2x"></i>
                                    </div>
                                    <div>
                                        <h4>Társ Weboldal</h4>
                                        <p class="mb-0"><a href="https://tripify.hu" target="_blank">tripify.hu</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-secondary p-5 rounded">
                            <h4 class="text-primary mb-4">Küldj üzenetet</h4>
                            <form>
                                <div class="row g-4">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Név</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Email-cím</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="phone" class="form-control" id="phone" placeholder="Phone">
                                            <label for="phone">Telefonszám</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Tárgy</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                            <label for="message">Üzenet</label>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-light w-100 py-3">Üzenet küldése</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> 
                    <div class="col-12 col-xl-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="p-5 bg-light rounded">
                            <div class="bg-white rounded p-4 mb-4">
                                <h4 class="mb-3">Székhely 1.</h4>
                                <div class="d-flex align-items-center flex-shrink-0 mb-3">
                                    <p class="mb-0 text-dark me-2">Cím:</p><i class="fas fa-map-marker-alt text-primary me-2"></i><p class="mb-0">Mátészalka, Széchenyi utca 71.</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 text-dark me-2">Telefon:</p><i class="fa fa-phone-alt text-primary me-2"></i><p class="mb-0">+36 20 332 4122</p>
                                </div>
                            </div>
                            <div class="bg-white rounded p-4 mb-4">
                                <h4 class="mb-3">Székhely 2.</h4>
                                <div class="d-flex align-items-center mb-3">
                                    <p class="mb-0 text-dark me-2">Cím:</p><i class="fas fa-map-marker-alt text-primary me-2"></i><p class="mb-0">Mátészalka, Szokolay Őrs utca 13.</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 text-dark me-2">Telefon:</p><i class="fa fa-phone-alt text-primary me-2"></i><p class="mb-0">+36 30 966 7628</p>
                                </div>
                            </div>
                            <div class="bg-white rounded p-4 mb-0">
                                <h4 class="mb-3">Székhely 3.</h4>
                                <div class="d-flex align-items-center mb-3">
                                    <p class="mb-0 text-dark me-2">Cím:</p><i class="fas fa-map-marker-alt text-primary me-2"></i><p class="mb-0">Porcsalma, Ady Endre utca 34.</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 text-dark me-2">Telefon:</p><i class="fa fa-phone-alt text-primary me-2"></i><p class="mb-0">+36 30 637 6769</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="rounded">
                            <iframe class="rounded w-100" 
                            style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d794.2973720046489!2d22.320697747148383!3d47.961771542378536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47387b588473d94b%3A0x15bf27e21d99ea7e!2zTcOhdMOpc3phbGthLCBTesOpY2hlbnlpIHUuIDcxLCA0NzAwIE1hZ3lhcm9yc3rDoWc!5e0!3m2!1shu!2snl!4v1742370068956!5m2!1shu!2snl"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Contact End -->

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
                            <a href="https://www.google.com/maps/place/M%C3%A1t%C3%A9szalka,+Sz%C3%A9chenyi+u.+71,+4700/@47.9617985,22.3197638,17z/data=!4m6!3m5!1s0x47387b588473d94b:0x15bf27e21d99ea7e!8m2!3d47.9617806!4d22.3214482!16s%2Fg%2F11c226dw_7?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoJLDEwMjExNjQwSAFQAw%3D%3D" target="_blank"><i class="fa fa-map-marker-alt me-2"></i> Mátészalka Széchenyi utca 71.</a>
                            <a href="mailto:gearuprental@gmail.com"><i class="fas fa-envelope me-2"></i> gearuprental@gmail.com</a>
                            <a href="tel:+36 20 332 4122"><i class="fas fa-phone me-2"></i>+36 20 332 4122</a>
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