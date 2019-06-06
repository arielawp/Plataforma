@extends('layouts.admin')
	@section('content')
	{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
	<H1 class="text-center">&copy; <strong>Todos los derechos reservados Novemp 2019 </strong> </H1>

	<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email','Correo:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('password','Contraseña:')!!}
		{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
<a href="{{ route ('usuario.index') }}">Regresar</a>
	{!!Form::close()!!}
	@endsection

