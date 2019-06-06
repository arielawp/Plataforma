@extends('Diseño.layout')

@section('content')

<H1 class="text-center">&copy; ariel</H1>
<div class="container">

    
<a class="btn btn-primary" href="{{route('Diseño.create')}}">Asignar proyecto</a>
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
  @foreach($disenos as $diseno)
    <tr>
      <th scope="row">{{ $diseno->id }}</th>
      <td>{{ $diseno->nombre }}</td>
      <td>{{ $diseno->actividad }}</td>
      <td>{{ $diseno->inicio }}</td>
      <td>{{ $diseno->fin }}</td>
      <td>{{ $diseno->tiempo }}</td>
      <td>{{ $diseno->fecha }}</td>
      <td>{{ $diseno->terminado }}</td>
      <td>{{ $diseno->comentarios }}</td>

      <td><a class=" btn btn-info botoninput" href=" {{ route('Diseño.edit', $diseno->id)}}"><i class="primary"></i>
    </a>


</td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$disenos->links()}}
</div>



@endsection 