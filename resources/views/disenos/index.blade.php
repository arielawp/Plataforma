@extends('layouts.admin')

@section('content')
<br>  
<div class="container">

    
<a class="btn btn-primary" href="{{route('disenos.create')}}">Asignar proyecto</a>
<a class="btn btn-primary mb-3 float-right" href="{{ url('disenos.create') }}">Imprimir</a>
<br>
<br>

@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
<div class="row">
  <div class="col-md-6">
  <h1 class="text-center"><strong>Nombre:</strong>Nancy</h1>  

  </div>
  <div class="col-md-6">
 <h1 class="text-center"><strong>Cargo:</strong>Diseñador</h1>

  </div>
</div>   

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

  @foreach($disenos as $diseno)
  <tr>
      <th scope="row">{{ $diseno->id }}</th>
      <td>{{ $diseno->orden }}</td>
      <td>{{ $diseno->nombre }}</td>
      <td>{{ $diseno->actividad }}</td>
      <td>{{ $diseno->inicio }}</td>
      <td>{{ $diseno->fin }}</td>
      <td>{{ $diseno->tiempo }}</td>
      <td>{{ $diseno->fecha }}</td>
      <td>{{ $diseno->terminado }}</td>
      <td>{{ $diseno->comentarios }}</td>


      <td><a class=" btn btn-info botoninput" href=" {{ route('disenos.edit', $diseno->id)}}"><i class="fas fa-edit"></i>
    </a>
    <form action="{{ route('disenos.destroy',$diseno->id) }}" method="POST">
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