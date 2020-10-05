<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Carbon::setLocale('es');
        setlocale(LC_TIME,'es_ES');
        $hoy = Carbon::now('America/Mexico_City')->formatLocalized("%A %d %B de %Y");
        return view('home', [
            'fecha' => $hoy
        ]);
    }

    /**
     * Mostrar todas las categorías disponibles
     */
    public function categorias(){
        return view('categorias.main');
    }
}
