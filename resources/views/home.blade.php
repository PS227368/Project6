<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Product Example</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Voeg eventuele andere aangepaste stijlen hier toe -->
    <style>
        /* Voeg eventuele aangepaste stijlen hier toe */
        /* Dit is een voorbeeld van hoe je de body kunt centreren met flexbox */
            /* body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            } */
    </style>
</head>
<body>

<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-custom">
    <a class="navbar-brand" href="#">Webshop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!--Zorgt voor de wit space-->
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-contact my-2 my-sm-0" href="/contact">Contactpagina</a>
        </form>
    </div>
</nav>
    <h1 style="margin-top: 3.5rem; text-align: center;">Alle producten</h1>

    <!-- Filter Form -->
    <form style="text-align: center;" action="{{ url('/index') }}" method="GET">
        <label for="name">Filter by Name:</label>
        <input type="text" name="name" id="name" value="{{ request('name') }}">
        <button type="submit">Filter</button>
    </form>

    <!-- Product Table -->
    <table style="margin: auto;" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
