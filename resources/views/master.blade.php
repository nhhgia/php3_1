<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css') }}">  <!-- HEADER FOOTER -->
    <link rel="stylesheet" href="{{asset('css/'.trim($__env->yieldContent('page')).'.css') }}"> <!-- body -->
</head>
<body>
    @include('layouts.header')
    <div class="bdy">
    @yield('content')
    </div>
    @include('layouts.footer') 
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
