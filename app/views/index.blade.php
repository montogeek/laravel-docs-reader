<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Documentación de Laravel en Español versión 5.0 y 4.x</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Fernando Montoya">
  <meta name="description" content="Laravel - El framework PHP para artesanos de la Web.">
  <link rel="stylesheet" type="text/css" href="/styles/main.min.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato">
</head>
<body>
  <nav class="main">
    <div class="row">
      <div class="columns large-12">
        <a href="{{ url('/') }}">
          <svg class="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="58.18" height="40" viewBox="0 0 80 55">
            <image xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAAA3CAMAAACsPj19AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACo1BMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8AAACHxFhEAAAA33RSTlMABhYmN0ledIiarL3R5fTnZ1/A1Or8Jf3r18SxnYpYeM/d4FtVQSwXxmojA/ackocVCg+VbMqh4lIhjO8BtvoJNIIf+AWQw0x3BPVNb5ig3vFj7iJFcpm+rmLZhW3ftYB/7TgZm3BCHCtgYeZEEpFXhOnTtBR+p/moSyfY0jmzIC4/i2jhzam31TsO2zBppvdPxXsTMW7c4zOy2r9GB2Y6Q3mwUynJhvOiKB5WwuiflpML+w2Uzrl9PQiXq2VI8BoY/mSlzNaegxBAy07BcQI8VMfIUSRHpC9Kcza4owy69LNjTAAAAAFiS0dEAIgFHUgAAAAJcEhZcwAAIdUAACHVAQSctJ0AAARASURBVFjDrZf7XxRVGMYHDDQwRGJzuWig4AU179GCrGkhKIpcEqpN8LaKFllqClJpKWhWElGK93tlJIVklDckLc1LgqJmXp5/pffAzO6cs3Pm4+70/gBznnfe77xz9rznvKMoZEHBvZ4ICe3d58mw8L5PRfSLVKxY/7Cop6Nt4OwZK0ANMsAeExsXP7D3oGeBBCvARGDwkKTkocOCNGU4MMgCcARg55UUIGJk4MCRo4DRvDQaeM5CimNoAsdyyjibpd9lPAEn8NJEYJKFFJ+nn3g8L6UCLwQOdFCKabyUDKRPDpyYATin8FK4zzP8sRcpxam8NI2kaYETE4CXXualTGB64MAsyiebl2bMBHIeI9QRMmv29MRcUZ4D5AlSPlBgiip8ZW5Rcaq6E7wqOF8jbaKgvQ645Lg35mm7SmJJaX405gv+dGCBIC2kmxdJgS6Gil3sXrKUjcqALN6fTf5lQkwcUCxPMRbOFO9oOeDg3Kx83xRCgukhb0mB5TZk6IbxmMf736boFULMO8C78hST+MW7Eqs492oCzhFjaGbfkxPXAAt1gLVCcVQQsVIIWUHaajnRjvQg7yhZWLjrKLhKDHkfKJEDPwA+1A3pMFqvd0cRcYkQsoG0j+TEj4GNumEuNum9bN1ViyE1QKocqFQBurVDc7BZ791CxE+EiK2+Va639cCn6uVnn2/rW8sfT19QcJ0Y8iWJ9XJiZPfx8dXXFdvVQuQW8w4SGsQQOxBn8tJUTjt3qbC1u6fu2at37oNBseWQuN8YVn7g4KEqbY9ImHDYt/IjyHFEFI8arHiqy5Bvwr/VYNXf5Rsfu6UweL9jJLo55fvGtB9qVdbxph+Bn2QT0nyCbikU1Xg6Zls8+CE/nxygwgp+af31t+5pPCwjnqLbanwe4wROs4uhZ5pitLd01rnOqk+ZcU6+cbaxe8+LamU7EPr7BW1lABczG9t0firBLbIUw+j2JkEbt/+Erhn948/QFDHqkk8z47EyFlPuHV/+q3WV3QNLrdhYZhh2BbgqIbItIrPnMjjHdS3Pm9rp6w1/y16svB3tY41dN9iE0xnZkdZZ62EV3KQ/1xUTu0UTK3GxLeLocG9ititpV1tYr2PemiyWNkMd+s+Blacau49JpYsGUWZAhc7p28aewSps150zx7zqNtMjkKwXULvV0OOopu+CmhF3ebWegDtMU/zHKW2vyo4YiKxVmGUG7KKCaVUe3ybT3mJrkXk3lFZ3z9NZP4jUjiHX0LMuu1Od93a/OnPq+eBbKF336rQ1MWnueX947CTHSV5yuIs9XV2ff/2iMbtGcR3eYVvkfY127kGW3zSlZ3XnqdfB+RlODVcSejkQHFkTRQ+k//X9D83UaJ3ulABpZA9ZUlmVazynU4yrIXAaM7e+0KOLDlijMfO06qNqkpqt43o+usg2Rw77P2jMlh1f8OheockN/wGpNpMseklLFQAAAABJRU5ErkJggg==" width="80" height="55"/></image>
          </svg>
          <span>Laravel</span>
        </a>
        <ul class="right inline-list">
          @foreach ($supportedVersions as $supportedVersion)
            <li>
              {{ link_to_action('Page@getIndex', $supportedVersion, [$supportedVersion], ['class' => ($supportedVersion !== $version) ?: 'current' ]) }}
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </nav>
  <nav class="navigation">
    <div class="row">
      <div class="columns large-12">
        <ul class="inline-list">
          <li>
            <a href="//laravel.montogeek.com" class="current">Inicio</a>
          </li>
          <li>
            <a href="//github.com/laravel/">Github</a>
          </li>
          <li>
            <a href="http://laraveles.com/foro/">Foro</a>
          </li>
        </ul>
        <a href="https://github.com/montogeek/laravel-docs-es" class="call-to-action">Ayuda a traducir</a>
      </div>
    </div>
  </nav>
  <section class="content">
  	<div class="row">
  		<div class="columns large-4">
        <section class="sidebar">
  			 {{ $index }}
        </section>
  		</div>
  		<div class="columns large-8">
        <article>
  			 {{ $page }}
        </article>
  		</div>
  	</div>
  </section>
  <script src="/scripts/app.js"></script>
  <script>
  if (navigator.serviceWorker) {
    navigator.serviceWorker
      .register('/sw.js', { scope: '/' })
      .then(function(registration) {
        var isUpdate = false;
        if (registration.active) { isUpdate = true; }
        registration.onupdatefound = function(eve) {
          console.log('A new Service Worker version has been found...');
        };
        registration.installing.onstatechange = function(eve) {
          if (this.state === 'installed') {
            console.log('Service Worker Installed.');
            if (isUpdate) {
              console.log('App updated. Restart for the new version.');
            } else {
              console.log('App ready for offline use.');
            }
          } else {
            console.log('New Service Worker state: ', this.state);
          }
        };
        console.log('Registration succeeded. Scope is: ' + registration.scope);
      }).catch(function(error) {
        console.log('Registration failed with: ' + error);
      });
  };
  </script>
</body>
</html>
