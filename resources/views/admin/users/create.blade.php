@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('module', 'Crear Usuario')




@section('content')
	
	{!! Form::open (['route' => 'admin.users.store', 'method' => 'POST']) !!}
		
		{!! Form::label ('usuario', 'Usuario') !!}						

		<div class="input-control text full-size">
			{!! Form::text ('usuario', null, ['placeholder' => 'Usuario', 'required'] ) !!}
		</div> 				

		{!! Form::label ('nombre', 'Nombre') !!}						

		<div class="input-control text full-size">
			{!! Form::text ('nombre', null, ['placeholder' => 'Nombre completo', 'required'] ) !!}
		</div> 				

		{!! Form::label ('password', 'Contraseña') !!}

		<div class="input-control text full-size">
			{!! Form::password ('password', ['placeholder' => '**********', 'required'] ) !!}
		</div> 	

		{!! Form::submit ('Registrar', ['class' => 'button success rounded']) !!}
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="{{ URL::previous() }}" class="button info rounded">Regresar</a>	
		
	{!! Form::close() !!}

	

@endsection
