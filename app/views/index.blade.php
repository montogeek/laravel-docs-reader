<!doctype html>
<html lang="es" ng-app="docsApp">
<head>
	<meta charset="UTF-8">
	<title>Documentación de Laravel en Español versión 4.1</title>
  <link rel="stylesheet" type="text/css" href="{{ asset_path('styles/vendor.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset_path('styles/app.css') }}">
	{{ HTML::script('js/bower_components/angular/angular.js') }}
	{{ HTML::script('js/bower_components/angular-route/angular-route.js') }}
	{{ HTML::script('js/bower_components/angular-resource/angular-resource.js') }}
	<script>
		var app = '{{ url() }}' + '/js/docsApp/';
	</script>
	<!-- App -->
	{{ HTML::script('js/docsApp/app.js') }}
	{{ HTML::script('js/docsApp/controller.js') }}
	{{ HTML::script('js/docsApp/service.js') }}
</head>
<body>
	<nav id="primary">
	    <div class="boxed">
	        <div id="logo">
	           <a href="//laravel.com"><img src="{{ asset('assets/logo-head.png') }}" alt="Laravel"></a>
	        </div>
            <ul>
            	<li><a href="http://laravel.com">Inicio</a></li>
            	<li><a href="http://forge.laravel.com">Hosting</a></li>
            	<li><a href="http://laravel.com/api/4.1">API</a></li>
            	<li><a href="https://github.com/laravel/laravel">Github</a></li>
            	<li><a href="http://laravel.io/forum">Foro</a></li>
            	<li><a href="http://twitter.com/laravelphp">Twitter</a></li>
            </ul>
        </div>
    </nav>
	<div class="boxed">
		<div id="wrapper">
			<div class="one_third">
				{{ $documentation }}
			</div>
			<div class="two_third">
				<div ng-view>
                </div>
			</div>
		</div>
	</div>
</body>
</html>