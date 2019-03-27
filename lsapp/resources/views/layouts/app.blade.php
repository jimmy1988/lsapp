<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link type="text/css" rel="stylesheet" href="{{asset('css/app.css') }}" />
      <title>{{$title}}</title>


    </head>
    <body>
      @yield("content")
    </body>
</html>
