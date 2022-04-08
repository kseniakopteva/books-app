<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book app</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="../../public/reset-css.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #0a0a0a;

            max-width: 600px;
            margin: auto;
        }

        a {
            color: orangered;
        }

        article {
            border: #aaa 1px solid;
            border-radius: 10px;
            padding: 1em;
        }

        article+article {
            margin-top: 2rem;
        }
    </style>

</head>

<body>
    <h1>Book reviews</h1>
    <h2>All Books</h2>

    <?php foreach ($books as $book) : ?>

        <article>
            <h1>
                <a href="/books/<?= $book->slug ?>">
                    <?= $book->title ?>
                </a>
            </h1>
            <p><?= $book->excerpt ?></p>
        </article>

    <?php endforeach; ?>

</body>

</html>