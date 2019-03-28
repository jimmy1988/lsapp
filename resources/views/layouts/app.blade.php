<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link type="text/css" rel="stylesheet" href="{{asset('css/app.css') }}" />
      <title>{{$title}} - {{config('ap.name', 'LSAPP')}}</title>


    </head>
    <body>
      @include('inc.navbar')
      <div class="container">
        @include('inc.messages')
        @yield("content")
      </div>

      <script type="text/javascript" src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
      <script type="text/javascript">
        if(document.getElementById('article-ckeditor')){
          CKEDITOR.replace( 'article-ckeditor' );
        }
      </script>
    </body>
</html>
