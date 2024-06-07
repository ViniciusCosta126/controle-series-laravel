<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} | Controle de Séries</title>
</head>

<body class="">
    <h1 class="">{{$title}}</h1>
    {{$slot}}
</body>

</html>