@extends('layouts.admin')

@section('content')
<h1 class="text-center">Asignar tarea</h1>
<hr>
@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif

<div class="container">
        <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>
                <form action="{{ route('auxiliar.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="wrapper fadeInDown">
                        <div id="formContent">
                                <label for="nombre" class="col-3 col-form-label">Orden de la actividad</label>
                                <input type="text" id="login" class="fadeIn second" name="orden" value="{{ old('orden') }}" placeholder="Cambia el orden de la actividad">
                                <label for="nombre" class="col-3 col-form-label">Nombre del proyecto</label>
                                <input type="text" id="login" class="fadeIn second" name="nombre" value="{{ old('nombre') }}" placeholder="Escribe el nombre proyecto">
                                <label for="nombre" class="col-3 col-form-label">Nombre de la actividad</label>
                                <input type="text" id="login" class="fadeIn second" name="actividad" value="{{ old('actividad') }}" placeholder="Escribe el nombre de la actividad">
                                <label for="nombre" class="col-3 col-form-label">Hora de inicio</label>
                                <input type="text" id="login" class="fadeIn second" name="inicio" value="{{ old('inicio') }}" placeholder="Escribe la hora de incio">
                                <label for="nombre" class="col-3 col-form-label">Hora de finalización de tarea asignada</label>
                                <input type="text" id="login" class="fadeIn second" name="fin" value="{{ old('fin') }}" placeholder="Escribe la hora de finalización de tarea asignada">
                                <label for="nombre" class="col-3 col-form-label">Tiempo estimado de la actividad</label>
                                <input type="text" id="login" class="fadeIn second" name="tiempo" value="{{ old('tiempo') }}" placeholder="Escribe el tiempo estimado de la actividad">
                                <label for="nombre" class="col-3 col-form-label">Contador</label>
                                <input type="text" id="login" class="fadeIn second" name="tiempo" value="{{ old('contador') }}" placeholder="Escribe el tiempo estimado de la actividad">
                                <label for="nombre" class="col-3 col-form-label">Fecha de la tarea asignada</label>
                                <input type="text" id="login" class="fadeIn second" name="fecha" value="{{ old('fecha') }}" placeholder="Escribe la fecha de la tarea asignada">
                                <label for="nombre" class="col-3 col-form-label">Terminino la tarea</label>
                                <input type="checkbox" name="terminado" value="{{ old('terminado') }}"> Si<br>
                                <input type="checkbox" name="terminado" value="{{ old('terminado') }}"> No<br>
                                <label for="nombre" class="col-3 col-form-label">Escribe un comentario</label>
                                <input type="text" id="login" class="fadeIn second" name="comentarios" value="{{ old('comentarios') }}" placeholder="Escribe un comentario">  
                        </div>
                </div>
                <div class="form-group">
                        <button name="submit" type="submit" class="btn btn-primary">Guardar</button>
                        <a class="btn btn-success float-right" href="{{ route('auxiliar.index') }}">Cancelar</a>
                </div>

                </form>  
        </div>
</div>

@endsection