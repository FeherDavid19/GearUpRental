<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GearUpRental Dashboard</title>
    <link href="img/car-alt-solid.png" rel="icon">
    <style>
 /* Alap stílusok */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: 'Arial', sans-serif;
    background-color: #0d1b2a;

    color:rgb(255, 255, 255);
    display: flex;
    height: 100vh;
}

/* Oldalsó navigációs sáv */
.sidebar {
    width: 250px;
    background-color:rgb(255, 255, 255); /* Piros háttérszín */
    color: #fff;
    display: flex;
    flex-direction: column;
    padding: 20px;
    box-shadow: 2px 0 10px rgba(0, 0, 0, 0.3);
}
.sidebar h2 {
    color:black;
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
    font-weight: bold;
    text-transform: uppercase;
}
.sidebar a {
    text-decoration: none;
    color: black;
    padding: 10px 15px;
    margin: 5px 0;
    border-radius: 5px;
    display: block;
    transition: background-color 0.3s ease;
    font-weight: bold;
}
.sidebar a:hover {
    background-color:rgba(23, 23, 23, 0.43); /* Sötétebb piros hover állapotban */
}
.sidebar  {
    background-color:rgb(255, 255, 255); /* Sötétebb piros hover állapotban */

    font-weight: bold;
}
.sidebar button {
    width: 100%;
    padding: 10px;
    background-color:rgba(22, 21, 21, 0.59); /* Piros gomb */
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s ease;
}
.sidebar button:hover {
    background-color: #b02a37; /* Sötétebb piros hover állapotban */
}

/* Fő tartalom */
.main-content {
    flex: 1;
    display: flex;
    flex-direction: column;
}

/* Fejléc */
.header {
     background-color: #b02a37; /* Sötétebb piros hover állapotban */
   

    padding: 15px 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.header h1 {
    font-size: 24px;
    color: #f8f9fa;
    font-weight: bold;
}
.header .user-info {
    display: flex;
    align-items: center;
    gap: 10px;
}
.header .user-info img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 3px solid #dc3545; /* Piros keret */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}
.header .user-info span {
    font-size: 18px;
    color: #f8f9fa;
    font-weight: bold;
}

/* Tartalom */
.content {
    padding: 20px;
    flex: 1;
}
.content h2 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #f8f9fa;
    font-weight: bold;
}

/* Táblázat */
.content table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #1e1e1e; /* Sötét szürke háttérszín */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    border-radius: 5px;
    overflow: hidden;
}
.content th, .content td {
    padding: 15px;
    border: 1px solid #343a40;
    text-align: left;
}
.content th {
    background-color: #dc3545; /* Piros fejlécek */
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
}
.content td {
    background-color: #2a2a2a; /* Sötét cellák */
    transition: background-color 0.3s ease;
}
.content tr:hover td {
    background-color: #343a40; /* Hover állapot */
}
.content button {
    background-color: #dc3545; /* Piros gomb */
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s ease;
}
.content button:hover {
    background-color: #b02a37; /* Sötétebb piros hover állapotban */
}

/* Kártyák */
.card-container {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    justify-content: center;
    padding: 20px;
}
.card {
    background-color: #1e1e1e; /* Sötét háttérszín */
    color: #f8f9fa; /* Világos szöveg */
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); /* Árnyék */
    width: 250px; /* Kártya szélessége */
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card:hover {
    transform: scale(1.05); /* Kiemelés hover állapotban */
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.5); /* Erősebb árnyék hover állapotban */
}
.card img {
    width: 100%;
    height: auto;
    border-bottom: 2px solid #dc3545; /* Piros kiemelés */
}
.card-content {
    padding: 15px;
    text-align: center;
}
.card-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
}
.card-price {
    font-size: 16px;
    color: #dc3545; /* Piros szín */
    font-weight: bold;
    margin-bottom: 10px;
}
.card-icons {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-bottom: 15px;
    font-size: 14px;
}
.card-button {
    background-color: #dc3545; /* Piros gomb */
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s ease;
    text-align: center;
    display: block;
}
.card-button:hover {
    background-color: #b02a37; /* Sötétebb piros hover állapotban */
}
/* Modális ablak stílusok */
.modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.modal-content {
    background-color: #1b263b;
    border: 1px solid #415a77;
    border-radius: 10px;
    color: #ffffff;
    padding: 20px;
    width: 400px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #415a77;
    padding-bottom: 10px;
}

