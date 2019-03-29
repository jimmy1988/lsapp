<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--SEO Here-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LSAPP Laravel Tutorial') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!--Imported Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--Custom Styles -->
    <link href="{{ asset('css/overrides.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

</head>
<body>
  <div id="app">
    @include('inc.navbar')
    <div class="container">
      @include('inc.messages')
      @yield("content")
    </div>
  </div>

  <!--Custom Scripts-->
  <script>
      CKEDITOR.replace( 'article-ckeditor' );
  </script>
</body>
</html>
