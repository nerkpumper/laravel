<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel='shortcut icon' type='image/x-icon' href='../gift.ico' />
	<title>@yield ('title', 'NerkPumper') | NerkPumper</title>

	<link href="{{ asset ('plugins/css/metro.css') }}" rel="stylesheet">
	<link href="{{ asset ('plugins/css/metro-icons.css') }}" rel="stylesheet">
	<link href="{{ asset ('plugins/css/metro-responsive.css') }}" rel="stylesheet">	

</head>

<body>        

	@yield ('content')

</body>

	<script src="{{ asset ('plugins/js/jquery-2.1.3.min.js') }}"></script>
	<script src="{{ asset ('plugins/js/metro.js') }}"></script>
</html>

