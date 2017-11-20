<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Home') }}</title>

    <!-- Styles -->
    {!! Html::style('css/main.css') !!}
    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('css/now-ui-kit.css') !!}


</head>
<body>
    @include('partials._navbar')
    
    <div id="app">

        @yield('content')
    
    </div>

<!--     @include('partials._footer')
 -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
