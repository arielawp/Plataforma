@extends('Diseño.layout')

@section('content')
<h1 class="text-center">Asignar tarea</h1>
<hr>
@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif

<div class="container">
  <form action="{{ route('Diseño.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nombre del proyecto:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="Escribe el nombre proyecto">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nombre de la actividad:</strong>
                <textarea class="form-control"  name="actividad" placeholder="Escribe el nombre de la actividad"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Hora de inicio:</strong>
                <input type="text" name="inicio" class="form-control" placeholder="Escribe la hora de incio">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Hora de finalización de tarea asignada:</strong>
                <textarea class="form-control"  name="fin" placeholder="Escribe la hora de finalización de tarea asignada"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Fecha de la tarea asignada:</strong>
                <input type="text" name="fecha" class="form-control" placeholder="Escribe la fecha de la tarea asignada">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Terminino la tarea:</strong>
                <textarea class="form-control"  name="terminado" placeholder="Escribe el terminino la tarea"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Escribe un comentario</strong>
                <textarea class="form-control"  name="comentarios" placeholder="Escribe un comentario"></textarea>
            </div>
        </div>
        <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
   
</form>
</div>
@endsection