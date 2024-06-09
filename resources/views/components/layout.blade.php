<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    
</head>
<body class="scroll-smooth">
    {{ $slot }}
<script src="https://kit.fontawesome.com/c98648a600.js" crossorigin="anonymous"></script>
</body>
</html>