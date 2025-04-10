<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <title>Jelszó Visszaállítás Sikeres - GearUpRental</title>
    <link rel="icon" href="img/car-alt-solid.png" type="image/png" sizes="16x16">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <style>
        body {
            font-family: 'Lato', sans-serif;
            background: #0d1b2a;
            /* Sötétkék háttér */
            color: #fff;
        }

        /* Fejléc stílus */
        .header {
            background: #fff;
            padding: 10px 20px;
            text-align: center;
            border-bottom: 2px solid #e63946;
        }

        .header h1 {
            font-size: 24px;
            font-weight: 700;
            color: #e63946;
            /* Piros szöveg */
            display: inline-flex;
            align-items: center;
            margin: 0;
        }

        .header h1 i {
            font-size: 28px;
            margin-right: 10px;
        }

        .confirm-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            background: #1b263b;
            /* Sötétebb kék háttér az űrlaphoz */
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .confirm-container h1 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
            color: #e63946;
            /* Piros szöveg */
        }

        .btn-primary {
            border-radius: 30px;
            background-color: #e63946;
            /* Piros gomb */
            border: none;
        }

        .btn-primary:hover {
            background-color: #d62828;
            /* Sötétebb piros gomb hover */
        }

        .text-muted {
            font-size: 14px;
            color: #ccc !important;
        }

        .back-to-home {
            text-align: center;
            margin-top: 20px;
        }

        .back-to-home a {
            text-decoration: none;
            color: #e63946;
            /* Piros link */
        }

        .back-to-home a:hover {
            color: #d62828;
            /* Sötétebb piros link hover */
        }
    </style>
</head>

<body>
    <!-- Fejléc -->
    <div class="header">
        <a href="{{ route('fooldal') }}" class="navbar-brand p-0">
            <h1><i class="fas fa-car"></i> GearUpRental</h1>
        </a>
    </div>

    <!-- Jelszó visszaállítás megerősítő oldal -->
    <div class="confirm-container">
        <h1>Jelszó Visszaállítás Sikeres!</h1>
        <p>A jelszava sikeresen vissza lett állítva.</p>
        <div class="back-to-home">
            <a href="{{ route('login') }}" class="btn btn-primary">Bejelentkezés</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>