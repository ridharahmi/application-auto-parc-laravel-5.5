<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <style>
        img.img-login {
            width: 120px;
            border-radius: 50%;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
    </style>
</head>
<body style="background: #eee;">
<div id="app">
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>
