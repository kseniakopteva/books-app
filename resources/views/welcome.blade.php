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
    <h2 class="text-2xl mb-3">All Books</h2>

    <?php foreach ($books as $book) : ?>

        <article class="border-gray-300 border-solid border rounded-lg p-3 mt-5 bg-white">
            <h1>
                <a class="underline text-xl text-red-500 mb-3 block" href="/books/<?= $book->slug ?>">
                    <?= $book->title ?>
                </a>
            </h1>
            <p><?= $book->excerpt ?></p>
        </article>

    <?php endforeach; ?>

</body>

</html>