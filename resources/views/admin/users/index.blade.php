@extends('admin.template.main')

@section ('title', 'Lista de usuarios')

@section ('module', 'Usuarios Registrados')


@section('content')

	@if(Session::has('message'))	

		@if(Session::get('message') == 'store')
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  El usuario ha sido almacenado de manera exitosa.
			</div>
		@endif		
	@endif



	@if(Session::has ('success'))	
		
{{ dd(session (Session::all())) }}			

			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			   {{ Session::get('success') }}
			</div>
		
	@endif
	

	<a href="{{ route ('admin.users.create') }}" class="button info rounded">Registrar nuevo usuario</a>

	<table class="table border bordered" >
		<thead>
			<tr>
				<th>ID</th>
				<th>Usuario</th>
				<th>Nombre</th>
				<th>Acci&oacute;n</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->usuario }} </td>
					<td>{{ $user->nombre }} </td>
					<td>						
						<a href="{{ route ('admin.users.destroy', $user->id) }}"><span class="tag warning mif-pencil"></span></a>
						<a href="#"><span class="tag danger mif-bin"></span></a>						

					</td>
				</tr>			
			@endforeach			
		</tbody>		
	</table>	

	<center>
		{!! $users->render() !!}		
	</center>

	
	
@endsection