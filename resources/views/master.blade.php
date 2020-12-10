<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    {{-- Project Style sheet --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>E-Comm Project</title>
</head>
<body>
        {{ View::make('header') }}
           @yield('content')
        {{ View::make('footer') }}
</body>
<script src="{{ asset('/bootstrap/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</html>
