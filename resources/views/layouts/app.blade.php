<!DOCTYPE html>
<html lang="en" class="text-gray-900 leading-tight">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Opdracht 3 - @yield('title')</title>
</head>
<body class="min-h-screen bg-gray-100">
    <div class="container">
        <div id="menu">
            @include('layouts.menu')
        </div>
        <div class="bg-green-200 border-green-400 border-b p-4 m-4 rounded">
            @yield('content')
        </div>
    </div>
</body>
</html>