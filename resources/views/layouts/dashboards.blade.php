<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a href="/">
            <h1>TURN TO HOME</h1>
        </a>
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>