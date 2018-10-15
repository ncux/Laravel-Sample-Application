<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Sample Application</title>
</head>
<body>

    <div class="container-fluid mt-0">

        @include('inc/navbar')
        @if(Request::is('/'))
            @include('inc/showcase')
        @endif

        <div class="row">
            <div class="col-md-8 col-lg-8">
                @include('inc/messages')
                @yield('content')

            </div>

            <div class="col-md-4 col-lg-4">
                @include('inc/sidebar')

            </div>

        </div>

    </div>

        <footer class="align-content-center container bg-light footer text-center mt-5 mb-3">
            &copy; 2018 <strong>ncux</strong> (Patrick Malaba) | <a href="mailto:malabatalent@gmail.com" target="_blank">malabatalent@gmail.com</a>  |
            Github profile: <a href="https://github.com/ncux" target="_blank">https://github.com/ncux</a>
        </footer>

</body>
</html>
