<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/car-alt-solid.png" type="image/png" sizes="16x16"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GearUp Jármű Kategóriák</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
       body {
            font-family: 'Montserrat', sans-serif;
            background-color: #0d1b2a;
            color: #ffffff;
        }

        .card {
            background-color: #1b263b;
            border: 1px solid #415a77;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            min-width: 300px; /* A kártyák minimális szélessége */
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #ffffff;
        }

        .card-text {
            font-size: 0.9rem;
            color: #d1d9e6;
        }

        .btn-danger {
    background-color: #dc3545;
    border: none;
    font-weight: 700;
    font-size: 0.8rem; /* Kisebb gomb */
    padding: 5px 10px; /* Kisebb margók */
    transition: background-color 0.3s ease;
}

.btn-danger:hover {
    background-color: #b02a37;
}

.btn-danger.position-absolute {
    border-radius: 0; /* Fix gomb stílus */
    bottom: 0; /* A gomb az autókártya aljára kerül */
    width: 100%; /* A gomb szélessége a kártya teljes szélessége */
}
        .icon-group span {
            font-size: 0.9rem;
            color: #d1d9e6;
        }

        .icon-group span i {
            color: #dc3545;
            margin-right: 5px;
        }

        .category-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 20px;
        }

        /* Görgethető konténer */
        .scroll-container {
            display: flex;
            overflow-x: auto; /* Vízszintes görgetés engedélyezése */
            gap: 16px; /* Távolság a kártyák között */
            padding: 10px 0;
            scroll-behavior: smooth; /* Simább görgetés */
        }

        .scroll-container::-webkit-scrollbar {
            height: 8px; /* Görgetősáv magassága */
        }

        .scroll-container::-webkit-scrollbar-thumb {
            background-color: #dc3545; /* Görgetősáv színe */
            border-radius: 4px;
        }

        .scroll-container::-webkit-scrollbar-track {
            background-color: #1b263b; /* Görgetősáv háttérszíne */
        }
      
        /* Fejléc stílusok */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #ffffff; /* Fehér háttér */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Árnyék */
    position: sticky;
    top: 0;
    z-index: 1000;
}

.header .logo {
    display: flex;
    align-items: center;
    font-size: 1.5rem;
    font-weight: 700;
    color: #dc3545; /* Piros szöveg */
    text-decoration: none;
}

.header .logo i {
    margin-right: 8px;
}

.header .nav-links {
    display: flex;
    gap: 20px;
}

.header .nav-links a {
    text-decoration: none;
    color: #000000; /* Fekete szöveg */
    font-weight: 500;
    transition: color 0.3s ease;
}

.header .nav-links a:hover {
    color: #dc3545; /* Piros szöveg hover */
}

.header .buttons {
    display: flex;
    gap: 10px;
}

