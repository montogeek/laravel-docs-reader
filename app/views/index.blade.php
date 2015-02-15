<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Documentación de Laravel en Español versión 5.0 y 4.x</title>
  <link rel="stylesheet" type="text/css" href="{{ asset_path('styles/main.css') }}">
</head>
<body>
  <nav>
    <div class="row">
      <div class="columns large-12">
        <a href="//laravel.montogeek.co">
          <img src="{{ asset('images/logo-head.png') }}" alt="Laravel">
        </a>
        <ul class="right inline-list">
          <li>
            {{ link_to_action('Page@getIndex', '5.0', ['5.0', 'introduction']) }}
          </li>
          <li>
            {{ link_to_action('Page@getIndex', '4.1', ['4.1', 'introduction']) }}
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="columns large-12">
        <ul class="left inline-list">
          <li>
            <a href="//laravel.montogeek.co">Inicio</a>
          </li>
          <li>
            <a href="//github.com/laravel/">Github</a>
          </li>
          <li>
            <a href="http://laraveles.com/foro/">Foro</a>
          </li>
          <li>
            <a href="https://github.com/montogeek/laravel-docs-es">Ayuda a traducir</li>
        </ul>
      </div>
    </div>
  </nav>
	<div class="row">
		<div class="columns large-3">
			{{ $index }}
		</div>
		<div class="columns large-9">
			{{ $page }}
		</div>
	</div>
</body>
</html>
