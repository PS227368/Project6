<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom bij onze webshop</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-custom">
        <div class="container mx-auto flex justify-between items-center py-2">
            <a class="navbar-brand p-0" href="#">
                <img src="LogoNoText.PNG" alt="Logo" class="navbar-logo max-h-10 max-w-40">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!--Zorgt voor de wit space-->
                </ul>
                <form class="form-inline my-2 my-lg-0 flex justify-end items-center">
                    <a class="btn btn-contact mr-4" href="/contact">Demo</a>
                    <div>
                        <a class="btn btn-demo mr-2" href="#">Demo 1</a>
                        <a class="btn btn-demo mr-2" href="#">Demo 2</a>
                        <a class="btn btn-demo mr-2" href="#">Demo 3</a>
                        <a class="btn btn-demo" href="#">Demo 4</a>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mx-auto px-4 py-8">
        <div class="jumbotron bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-4xl font-bold mb-4">Welkom bij onze webshop</h1>
            <p class="text-lg mb-8">Ontdek de nieuwste aanbiedingen en trends.</p>
            <a href="#" class="btn btn-primary">Bekijk onze aanbiedingen</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-bold mb-4">Aanbevolen producten</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <!-- Producten kunnen hier worden toegevoegd -->
            </div>
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-bold mb-4">Nieuwe collectie</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <!-- Producten kunnen hier worden toegevoegd -->
            </div>
        </div>
    </div>

    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Onze Webshop. Alle rechten voorbehouden.</p>
        </div>
    </footer>
</body>

</html>
