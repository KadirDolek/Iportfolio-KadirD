<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-gray-600 to-white">
    {{-- Ici la nav --}}
    @include('partials.backend.navbar')
    <main >
        {{-- ici toutes les pages nommés 'content' --}}
        {{-- @yield  --}}
    </main>
    {{-- Ici le footer  --}}
    
    
</body>
</html>