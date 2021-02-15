<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Students Result</title>

        <!-- Fonts -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        
        @yield('css')

        <script src="{{ asset('js/jQuery3.2.1.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>

        @yield('js')

    </head>
    <body class="body">
        @yield('content')
    </body>
</html>
