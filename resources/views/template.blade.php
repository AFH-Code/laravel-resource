<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Films</title>
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
    @yield('css')
  </head>
  <body>
    <main class="section">
        <div class="container">
            @yield('content')
        </div>
    </main>
  </body>
</html>