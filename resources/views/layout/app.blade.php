<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>DC Comics</title>

    @vite('resources/js/app.js')
  </head>

  <body>
    @include('partials.header')
      <section class="container-fluid px-0">
          @yield('main-content')
      </section>
    @include('partials.footer')
  </body>
</html>
