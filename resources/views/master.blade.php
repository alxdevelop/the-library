<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Library</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  </head>
  <body>
      <div class="container">
          <div class="row">
              @include('partials.menu')
              <div class="wrap_content">
                  @yield('content')
              </div>
          </div>
      </div>
    <script src="{{ asset('/js/app.js') }}"></script>
    @stack('scripts')
  </body>
</html>
