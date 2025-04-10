<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Berles;
use App\Models\Flotta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlottaController extends Controller
{
    /**
     * Flotta megjelenítése.
     */
    public function index()
    {
        // Lekérjük az összes adatot a flottak táblából
        $flottak = Flotta::all();

        // Átadjuk az adatokat a nézetnek
        return view('flotta', compact('flottak'));
    }

    /**
     * Foglalás mentése.
     */
    public function berel(Request $request, $id)
    {
        // Ellenőrizzük, hogy a felhasználó be van-e jelentkezve
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Be kell jelentkezned a bérléshez!');
        }

        // Lekérjük az autót
        $flotta = Flotta::findOrFail($id);

        // Létrehozzuk a bérlést
        Berles::create([
            'user_name' => Auth::user()->name, // Felhasználó neve
            'user_email' => Auth::user()->email, // Felhasználó e-mail címe
            'auto_tipus' => $flotta->tipus, // Autó típusa
            'berles_kezdete' => $request->indulasi_datum, // Indulási dátum
            'berles_vege' => $request->erkezesi_datum, // Érkezési dátum
        ]);

        return redirect()->route('flotta')->with('success', 'Sikeresen kibérelted az autót!');
    }
   
    public function showFlotta()
{
    $foglaltsagok = DB::table('berlesek')
        ->select('auto_tipus', 'berles_kezdete', 'berles_vege')
        ->get();

    $flottak = DB::table('flotta')->get();

    return view('flotta', compact('foglaltsagok', 'flottak'));
}
}
