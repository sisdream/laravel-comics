<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>DC Comics</title>

    @vite('resources/js/app.js')
  </head>

  <body>
    @include('partials.header')
    <main>
      <section class="container">
          @yield('main-content')
      </section>
    </main>
    
    @include('partials.footer')
  </body>

</html>
