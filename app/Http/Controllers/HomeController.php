<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // DB osztály importálása
use Illuminate\Support\Facades\Auth; // Auth osztály importálása (ha szükséges)

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
    public function dashboard()
{
    // Lekérjük a bejelentkezett felhasználó foglalásait
    $foglalasok = DB::table('berlesek')
        ->where('user_name', auth()->user()->name)
        ->get();

    // Visszaadjuk a nézetnek
    return view('dashboard', compact('foglalasok'));
}
}