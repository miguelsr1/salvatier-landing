<?php

namespace App\Http\Controllers;

use App\Models\Abogado;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Mostrar la landing page.
     */
    public function index()
    {
        $datos = [
            'nombreEmpresa' => 'SALVATIER ABOGADOS',
            'descripcion' => 'Más alla de nuestra experiencia técnica, nos distinguimos por nuestro enfoque empático y centrado en la persona. entendemos que cada caso es ńico y que detrás de cada situación legal hay un ser humano con necesidades y preocupaciones.',
            'equipoTitle' => 'Equipo jurídico',
            'equipoDesc' => 'Contamos con un equipo de abogados comprometidos con la justicia, la excelencia y las personas. Cada uno aporta su experiencia y conocimiento técnico, pero también un enfoque humano que entiende, acompaña y apoya a quienes confían en nosotros',
            'abogados' => Abogado::obtenerEquipo()
        ];
        
        return view('landing', $datos);
    }
}
