<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Foglalas;

class FoglalasController extends Controller
{
    /**
     * Foglalás mentése ütközésellenőrzéssel.
     */
    public function submit(Request $request)
{
    // Ellenőrizd, hogy a felhasználó be van-e jelentkezve
    if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'A foglaláshoz be kell jelentkezned!');
    }

    // Adatok validálása
    $validatedData = $request->validate([
        'nev' => 'required|string|max:255',
        'indulasi_datum' => 'required|date|after_or_equal:today',
        'erkezesi_datum' => 'required|date|after:indulasi_datum',
        'auto_tipus' => 'required|string|max:255',
        'telefonszam' => 'required|string|max:15', // Telefonszám validáció
    ]);

    $userName = $validatedData['nev'];
    $autoTipus = $validatedData['auto_tipus'];
    $berlesKezdete = $validatedData['indulasi_datum'];
    $berlesVege = $validatedData['erkezesi_datum'];

    // Ellenőrizd, hogy van-e ütközés
    $utkozes = DB::table('berlesek')
        ->where('auto_tipus', $autoTipus)
        ->where(function ($query) use ($berlesKezdete, $berlesVege) {
            $query->whereBetween('berles_kezdete', [$berlesKezdete, $berlesVege])
                  ->orWhereBetween('berles_vege', [$berlesKezdete, $berlesVege])
                  ->orWhere(function ($query) use ($berlesKezdete, $berlesVege) {
                      $query->where('berles_kezdete', '<=', $berlesKezdete)
                            ->where('berles_vege', '>=', $berlesVege);
                  });
        })
        ->exists();

    if ($utkozes) {
        return redirect()->back()->withErrors(['error' => 'Ez az autó már foglalt az adott időszakra.']);
    }

    // Ha nincs ütközés, mentsd el a foglalást
    DB::table('berlesek')->insert([
        'user_name' => $userName,
        'auto_tipus' => $autoTipus,
        'berles_kezdete' => $berlesKezdete,
        'berles_vege' => $berlesVege,
        'telefonszam' => $request->telefonszam, // Telefonszám mentése
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect()->back()->with('success', 'Foglalás sikeresen mentve!');
}



    /**
     * Foglalások megjelenítése a dashboard oldalon.
     */
    public function dashboard()
    {
        // Lekérjük az összes foglalást
        $osszesFoglalas = DB::table('berlesek')->get();
    
        // Lekérjük a bejelentkezett felhasználó foglalásait
        $sajatFoglalasok = DB::table('berlesek')
            ->where('user_name', auth()->user()->name)
            ->get();
    
        // Visszaadjuk a nézetnek
        return view('dashboard', compact('osszesFoglalas', 'sajatFoglalasok'));
    }

    /**
     * Foglalás törlése.
     */
    public function torles($id)
    {
        // Töröljük a foglalást az ID alapján
        DB::table('berlesek')->where('id', $id)->delete();

        // Visszairányítás a dashboardra sikerüzenettel
        return redirect()->route('dashboard')->with('success', 'Foglalás sikeresen törölve!');
    }

    /**
     * Főoldal megjelenítése.
     */
    public function fooldal()
    {
        $foglalasokSzama = 0;

        if (auth()->check()) {
            // Lekérjük a bejelentkezett felhasználó foglalásainak számát
            $foglalasokSzama = DB::table('berlesek')
                ->where('user_name', auth()->user()->name)
                ->count();
        }

        return view('fooldal', compact('foglalasokSzama'));
    }
    public function foglalasForm($id)
    {
        // Lekérjük az autóhoz tartozó foglalásokat
        $foglalasok = DB::table('berlesek')
            ->where('auto_tipus', $id) // Az autó típusa alapján szűrünk
            ->get();
    
        // Visszaadjuk a nézetet a foglalásokkal
        return view('foglalas_form', compact('foglalasok'));
    }
   
}
