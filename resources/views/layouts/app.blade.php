<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="{{asset('css/fontawesome-admin.min.css')}}">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-admin.min.css')}}">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{asset('css/tooplate.css')}}">
    @yield('links')
</head>

<body>
    <div class="container">
        @auth
            @include('partials._navbar-admin')
        @endauth

        @if ($errors->any())
            <div class="alert alert-danger mt-5">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
        @include('partials._footer-admin')
    </div>
    <script src="{{asset('js/jquery-3.3.1.min')}}.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- https://getbootstrap.com/ -->
    @yield('scripts')
</body>
</html>
