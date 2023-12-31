<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Oferta;
use Illuminate\Support\Facades\DB;

class OfertaController extends Controller
{
    //Index

    //Create

    public function create(Request $request)
    {
        $oferta = new Oferta();
        $oferta->id_empresa = $request->empresa;
        $oferta->puesto = $request->puesto;
        $oferta->carreras_solicitadas = $request->carreras;
        $oferta->salario = $request->salario;
        $oferta->descripcion_proyecto = $request->descripcion;
        $oferta->fecha_max_aplicar = $request->fecha_max;
        $oferta->save();
        return redirect()->route('ofertas.index');
    }

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
        return redirect()->route('home');
    }

    public function eliminar($id)
    {
        Oferta::destroy($id);
        //redirigir al index del controlador
    }

    //Obtener las ofertas con el id del usuario logueado
    public function index()
    {
        //$ofertas = Oferta::where('id_empresa', auth()->user()->id)->get();
        //return View('ofertas.show', ['show' => $ofertas]);
        //retonar las ofertas del usuario logueado en un json
        //return response()->json($ofertas);
        //$oferta = Oferta::select("select ofertas * from ");
        //return $oferta;
        $oferta = DB::select("select * from ofertas");
        return view("ofertas.index")->with("oferta", $oferta);
    }
}
