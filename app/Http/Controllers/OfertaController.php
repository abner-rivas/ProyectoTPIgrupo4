<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Oferta;

class OfertaController extends Controller
{
    //Index

    //Create

    public function editar(Oferta $oferta)
    {
        return View('ofertas.editar', ['oferta' => $oferta]);
    }

    public function actualizar(Request $request)
    {
        $oferta = Oferta::find($request->id);
        $oferta->carreras_solicitadas = $request->carreras;
        $oferta->puesto = $request->puesto;
        $oferta->cantidad_estudiantes = $request->estudiantes;
        $oferta->salario = $request->salario;
        $oferta->descripcion_proyecto = $request->descripcion;
        $oferta->fecha_inicio = $request->fecha_inicio;
        $oferta->fecha_fin = $request->fecha_fin;
        $oferta->fecha_max_aplicar = $request->fecha_max;
        $oferta->save();
        //redirigir al index del controlador
    }

    public function eliminar($id)
    {
        Oferta::destroy($id);
        //redirigir al index del controlador
    }
}
