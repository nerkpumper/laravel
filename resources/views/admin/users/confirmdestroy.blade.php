@extends('admin.template.main')

@section('title', 'Confirmación')

@section('module', 'Borrar Usuario <strong>' . $user->nombre . '</strong>')

@section('panelHeadColor', 'ribbed-red')

@section('content')
	<div class="alert alert-danger" role="alert">
		Se eliminará el Usuario <strong>{{ $user->nombre }}</strong>
		<br>
		<br>
		<strong>¿Esta seguro de eliminar al usuario?</strong>
	</div>
	<div>
		<a href="{{ route ('admin.users.destroy', $user->id) }}" class="button danger rounded">Borrar</a>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="{{ URL::previous() }}" class="button info rounded">Regresar</a>	
	</div>

	
@endsection