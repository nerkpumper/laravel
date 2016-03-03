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

		{!! Form::submit ('Registrar', ['class' => 'button primary rounded']) !!}
		
	{!! Form::close() !!}

	

@endsection
