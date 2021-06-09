<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{url('frontend/assets/LOGOWAKAMONO.svg')}}">
    <title>@yield('title')</title>
    @include('includes.style-list')
    
</head>

<body>
    @yield('content')
    <script src="{{url('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{url('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>