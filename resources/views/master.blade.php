<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.6.0-web/css/all.min.css') }}">
</head>
<body>
   @include('includes.navabar')
   <div class="w-2/3 m-auto mt-4">
        <div>
            @if(session('status'))
                <h1 class="p-2 bg-green-300 text-md">{{ session('status') }}</h1>
            @endif
        </div>
        @yield('content')
    </div>
</body>
</html>
