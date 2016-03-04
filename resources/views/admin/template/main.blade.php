<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de Administración</title>

	<link href="{{ asset ('plugins/css/metro.css') }}" rel="stylesheet">
	<link href="{{ asset ('plugins/css/metro-icons.css') }}" rel="stylesheet">
	<link href="{{ asset ('plugins/css/metro-responsive.css') }}" rel="stylesheet">
	<link href="{{ asset ('plugins/css/metro-schemes.css') }}" rel="stylesheet">
	<!--<script src="../js/prettify/run_prettify.js"></script>-->

	<script src="{{ asset ('plugins/js/jquery-2.1.3.min.js') }}"></script>	
	<script src="{{ asset ('plugins/js/metro.js') }}"></script>
	<script src="{{ asset ('plugins/js/alert.js') }}"></script>

</head>
<!--<body style="background: url('{{ asset ('imgs/fondo2.jpg') }}') no-repeat center center fixed; background-size: cover;">-->
<body>


	<div class="container page-content" style="padding-top: 0px">
		@include ('admin.template.partials.nav')
		
		<br>				
		<!--<h1>@yield('module', '')&nbsp;<small>@yield('moduleAction', '')</small></h1>

		<hr class="thin bg-grayLighter">			

		<div class="panel ">
		    <div class="heading" style="background-color: #f8f8f8; color: #000;">
		        <span class="title">@yield('module', '')</span>
		    </div>
		    <div class="content bg-white" style="border: solid 1px #f5f5f5;">
				<section style="padding: 10px">
					@yield ('content')
				</section>			        
		    </div>
		</div>-->

		<div class="panel shadow">
		    <div class="heading @yield('panelHeadColor', '')">
		        <span class="title">@yield('module', '')</span>
		    </div>
		    <div class="content bg-white">
				<section style="padding: 10px">
					@yield ('content')
				</section>			        
		    </div>
		</div>
		
		
		<br>

		<footer >
			@include ('admin.template.partials.footer')
		</footer>

	</div>



</body>
</html>

