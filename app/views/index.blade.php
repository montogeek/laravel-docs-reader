<!doctype html>
<html lang="es" ng-app="docsApp">
<head>
	<meta charset="UTF-8">
	<title>Documentación de Laravel en Español versión 4.1</title>
  <link rel="stylesheet" type="text/css" href="{{ asset_path('styles/main.css') }}">
  <script type="text/javascript" src="{{ asset_path('scripts/app.js') }}"></script>
</head>
<body>
  <nav>
    <div class="row">
      <div class="columns large-12">
        <a href="//laravel.com">
          <img src="{{ asset('images/logo-head.png') }}" alt="Laravel">
        </a>
        <ul class="right inline-list">
          <li>Inicio</li>
          <li>Github</li>
          <li>Foro</li>
          <li>Twitter</li>
          <li>Ayuda a traducir</li>
        </ul>
      </div>
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