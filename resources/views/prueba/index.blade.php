@extends('prueba.layout')

@section('content')

<H1 class="text-center">&copy; ariel</H1>
<div class="container">

    
<a class="btn btn-primary" href="{{route('prueba.create')}}">Asignar proyecto</a>
<a class="btn btn-primary mb-3 float-right" href="  ">Imprimir</a>





<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
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

  @foreach($texts as $text)
    <tr>
      <th scope="row">{{ $text->id }}</th>
      <td>{{ $text->nombre }}</td>
      <td>{{ $text->actividad }}</td>
      <td>{{ $text->inicio }}</td>
      <td>{{ $text->fin }}</td>
      <td>{{ $texts=$text->tiempo+$text->tiempo }}</td>

      <td>{{ $text->fecha }}</td>
      <td>{{ $text->terminado }}</td>
      <td>{{ $text->comentarios }}</td>


      <td><a class=" btn btn-info botoninput" href=" {{ route('prueba.edit', $text->id)}}"><i class="fas fa-edit"></i>
    </a>
    <form action="{{ route('prueba.destroy',$text->id) }}" method="POST">
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