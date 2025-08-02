<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">  {{-- CSRF para fetch --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>CRUD LARAVEL</title>
</head>
<body>
    @include('fragments.navbar')

    @include('fragments.alerts')
    
    {{-- @include('fragments.errorsv') --}}
    
    @yield('sectionMain')

    @yield('scripts')  {{-- Para JS específicos de cada vista --}}

</body>
</html>
