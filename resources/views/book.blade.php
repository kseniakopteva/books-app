<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book app</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>

<body class="font-serif max-w-2xl m-auto bg-gray-100">
    <h1 class="text-4xl mb-3 mt-4">Book reviews</h1>

    <article class="border-gray-300 border-solid border rounded-lg p-3 mt-5 bg-white">
        <?= $book ?>
    </article>


    <a class="underline text-md text-red-500 mt-5 block" href="/">Go Back</a>

</body>

</html>