<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preguntas;

class PreguntasController extends Controller
{
    public function carga_pregunta()
    {
        $temas = array("Economia", "Filosofia", "Historia", "Lengua", "Ingles");
        return view('/vistaPreguntas')
            ->with('pregunta', Preguntas::where('tema', array_rand($temas, 5))->inRandomOrder()->limit(1)->get())
            ->with('tema', array_rand($temas, 5));
    }
}
