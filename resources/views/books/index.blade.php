@extends('layouts.admin')


@section('content')

<br>
<div class="container">

    
<a class="btn btn-primary" href="{{route('books.create')}}">Asignar proyecto</a>
<a class="btn btn-primary mb-3 float-right" href="{{ url('books.create') }}">Imprimir</a>
<br>
<br>

@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif


    <H1 class="text-center"></H1>

    <div class="row">
  <div class="col-md-6">
  <h1 class="text-center"><strong>Nombre:</strong>Fernando</h1>  

  </div>
  <div class="col-md-6">
 <h1 class="text-center"><strong>Cargo:</strong>Project Manager</h1>

  </div>
</div>   
<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Prioridad</th>
      <th scope="col">Nombre del proyecto</th>
      <th scope="col">Actividad</th>
      <th scope="col">inicio del proyecto</th>
      <th scope="col">Fin del proyecto</th>
      <th scope="col">Tiempo estimado de la actividad</th>
      <th scope='col'>Fecha</th>
      <th scope='col'>Terminado</th>
      <th scope='col'>Comentarios</th>
      <th scope='col'>Acciones</th>
      

    </tr>
  </thead>
  <tbody>

  @foreach($books as $book)
    <tr>
      <th scope="row">{{ $book->id }}</th>
      <td>{{ $book->orden }}</td>
      <td>{{ $book->nombre }}</td>
      <td>{{ $book->actividad }}</td>
      <td>{{ $book->inicio }}</td>
      <td>{{ $book->fin }}</td>
      <td>{{ $book->tiempo }}</td>
      <td>{{ $book->fecha }}</td>
      <td>{{ $book->terminado }}</td>
      <td>{{ $book->comentarios }}</td>


      <td><a class=" btn btn-info botoninput" href=" {{ route('books.edit', $book->id)}}"><i class="fas fa-edit"></i>
    </a>
    <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
      
          <button type="submit" class="btn-sm btn-danger mt-3" onclick="return confirm('Quiere borrar el registro?')" ><i class="far fa-trash-alt"></i></button>

        </form>

</td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>




@endsection 