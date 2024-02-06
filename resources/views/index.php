<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn Laravel App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Welkom bij mijn Laravel App</h1>
    <p>Dit is een mooie startpagina voor je Laravel-toepassing.</p>
    <div id="app">
        <example-component></example-component> <!-- Dit is een voorbeeld van een Vue-component. -->
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