.header .buttons .btn {
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: 700;
    border: none;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.header .buttons .btn-login {
    background-color: #ffffff; /* Fehér gomb */
    color: #dc3545; /* Piros szöveg */
    border: 2px solid #dc3545; /* Piros szegély */
}

.header .buttons .btn-login:hover {
    background-color: #dc3545; /* Piros háttér */
    color: #ffffff; /* Fehér szöveg */
}

.header .buttons .btn-register {
    background-color: #ffffff; /* Fehér gomb */
    color: #dc3545; /* Piros szöveg */
    border: 2px solid #dc3545; /* Piros szegély */
}

.header .buttons .btn-register:hover {
    background-color: #dc3545; /* Piros háttér */
    color: #ffffff; /* Fehér szöveg */
}

.scroll-container {
    display: flex;
    overflow-x: auto; /* Vízszintes görgetés engedélyezése */
    scroll-behavior: smooth; /* Simább görgetés */
    gap: 20px; /* Kártyák közötti távolság */
    padding: 10px;
}


.scroll-container.active {
    cursor: grabbing; /* Az egér ikon megváltozik */
}
.card {
    user-select: none; /* Szöveg kijelölésének letiltása */
}

/*modális dizájn */
/* Modális ablak stílusok */
.modal-content {
    background-color: #1b263b; /* Sötét háttér */
    border: 1px solid #415a77; /* Halvány szegély */
    border-radius: 10px; /* Lekerekített sarkok */
    color: #ffffff; /* Fehér szöveg */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); /* Árnyék */
}

.modal-header {
    border-bottom: 1px solid #415a77; /* Fejléc elválasztó vonal */
    background-color: #0d1b2a; /* Fejléc háttér */
    color: #ffffff; /* Fejléc szöveg */
}

.modal-title {
    font-size: 1.5rem; /* Nagyobb cím */
    font-weight: 700; /* Vastag betű */
}

.btn-close {
    background-color: #dc3545; /* Piros gomb */
    color: #ffffff; /* Fehér ikon */
    border-radius: 50%; /* Kör alakú */
    padding: 5px; /* Kisebb méret */
}

.btn-close:hover {
    background-color: #b02a37; /* Sötétebb piros hover */
}

.modal-body {
    padding: 20px; /* Kényelmesebb belső margó */
}

.modal-body label {
    font-weight: 600; /* Félkövér címkék */
    color: #d1d9e6; /* Halvány szöveg */
}

.modal-body input {
    background-color: #0d1b2a; /* Sötét mező */
    border: 1px solid #415a77; /* Halvány szegély */
    color: #ffffff; /* Fehér szöveg */
    border-radius: 5px; /* Lekerekített sarkok */
    padding: 10px; /* Kényelmesebb mező */
}

.modal-body input:focus {
    border-color: #dc3545; /* Piros szegély fókuszban */
    outline: none; /* Alapértelmezett outline eltávolítása */
}

.modal-footer {
    border-top: 1px solid #415a77; /* Láb elválasztó vonal */
    background-color: #0d1b2a; /* Láb háttér */
}

.modal-footer .btn-danger {
    background-color: #dc3545; /* Piros gomb */
    border: none;
    font-weight: 700;
    transition: background-color 0.3s ease;
}

.modal-footer .btn-danger:hover {
    background-color: #b02a37; /* Sötétebb piros hover */
}

.modal-footer .btn-secondary {
    background-color: #415a77; /* Halvány szürke gomb */
    border: none;
    font-weight: 700;
    transition: background-color 0.3s ease;
}

.modal-footer .btn-secondary:hover {
    background-color: #2c3e50; /* Sötétebb szürke hover */
}
.icon-group span {
    font-size: 0.9rem; /* Szöveg mérete */
    color: #d1d9e6; /* Szöveg színe */
}

.icon-group span i {
    color: #dc3545; /* Ikon színe */
    font-size: 1rem; /* Ikon mérete */
}
.foglaltsag {
    margin-top: 20px;
}

.foglaltsag h5 {
    font-weight: bold;
}

.foglaltsag ul {
    list-style-type: disc;
    padding-left: 20px;
}

.foglaltsag li {
    color: white;
}
.modal-body input[readonly] {
    background-color: #0d1b2a !important; /* Sötét háttér */
    color: #ffffff !important; /* Fehér szöveg */
    border: 1px solid #415a77; /* Halvány szegély */
    border-radius: 5px; /* Lekerekített sarkok */
    padding: 10px; /* Kényelmesebb mező */
    box-shadow: none !important; /* Árnyék eltávolítása */
}

.modal-body input[readonly]:focus {
    border-color: #dc3545; /* Piros szegély fókuszban */
    outline: none; /* Alapértelmezett outline eltávolítása */
}

    </style>
</head>

<body>
<header class="header">
    <!-- Logó -->
    <a href="{{ route('welcome') }}" class="logo">
        <i class="fas fa-car"></i> GearUpRental
    </a>

    <!-- Navigációs menü -->
    <nav class="nav-links">
        <a href="{{ route('welcome') }}">Főoldal</a>
        <a href="{{ route('szolgaltatasok') }}" >Szolgáltatások</a>
        <a href="{{ route('kontakt') }}">Kapcsolat</a>
        <a href="{{ route('flotta') }}">Flotta</a>
    </nav>

    <!-- Gombok -->
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
        <div class="buttons">
            <a href="{{ route('login') }}" class="btn btn-login">Bejelentkezés</a>
            <a href="{{ route('register') }}" class="btn btn-register">Regisztráció</a>
        </div>
    @endauth
</header>

<div class="container py-5">
    <!-- Személyautók -->
    <h2 class="category-title mt-5">Személyautók</h2>
    <div class="scroll-container">
        @if($flottak->where('kivitel', 1)->count() > 0)
            @foreach($flottak->where('kivitel', 1) as $flotta)
                <div class="card">
                    <img src="img/{{ $flotta->indexkep }}" class="card-img-top" alt="{{ $flotta->tipus }}">
                    <div>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $flotta->tipus }}</h5>
                            <p class="card-text"><strong>{{ $flotta->ar }} Ft/nap</strong></p>
                            <div class="icon-group d-flex justify-content-center mb-3">
                                <span class="d-flex align-items-center me-3">
                                    <i class="fas fa-users text-danger me-1"></i> {{ $flotta->ajtok }} Ajtó
                                </span>
                                <span class="d-flex align-items-center me-3">
                                    <i class="fas fa-cogs text-danger me-1"></i> {{ $flotta->valto }}
                                </span>
                                <span class="d-flex align-items-center">
                                    <i class="fas fa-gas-pump text-danger me-1"></i> {{ $flotta->uzemanyag }}
                                </span>
                            </div>
                        </div>

                      

                        <!-- Foglalás gomb -->
                        <button type="button" class="btn btn-danger w-100 mb-2" 
                                data-bs-toggle="modal" 
                                data-bs-target="#foglalasModal" 
                                data-auto-tipus="{{ $flotta->tipus }}">
                            Foglalás
                        </button>
                          <!-- Foglaltságok megjelenítése az adott autóhoz -->
                        <div class="foglaltsag">
                            <h5 class="text-danger">Foglaltság:</h5>
                            <ul>
                                @php
                                    $autoFoglaltsagok = $foglaltsagok->where('auto_tipus', $flotta->tipus);
                                @endphp

                                @if($autoFoglaltsagok->count() > 0)
                                    @foreach ($autoFoglaltsagok as $foglaltsag)
                                        <li>
                                            {{ $foglaltsag->berles_kezdete }} - {{ $foglaltsag->berles_vege }}
                                        </li>
                                    @endforeach
                                @else
                                    <li class="text-muted">Nincs foglaltság</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>Nincsenek elérhető személyautók.</p>
        @endif
    </div>
