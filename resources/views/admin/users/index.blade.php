@extends('admin.template.main')

@section ('title', 'Lista de usuarios')

@section ('module', 'Usuarios Registrados')


@section('content')

	@if(Session::has('message'))	
		
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  El usuario ha sido almacenado de manera exitosa.			  
			</div>
		
	@endif

	@if(Session::has('delete'))	
		
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>			  
			  {!! Session::get('delete') !!}
			</div>
		
	@endif

	@if(Session::has('update'))	
		
			<div class="alert alert-warning alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>			  
			  {{ Session::get('update') }}
			</div>
		
	@endif

	<a href="{{ route ('admin.users.create') }}" class="button info rounded">Registrar nuevo usuario</a>
	<div class="input-control text" data-role="input">
    <input type="text">
    <button class="button"><span class="mif-search"></span></button>
</div>

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
						<a href="{{ route ('admin.users.edit', $user->id) }}"><span class="tag warning mif-pencil"></span></a>
						<a href="{{ route ('admin.users.confirmdestroy', $user->id) }}"><span class="tag danger mif-bin"></span></a>						

					</td>
				</tr>			
			@endforeach			
		</tbody>		
	</table>	

	<center>
		{!! $users->render() !!}		
	</center>

	
	
@endsection