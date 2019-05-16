@extends('Programador.layout')

@section('content')

<H1 class="text-center">&copy; ariel</H1>
<div class="container">

    
<a class="btn btn-primary" href="{{route('Programador.create')}}">Asignar proyecto</a>
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

  @foreach($books as $programa)
    <tr>
      <th scope="row">{{ $programa->id }}</th>
      <td>{{ $programa->nombre }}</td>
      <td>{{ $programa->actividad }}</td>
      <td>{{ $programa->inicio }}</td>
      <td>{{ $programa->fin }}</td>
      <td>{{ $programa->tiempo }}</td>
      <td>{{ $programa->fecha }}</td>
      <td>{{ $programa->terminado }}</td>
      <td>{{ $programa->comentarios }}</td>

      <td><a class=" btn btn-info botoninput" href=" {{ route('Programador.edit', $programa->id)}}"><i class="fas fa-edit"></i>
    </a>
    <form action="{{ route('Programador.destroy',$programa->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
      
          <button type="submit" class="btn-sm btn-danger mt-3" onclick="return confirm('Quiere borrar el registro?')" ><i class="far fa-trash-alt"></i></button>

        </form>

</td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$books->links()}}
</div>



@endsection 