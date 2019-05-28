<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course Info</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <nav>
            <a href="/">Homepage</a>
            <a href="/courses">Course</a>
            <a href="/lecture">Lecture</a>
            <a href="/class_room">Class Room</a>
        </nav>

        @yield('content')

        <footer>
            This is awesome
        </footer>
    </div>
</body>
</html>