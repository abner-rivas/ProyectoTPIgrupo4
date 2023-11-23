@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Oferta</div>

                <div class="card-body">
                    @if (isset($oferta))
                    <form action="{{route('ofertas.actualizar', $oferta->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="" class="form-label">Puesto</label>
                            <input type="text" name="puesto" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $oferta->puesto }}">
                            <label for="" class="form-label">Carreras Solicitadas</label>
                            <input type="text" name="carreras" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $oferta->carreras_solicitadas }}">
                            <label for="" class="form-label">Cantidad de Estudiantes</label>
                            <input type="number" step="1" name="estudiantes" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $oferta->cantidad_estudiantes }}">
                            <label for="" class="form-label">Salario</label>
                            <input type="number" step="0.10 " name="salario" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $oferta->salario }}">
                            <label for="" class="form-label">Descripción de Proyecto</label>
                            <textarea name="descripcion" id="" cols="80" rows="10" class="form-control">{{ $oferta->descripcion_proyecto}}</textarea>
                            <label for="" class="form-label">Fecha de inicio</label>
                            <input type="datetime-local" name="fecha_inicio" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $oferta->fecha_inicio}}">
                            <label for="" class="form-label">Fecha de Finalizacion</label>
                            <input type="datetime-local" name="fecha_fin" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $oferta->fecha_fin }}">
                            <label for="" class="form-label">Fecha límite de aplicación</label>
                            <input type="datetime-local" name="fecha_max" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $oferta->fecha_max_aplicar }}">
                        </div>
                        <div class="d-grid gap-2">
                          <button type="submit" name="" id="" class="btn btn-primary">Actualizar</button>
                        </div>
                    </form>
                    @else
                    <h2 class="display-2">
                        Oferta no encontrada!
                    </h2>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection