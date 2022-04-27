<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <link href="{{ mix('css/app.css')}}" rel="stylesheet">
  </head>
  <body>
  <div id="app">
      <!-- navbar -->
        @include('layouts.nav')
        @include('layouts.first')

        @include('layouts.other')

        @include('layouts.footer')

  </div>

  <script src="{{ mix('js/app.js') }}" defer></script>
  </body>
</html>
