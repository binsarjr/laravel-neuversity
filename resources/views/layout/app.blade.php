<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Beranda')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    @stack('styles')
</head>

<body>
    @include('components.navbar')


    <div class="container">
        <h1 class="title">@yield('title')</h1>
        @yield('content')
    </div>

    @include('components.footer')

    @stack('scripts')
</body>

</html>
