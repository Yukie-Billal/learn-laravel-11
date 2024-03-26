<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>
        * {
            font-family: Figtree, sans-serif
        }
        .container {
            width: 82%;
            height: 100%;

            margin: 0 auto;
        }

        .title {
            width: 100%;
            text-align: center
        }
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .todo-form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 50%
        }
    </style>
    <title>Laravel todo list</title>
</head>

<body>
    <div class="container">
        <div class="title">
            <h1>Aplikasi todolist</h1>
        </div>
        <div class="content">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
