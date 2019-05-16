@extends('Project.layout')

@section('content')

<H1 class="text-center">&copy; ariel</H1>
<div class="container">

    
<a class="btn btn-primary" href="{{route('Project.create')}}">Asignar proyecto</a>





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
  @foreach($projectos as $projecto)
    <tr>
      <th scope="row">{{ $projecto->id }}</th>
      <td>{{ $projecto->nombre }}</td>
      <td>{{ $projecto->actividad }}</td>
      <td>{{ $projecto->inicio }}</td>
      <td>{{ $projecto->fin }}</td>
      <td>{{ $projecto->tiempo }}</td>
      <td>{{ $projecto->fecha }}</td>
      <td>{{ $projecto->terminado }}</td>
      <td>{{ $projecto->comentarios }}</td>

      <td><a class=" btn btn-info botoninput" href=" {{ route('Project.edit', $projecto->id)}}"><i class="fas fa-edit"></i>
    </a>
    <form action="{{ route('Project.destroy',$projecto->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
      
          <button type="submit" class="btn-sm btn-danger mt-3" onclick="return confirm('Quiere borrar el registro?')" ><i class="far fa-trash-alt"></i></button>

        </form>

</td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$projectos->links()}}
</div>



@endsection 