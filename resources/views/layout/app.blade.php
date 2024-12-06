<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('vendor/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/toastify.min.css')}}">
    <title>Job Portal | {{   $title ?? config('app.name') }}</title>
</head>
<body>

@include('layout.header')
<div class="d-flex" id="wrapper" style="display: flex; flex-wrap: nowrap; height: 100vh;">
    @include('pages.admin.sidebar')
    @yield('content')
</div>
@include('layout.footer')


<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/axios.min.js')}}"></script>
<script src="{{asset('js/toastify-js.js')}}"></script>
</body>
</html>

