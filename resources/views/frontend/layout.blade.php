<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-r from-gray-200 to-yellow-200">
    {{-- Ici la nav --}}
    @include('partials.frontend.navbar')
    <main>
        {{-- ici toutes les pages nommés 'content' --}}
        @yield('content') 
    </main>
    {{-- Ici le footer  --}}
    
    
</body>
</html>