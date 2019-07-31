@extends('books.layout')

@section('content')
<h1 class="text-center">Actualizar proyecto</h1>
<hr>
@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif
 <div class="container">
 
 <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <form action="{{ route('books.update' , $book->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf

    @method('PUT')
                    <div class="wrapper fadeInDown">
  <div id="formContent">


    <form>
      <label for="nombre" class="col-3 col-form-label">Prioridad</label>
      <input type="text" id="" class="fadeIn second" name="nombre" value={{ $book->orden }} placeholder="Escribe el nombre proyecto">
      <br>
      <label for="nombre" class="col-3 col-form-label">Nombre del proyecto</label>
      <input type="text" id="" class="fadeIn second" name="nombre" value={{ $book->nombre }} placeholder="Escribe el nombre proyecto">
      <br>
      <label for="nombre" class="col-3 col-form-label">Nombre de la actividad</label>
      <input type="text" id="" class="fadeIn second" name="actividad" value={{ $book->actividad }} placeholder="Escribe el nombre de la actividad">
      <br>
      <label for="nombre" class="col-3 col-form-label">Hora de inicio</label>
      <input type="time" id="" class="fadeIn second" name="inicio" value={{ $book->inicio }} placeholder="Escribe la hora de incio">
      <br>
      <label for="nombre" class="col-3 col-form-label">Hora de finalización de tarea asignada</label>
      <input type="time" id="" class="fadeIn second" name="fin" value={{ $book->fin }} placeholder="Escribe la hora de finalización de tarea asignada">
      <br> 
      <label for="nombre" class="col-3 col-form-label">Tiempo estimado de la actividad</label>
      <input type="time" id="" class="fadeIn second" name="tiempo" value={{ $book->tiempo }} placeholder="Escribe el tiempo estimado de la actividad">
      <br> 
      <label for="nombre" class="col-3 col-form-label">Fecha de la tarea asignada</label>
      <input type="date" id="" class="fadeIn second" name="fecha" value={{ $book->fecha }} placeholder="Escribe la fecha de la tarea asignada">
      <br>
      <label for="nombre" class="col-3 col-form-label">Terminino la tarea</label>
      <input type="checkbox" name="terminado" value={{ $book->terminado }} placeholder="No"> 
      <br>
      <label for="nombre" class="col-3 col-form-label">Escribe un comentario</label>
      <input type="text" id="" class="fadeIn second" name="comentarios" value=  {{ $book ->comentarios }} placeholder="Escribe un comentario">
      <br>
      
      
      
      </div>
</div>
                    <br>
                    <br>
                    <br>
                    <div class="form-group">
                            <button name="submit" type="submit" class="btn btn-primary">Guardar</button>
                            <a class="btn btn-success float-right" href="{{ route('books.index') }}">Cancelar</a>
                    </div>
    </form>

</div>
 </div>
@endsection