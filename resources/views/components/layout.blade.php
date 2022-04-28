<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Books!!</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}?ver={{ time() }}">

    <!-- JS -->
    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>

</head>

<body class="font-serif">
    {{ $slot }}
</body>

</html>