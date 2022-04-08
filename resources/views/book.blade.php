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
    </style>

</head>

<body>
    <h1>Book reviews</h1>

    <article>
        <?= $book ?>
    </article>


    <a href="/" style="margin-top: 2rem; display: block">Go Back</a>

</body>

</html>