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

</head>
<body >

	<div class="container page-content" style="padding-top: 70px">
		@include ('admin.template.partials.nav')

		<h1>@yield('module', '')<small> @yield('moduleAction', '')</small></h1>

		<hr class="thin bg-grayLighter">

		<section style="padding-top: 20px">
			@yield ('content')
		</section>


		<footer style="background-color: #EFEAE3">
    <div class="container">
        <div class="padding20">
            <div class="grid">

                <div class="row cells2">
                    <div class="cell">
                        <div class="row cells4">
                            <div class="cell">
                                <img src="images/spface2.jpg" data-role="fitImage" data-format='square' data-type='bordered' data-shadow="false">
                            </div>
                            <div class="cell colspan3 padding20 no-padding-top no-padding-bottom">
                                <h1>Founder, author:</h1>
                                <p class="text-secondary">
                                    Hi! My name Sergey Pimenov and i'm author of Metro UI CSS from Kiev, Ukraine.
                                </p>
                                <div>
                                    <span class="tag info">SKILLS:</span>
                                    <span class="tag success">PHP</span>
                                    <span class="tag success">CSS</span>
                                    <span class="tag success">LESS</span>
                                    <span class="tag success">HTML</span>
                                    <span class="tag success">JavaScript</span>
                                    <span class="tag success">jQuery</span>
                                    <span class="tag success">MySQL</span>
                                    <span class="tag success">Git</span>
                                </div>
                                <br />
                                <div class="bg-white bg-red fg-white padding10 align-center no-display" id="job">
                                    Open for job offer from EU, Canada, or USA (moving).
                                </div>
                                <hr class="thin" style="margin-top: 20px" />
                                <div>
                                    <a href="https://www.jetbrains.com/phpstorm/" title="license for PhpStorm"><img src="images/jetbrains.png" style="width: 100px" ></a>
                                    <a href="http://www.microsoft.com/bizspark/default.aspx" title="Bizspark Startup"><img src="images/MSFT_logo_png.png" style="width: 100px" ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="row cells4">
                            <div class="cell">
                                <img src="images/zadorozhnyi.jpg" data-role="fitImage" data-format='square' data-type='bordered' data-shadow="false">
                            </div>
                            <div class="cell colspan3 padding20 no-padding-top no-padding-bottom">
                                <h3>Co-Founder:</h3>
                                <p class="text-secondary">
                                    Oleksander (Aleksandr) Zadorozhnyi - primary investments.
                                </p>
                                <div>
                                    <span class="tag info">SKILLS:</span>
                                    <span class="tag success">PHP</span>
									#2086bf
                                    <span class="tag success">VoIP</span>
                                    <span class="tag success">TCP/IP</span>
                                    <span class="tag success">SIP</span>
                                    <span class="tag success">IPTV</span>
                                    <span class="tag success">QoS</span>
                                    <span class="tag success">Linux</span>
                                    <span class="tag success">Start-ups</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="padding20">
            @@adsense
        </div>

        <div class="align-center padding20 text-small">
            Copyright 2012-2015 <a href="mailto:sergey@pimenov.com.ua">Sergey Pimenov</a>
        </div>
    </div>
</footer>

		
	</div>




</body>
</html>