.modal-title {
    font-size: 1.5rem;
    font-weight: bold;
}

.btn-close {
    background-color: transparent;
    border: none;
    font-size: 1.5rem;
    color: #dc3545;
    cursor: pointer;
}

.modal-body {
    margin: 20px 0;
    font-size: 1rem;
}

.modal-footer {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
}

.modal-footer .btn {
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
}

.modal-footer .btn-danger {
    background-color: #dc3545;
    color: #ffffff;
    border: none;
}

.modal-footer .btn-danger:hover {
    background-color: #b02a37;
}

.modal-footer .btn-secondary {
    background-color: #415a77;
    color: #ffffff;
    border: none;
}

.modal-footer .btn-secondary:hover {
    background-color: #2c3e50;
}

    </style>
</head>
<body>
    <!-- Oldalsó navigáció -->
    <div class="sidebar">
        <h2>
            <img src="img/car-alt-solid.png" alt="GearUpRental Logo" style="width: 30px; height: 30px; vertical-align: middle; margin-right: 10px;">
            GearUpRental
        </h2>
        <a href="/fooldal" class="active">Főoldal</a>
        <a href="/flotta">Flotta</a>
        <a href="/kontakt">Kapcsolat</a>
        <a href="/szolg altatasok">Szolgáltatások</a>
        <form method="POST" action="/logout" style="margin-top: 10px;">
         
        </form>
    </div>

    <!-- Fő tartalom -->
    <div class="main-content">
        <!-- Fejléc -->
        <div class="header">
            <h1>Üdvözlünk a GearUpRental Dashboardon!</h1>
            <div class="user-info">
               
            </div>
        </div>

        <div class="content">
    <h2>Foglalások</h2>
    <br>
<br>
<br>
    <!-- Összes foglalás -->
    <h3>Összes foglalás</h3>
    <div class="table-responsive">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>Felhasználó neve</th>
                    <th>Autó típusa</th>
                    <th>Bérlés kezdete</th>
                    <th>Bérlés vége</th>
                </tr>
            </thead>
            <tbody>
                @foreach($osszesFoglalas as $foglalas)
                    <tr>
                        <td>{{ $foglalas->user_name }}</td>
                        <td>{{ $foglalas->auto_tipus }}</td>
                        <td>{{ $foglalas->berles_kezdete }}</td>
                        <td>{{ $foglalas->berles_vege }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
    <!-- Saját foglalások -->
    <h3>Saját foglalások</h3>
    @if($sajatFoglalasok->isEmpty())
        <div class="alert alert-warning">
            <strong>Nincs aktív foglalásod.</strong>
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>Autó típusa</th>
                        <th>Bérlés kezdete</th>
                        <th>Bérlés vége</th>
                        <th>Művelet</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sajatFoglalasok as $foglalas)
                        <tr>
                            <td>{{ $foglalas->auto_tipus }}</td>
                            <td>{{ $foglalas->berles_kezdete }}</td>
                            <td>{{ $foglalas->berles_vege }}</td>
                            <td>
                                <form action="{{ route('foglalas.torles', $foglalas->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                   
    <button type="button" class="btn btn-danger" onclick="openModal('{{ route('foglalas.torles', $foglalas->id) }}')">Lemondás</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
<!-- Modális ablak -->
<div id="confirmModal" class="modal" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Megerősítés</h5>
            <button class="btn-close" onclick="closeModal()">×</button>
        </div>
        <div class="modal-body">
            <p>Biztosan le szeretnéd mondani a foglalást?</p>
        </div>
        <div class="modal-footer">
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Igen</button>
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Mégse</button>
            </form>
        </div>
    </div>
</div>
<script>
    function openModal(actionUrl) {
        const modal = document.getElementById('confirmModal');
        const deleteForm = document.getElementById('deleteForm');
        deleteForm.action = actionUrl; // Beállítja a form action URL-jét
        modal.style.display = 'flex'; // Megjeleníti a modális ablakot
    }

    function closeModal() {
        const modal = document.getElementById('confirmModal');
        modal.style.display = 'none'; // Bezárja a modális ablakot
    }
</script>
</body>
</html>