</div>





<div class="container py-5">
    <!-- Személyautók -->
    <h2 class="category-title mt-5">Sport</h2>
    <div class="scroll-container">
        @if($flottak->where('kivitel', 2)->count() > 0)
            @foreach($flottak->where('kivitel', 2) as $flotta)
                <div class="card">
                    <img src="img/{{ $flotta->indexkep }}" class="card-img-top" alt="{{ $flotta->tipus }}">
                    <div>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $flotta->tipus }}</h5>
                            <p class="card-text"><strong>{{ $flotta->ar }} Ft/nap</strong></p>
                            <div class="icon-group d-flex justify-content-center mb-3">
                                <span class="d-flex align-items-center me-3">
                                    <i class="fas fa-users text-danger me-1"></i> {{ $flotta->ajtok }} Ajtó
                                </span>
                                <span class="d-flex align-items-center me-3">
                                    <i class="fas fa-cogs text-danger me-1"></i> {{ $flotta->valto }}
                                </span>
                                <span class="d-flex align-items-center">
                                    <i class="fas fa-gas-pump text-danger me-1"></i> {{ $flotta->uzemanyag }}
                                </span>
                            </div>
                        </div>

                      

                        <!-- Foglalás gomb -->
                        <button type="button" class="btn btn-danger w-100 mb-2" 
                                data-bs-toggle="modal" 
                                data-bs-target="#foglalasModal" 
                                data-auto-tipus="{{ $flotta->tipus }}">
                            Foglalás
                        </button>
                          <!-- Foglaltságok megjelenítése az adott autóhoz -->
                        <div class="foglaltsag">
                            <h5 class="text-danger">Foglaltság:</h5>
                            <ul>
                                @php
                                    $autoFoglaltsagok = $foglaltsagok->where('auto_tipus', $flotta->tipus);
                                @endphp

                                @if($autoFoglaltsagok->count() > 0)
                                    @foreach ($autoFoglaltsagok as $foglaltsag)
                                        <li>
                                            {{ $foglaltsag->berles_kezdete }} - {{ $foglaltsag->berles_vege }}
                                        </li>
                                    @endforeach
                                @else
                                    <li class="text-muted">Nincs foglaltság</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>Nincsenek elérhető személyautók.</p>
        @endif
    </div>
</div>




