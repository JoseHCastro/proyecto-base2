<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {




        return view('home');
    }

    public function estudiantes_inscritos()
    {

        $resultados = DB::table('Carrera as c')
            ->join('Inscripcion as i', 'c.Carrera_ID', '=', 'i.Carrera_ID')
            ->select('c.Localidad', DB::raw('SUM(i.Total_Inscritos) as Total_Inscritos'))
            ->groupBy('c.Localidad')
            ->orderBy(DB::raw('SUM(i.Total_Inscritos)'), 'DESC') // Ordenar por Total_Inscritos descendente
            ->get();


        $labels = $resultados->pluck('Localidad')->toArray();
        $data = $resultados->pluck('Total_Inscritos')->toArray();


        return view('estudiantes_inscritos', compact('resultados', 'labels', 'data'));
    }
}
