<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>

    <header>
        <nav>
            <h1>Hello World</h1>
            <ul>
                @foreach ($pages as $page)
                    <li>{{ $page }}</li>
                @endforeach

            </ul>
        </nav>
    </header>
</body>

</html>
