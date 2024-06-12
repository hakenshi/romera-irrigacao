<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    <script loading="async" defer src="https://maps.googleapis.com/maps/api/js?key="YOU_API_KEY"&callback=initMap"></script>
</head>
<body class="scroll-smooth bg-gray-50">
    <x-navbar :links="[
        ['text'=> 'Início', 'route' => 'home'], 
        ['text' => 'Produtos', 'route' => 'produtos'], 
        ['text' => 'Financiamento', 'route' => 'home'], 
        ['text' => 'Contato', 'route' => 'home']
        ]" />
    {{ $slot }}
    <x-footer />
<script src="https://kit.fontawesome.com/c98648a600.js" crossorigin="anonymous"></script>
<script src="{{ asset("map.js") }}"></script>
<script src="{{ asset("script.js") }}"></script>
</body>
</html>