<div class="container py-5">
    <!-- Személyautók -->
    <h2 class="category-title mt-5">Suv</h2>
    <div class="scroll-container">
        @if($flottak->where('kivitel', 3)->count() > 0)
            @foreach($flottak->where('kivitel', 3) as $flotta)
                <div class="card">
                    <img src="img/{{ $flotta->indexkep }}" class="card-img-top" alt="{{ $flotta->tipus }}">
                    <div>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $flotta->tipus }}</h5>
                            <p class="card-text"><strong>{{ $flotta->ar }} Ft/nap</strong></p>
                            <div class="icon-group d-flex justify-content-center mb-3">
                                <span class="d-flex align-items-center me-3">
                                    <i class="fas fa-users text-danger me-1"></i> {{ $flotta->ajtok }} Ajtó
                                </span>
                                <span class="d-flex align-items-center me-3">
                                    <i class="fas fa-cogs text-danger me-1"></i> {{ $flotta->valto }}
                                </span>
                                <span class="d-flex align-items-center">
                                    <i class="fas fa-gas-pump text-danger me-1"></i> {{ $flotta->uzemanyag }}
                                </span>
                            </div>
                        </div>

                      

                        <!-- Foglalás gomb -->
                        <button type="button" class="btn btn-danger w-100 mb-2" 
                                data-bs-toggle="modal" 
                                data-bs-target="#foglalasModal" 
                                data-auto-tipus="{{ $flotta->tipus }}">
                            Foglalás
                        </button>
                          <!-- Foglaltságok megjelenítése az adott autóhoz -->
                        <div class="foglaltsag">
                            <h5 class="text-danger">Foglaltság:</h5>
                            <ul>
                                @php
                                    $autoFoglaltsagok = $foglaltsagok->where('auto_tipus', $flotta->tipus);
                                @endphp

                                @if($autoFoglaltsagok->count() > 0)
                                    @foreach ($autoFoglaltsagok as $foglaltsag)
                                        <li>
                                            {{ $foglaltsag->berles_kezdete }} - {{ $foglaltsag->berles_vege }}
                                        </li>
                                    @endforeach
                                @else
                                    <li class="text-muted">Nincs foglaltság</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>Nincsenek elérhető személyautók.</p>
        @endif
    </div>
</div>



<div class="container py-5">
    <!-- Személyautók -->
    <h2 class="category-title mt-5">Elektromos</h2>
    <div class="scroll-container">
        @if($flottak->where('kivitel', 5)->count() > 0)
            @foreach($flottak->where('kivitel', 5) as $flotta)
                <div class="card">
                    <img src="img/{{ $flotta->indexkep }}" class="card-img-top" alt="{{ $flotta->tipus }}">
                    <div>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $flotta->tipus }}</h5>
                            <p class="card-text"><strong>{{ $flotta->ar }} Ft/nap</strong></p>
                            <div class="icon-group d-flex justify-content-center mb-3">
                                <span class="d-flex align-items-center me-3">
                                    <i class="fas fa-users text-danger me-1"></i> {{ $flotta->ajtok }} Ajtó
                                </span>
                                <span class="d-flex align-items-center me-3">
                                    <i class="fas fa-cogs text-danger me-1"></i> {{ $flotta->valto }}
                                </span>
                                <span class="d-flex align-items-center">
                                    <i class="fas fa-gas-pump text-danger me-1"></i> {{ $flotta->uzemanyag }}
                                </span>
                            </div>
                        </div>

                      

                        <!-- Foglalás gomb -->
                        <button type="button" class="btn btn-danger w-100 mb-2" 
                                data-bs-toggle="modal" 
                                data-bs-target="#foglalasModal" 
                                data-auto-tipus="{{ $flotta->tipus }}">
                            Foglalás
                        </button>
                          <!-- Foglaltságok megjelenítése az adott autóhoz -->
                        <div class="foglaltsag">
                            <h5 class="text-danger">Foglaltság:</h5>
                            <ul>
                                @php
                                    $autoFoglaltsagok = $foglaltsagok->where('auto_tipus', $flotta->tipus);
                                @endphp

                                @if($autoFoglaltsagok->count() > 0)
                                    @foreach ($autoFoglaltsagok as $foglaltsag)
                                        <li>
                                            {{ $foglaltsag->berles_kezdete }} - {{ $foglaltsag->berles_vege }}
                                        </li>
                                    @endforeach
                                @else
                                    <li class="text-muted">Nincs foglaltság</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>Nincsenek elérhető személyautók.</p>
        @endif
    </div>
</div>


