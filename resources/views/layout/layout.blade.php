<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rainbow Six Siege')</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @yield('styles')
</head>
<body>
    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    @yield('scripts')
</body>
</html>
