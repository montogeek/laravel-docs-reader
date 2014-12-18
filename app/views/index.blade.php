<!doctype html>
<html lang="es" ng-app="docsApp">
<head>
	<meta charset="UTF-8">
	<title>Documentación de Laravel en Español versión 4.1</title>
  <link rel="stylesheet" type="text/css" href="{{ asset_path('styles/vendor.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset_path('styles/main.css') }}">
  <script type="text/javascript" src="{{ asset_path('scripts/vendor.js') }}"></script>
  <script type="text/javascript" src="{{ asset_path('scripts/app.js') }}"></script>
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
	<div class="row">
		<div class="columns large-3">
			{{ $documentation }}
		</div>
		<div class="columns large-9">
			<div ng-view>
              </div>
		</div>
	</div>
</body>
</html>