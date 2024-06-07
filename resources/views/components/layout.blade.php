<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} | Controle de Séries</title>
    @vite(['resources/css/app.scss','resources/js/app.js'])
</head>

<body class="">
    <div class="container">
        <h1 class="">{{$title}}</h1>
        {{$slot}}
    </div>
</body>

</html>