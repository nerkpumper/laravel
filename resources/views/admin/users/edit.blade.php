@extends('admin.template.main')

@section('title', 'Editar Usuario')

@section('module', 'Editar Usuario <strong>' . $user->nombre . '</strong>')



@section('content')
	
	{!! Form::open (['route' => ['admin.users.update', $user->id], 'method' => 'PUT']) !!}
		
		{!! Form::label ('usuario', 'Usuario') !!}						

		<div class="input-control text full-size">
			{!! Form::text ('usuario', $user->usuario, ['placeholder' => 'Usuario', 'required'] ) !!}
		</div> 				

		{!! Form::label ('nombre', 'Nombre') !!}						

		<div class="input-control text full-size">
			{!! Form::text ('nombre', $user->nombre, ['placeholder' => 'Nombre completo', 'required'] ) !!}
		</div> 				

		{!! Form::submit ('Actualizar', ['class' => 'button success rounded']) !!}
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="{{ URL::previous() }}" class="button info rounded">Regresar</a>	
		
	{!! Form::close() !!}
	

@endsection
