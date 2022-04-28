<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <title>Abra-</title>
      <link href="{{ mix('css/app.css')}}" rel="stylesheet">
  </head>
  <body>
  <div id="app">
      <!-- navbar -->
        @include('layouts.nav')
        @include('layouts.first')


            @include('layouts.trusted')

            @include('layouts.all-in-one')
            @include('layouts.what-is')
            @include('layouts.everything')

            @include('layouts.other')

            @include('layouts.latest')

        @include('layouts.footer')

  </div>

  <script src="{{ mix('js/app.js') }}" defer></script>
  </body>
</html>
