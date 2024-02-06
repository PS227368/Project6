<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom bij onze webshop</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Voeg eventuele andere aangepaste stijlen hier toe -->
    <style>
        /* Voeg eventuele aangepaste stijlen hier toe */
        /* Dit is een voorbeeld van hoe je de body kunt centreren met flexbox */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-primary my-2 my-sm-0" href="/contact">Contactpagina</a>
                </form>
            </div>
        </nav>

        <h1>Welkom bij onze webshop</h1>
        <p>Binnenkort komt hier een nieuwe website met een webshop!</p>
        <img src="{{asset('Logo.png')}}">

        <h2>Adresgegevens van onze vestiging:</h2>  
        <ul>
            <li>Vestiging 1 - Adres 1, Tel: 123456789</li>
        </ul>
    </div>
    
</body>
</html>