<div class="container py-5">
    <!-- Személyautók -->
    <h2 class="category-title mt-5">Verseny </h2>
    <div class="scroll-container">
        @if($flottak->where('kivitel', 4)->count() > 0)
            @foreach($flottak->where('kivitel', 4) as $flotta)
                <div class="card">
                    <img src="img/{{ $flotta->indexkep }}" class="card-img-top" alt="{{ $flotta->tipus }}">
                    <div>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $flotta->tipus }}</h5>
                            <p class="card-text"><strong>{{ $flotta->ar }} Ft/nap</strong></p>
                            <div class="icon-group d-flex justify-content-center mb-3">
                                <span class="d-flex align-items-center me-3">
                                    <i class="fas fa-users text-danger me-1"></i> {{ $flotta->ajtok }} Ajtó
                                </span>
                                <span class="d-flex align-items-center me-3">
                                    <i class="fas fa-cogs text-danger me-1"></i> {{ $flotta->valto }}
                                </span>
                                <span class="d-flex align-items-center">
                                    <i class="fas fa-gas-pump text-danger me-1"></i> {{ $flotta->uzemanyag }}
                                </span>
                            </div>
                        </div>

                      

                        <!-- Foglalás gomb -->
                        <button type="button" class="btn btn-danger w-100 mb-2" 
                                data-bs-toggle="modal" 
                                data-bs-target="#foglalasModal" 
                                data-auto-tipus="{{ $flotta->tipus }}">
                            Foglalás
                        </button>
                          <!-- Foglaltságok megjelenítése az adott autóhoz -->
                        <div class="foglaltsag">
                            <h5 class="text-danger">Foglaltság:</h5>
                            <ul>
                                @php
                                    $autoFoglaltsagok = $foglaltsagok->where('auto_tipus', $flotta->tipus);
                                @endphp

                                @if($autoFoglaltsagok->count() > 0)
                                    @foreach ($autoFoglaltsagok as $foglaltsag)
                                        <li>
                                            {{ $foglaltsag->berles_kezdete }} - {{ $foglaltsag->berles_vege }}
                                        </li>
                                    @endforeach
                                @else
                                    <li class="text-muted">Nincs foglaltság</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>Nincsenek elérhető személyautók.</p>
        @endif
    </div>
</div>



<!-- Foglalási modális -->
<div class="modal fade" id="foglalasModal" tabindex="-1" aria-labelledby="foglalasModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="foglalasModalLabel">Foglalás</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="{{ route('foglalas.submit') }}">
        @csrf
        <div class="modal-body">
          <!-- Név -->
          <div class="mb-3">
            <label for="nev" class="form-label">Név</label>
            <input type="text" class="form-control" id="nev" name="nev" value="{{ Auth::check() ? Auth::user()->name : '' }}" placeholder="Add meg a neved" 
              {{ Auth::check() ? 'readonly' : '' }} 
              required>
              <!-- E-mail --> 
               <div class="mb-3"> <label for="email" class="form-label">E-mail</label> 
               <input type="email" class="form-control" id="email" name="email" value="{{ Auth::check() ? Auth::user()->email : '' }}" placeholder="Add meg az e-mail címed" {{ Auth::check() ? 'readonly' : '' }} required> </div> 
          </div>
          <div class="mb-3">
            <label for="telefonszam" class="form-label">Telefonszám</label>
            <input type="text" class="form-control" id="telefonszam" name="telefonszam" placeholder="Add meg a telefonszámod" required>
            </div>
          <!-- Indulási dátum -->
          <div class="mb-3">
            <label for="indulasi_datum" class="form-label">Indulási dátum</label>
            <input type="date" class="form-control" id="indulasi_datum" name="indulasi_datum" required>
          </div>
          <!-- Érkezési dátum -->
          <div class="mb-3">
            <label for="erkezesi_datum" class="form-label">Érkezési dátum</label>
            <input type="date" class="form-control" id="erkezesi_datum" name="erkezesi_datum" required>
          </div>
          <!-- Rejtett mező az autó típusának tárolására -->
          <input type="hidden" id="auto_tipus" name="auto_tipus" value="">
        </div>
        <div class="modal-footer">
   
    @if(Auth::check())
        <button type="submit" class="btn btn-danger">Foglalás mentése</button>
    @else
        <p class="text-danger">A foglaláshoz be kell jelentkezned!</p>
        <a href="{{ route('login') }}" class="btn btn-primary">Bejelentkezés</a>
    @endif
</div>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const autoTipusInput = document.getElementById('auto_tipus');

    document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
      button.addEventListener('click', function () {
        const autoTipus = this.getAttribute('data-auto-tipus');
        autoTipusInput.value = autoTipus;
      });
    });
  });
</script>
</body>
</html>
