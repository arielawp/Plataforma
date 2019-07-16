@extends('menu.layout')

@section('content')

<H1 class="text-center">&copy; ariel</H1>
<div class="container">

    
<a class="btn btn-primary" href="{{route('menu.create')}}">Asignar proyecto</a>
<a class="btn btn-primary mb-3 float-right" href="  ">Imprimir</a>





<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre del proyecto</th>
      <th scope="col">Actividad</th>
      <th scope="col">inicio del proyecto</th>
      <th scope="col">Fin del proyecto</th>
      <th scope="col">Contador</th>
      <th scope="col">Tiempo estimado de la actividad</th>
      <th scope='col'>Fecha</th>
      <th scope='col'>Terminado</th>
      <th scope='col'>Comentarios</th>
      <th scope='col'>Acciones</th>
      

    </tr>
  </thead>
  <tbody>

  @foreach($menus as $menu)
    <tr>
      <th scope="row">{{ $menu->id }}</th>
      <td>{{ $menu->nombre }}</td>
      <td>{{ $menu->actividad }}</td>
      <td>{{ $menu->inicio }}</td>
      <td>{{ $menu->fin }}</td>
      <td>{{ $menu->contador }}</td>
      <td>{{ $menus=$menu->tiempo+$menu->tiempo }}</td>
      <td>{{ $menu->fecha }}</td>
      <td>{{ $menu->terminado }}</td>
      <td>{{ $menu->comentarios }}</td>

<!-- botones pra editar y eliminar -->
      <td><a class=" btn btn-info botoninput" href=" {{ route('menu.edit', $menu->id)}}"><i class="fas fa-edit"></i>
    </a>
    <form action="{{ route('menu.destroy',$text->id) }}" method="POST">
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