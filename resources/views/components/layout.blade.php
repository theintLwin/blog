<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{$title}}
    <link rel="stylesheet" href="/css/app.css">
    <style>
        .bg-yellow{
            background-color: yellow;
        }
    </style>
</head>
<body>
    <x-navbar></x-navbar>
    {{$content}}
</body>
</html>
