@extends('auxiliar.layout')

@section('content')

<H1 class="text-center"> &copy; ariel</H1>
<div class="container">

    
<a class="btn btn-primary" href="{{route('auxiliar.create')}}">Asignar proyecto</a>
<a class="btn btn-primary mb-3 float-right" href="">Imprimir</a>

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
  @foreach($ayuda as $auxi)
    <tr>
      <th scope="row">{{ $auxi->id }}</th>
      <td>{{ $auxi->nombre }}</td>
      <td>{{ $auxi->actividad }}</td>
      <td>{{ $auxi->inicio }}</td>
      <td>{{ $auxi->fin }}</td>
      <td>{{ $auxi->tiempo }}</td>
      <td>{{ $auxi->fecha }}</td>
      <td>{{ $auxi->terminado }}</td>
      <td>{{ $auxi->comentarios }}</td>

      <td><a class=" btn btn-info botoninput" href=" {{ route('auxiliar.edit', $auxi->id)}}"><i class="fas fa-edit"></i>
    </a>
    <form action="{{ route('auxiliar.destroy',$auxi->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
      
          <button type="submit" class="btn-sm btn-danger mt-3" onclick="return confirm('Quiere borrar el registro?')" ><i class="far fa-trash-alt"></i></button>

        </form>

</td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$ayuda->links()}}
</div>



@endsection 