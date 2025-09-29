<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield(section: 'title', default: 'Praktikum Blade')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel= "stylesheet">
</head>
<body>
    <nav class="navbar navbar -expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Blade Praktikum</a>
    </nav>
    <div class="container mt-4">
        @yield(section: 'content')
    </div>   
</body>
</html>
