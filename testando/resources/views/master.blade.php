<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('build/assets/app-T6QoLwQY.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/tailwind.css'])

</head>
<body>

    <div class="container">

        @yield('content')

    </div>



        <script src="{{asset('build/assets/app-DkDdL2UM.js')}}"></script>
</body>
</html>
