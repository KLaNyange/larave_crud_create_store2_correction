<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Crud create store 2</title>
</head>

<body>
    <div>
        <a href="{{ '/' }}">Home</a>
        <a href="{{ route('form') }}">Create</a>
    </div>

    @yield('content')
</body>

</html>
